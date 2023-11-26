<?php
$warningScript = '';

session_start();

if (isset($_POST['submit'])) {
    require_once '../config.php';

    mysqli_select_db($connection, 'avito2');

    // Sanitize user input to prevent SQL injection
    $user_name = mysqli_real_escape_string($connection, $_POST['username']);
    $Title = mysqli_real_escape_string($connection, $_POST['title']);
    $Price = mysqli_real_escape_string($connection, $_POST['price']);
    $Phone_number = mysqli_real_escape_string($connection, $_POST['Phone_number']);
    $Description = mysqli_real_escape_string($connection, $_POST['description']);

    // Get User_id based on the provided username
    $getUserId = "SELECT Id FROM users WHERE username = ?";
    $getUserStmt = mysqli_prepare($connection, $getUserId);

    if (!$getUserStmt) {
        die("Error in preparing statement: " . mysqli_error($connection));
    }

    mysqli_stmt_bind_param($getUserStmt, "s", $user_name);
    mysqli_stmt_execute($getUserStmt);
    mysqli_stmt_bind_result($getUserStmt, $user_id);

    // Fetch the result
    mysqli_stmt_fetch($getUserStmt);



    mysqli_stmt_close($getUserStmt);

    // File upload handling
    $targetDir = "../../pictures/photoimport/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            // Use prepared statement to prevent SQL injection
            $Insert_sql = "INSERT INTO annonce (User_id, username, title, price, Phone_number, description, image) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($connection, $Insert_sql);

            if (!$stmt) {
                die("Error in preparing statement: " . mysqli_error($connection));
            }

            mysqli_stmt_bind_param($stmt, "ississs", $user_id, $user_name, $Title, $Price, $Phone_number, $Description, $targetFilePath);

            // Execute the statement
            $result = mysqli_stmt_execute($stmt);

            // Check if the query was successful
            if ($result) {
                // Close the statement
                mysqli_stmt_close($stmt);

                // Close the connection
                mysqli_close($connection);

                // Redirect to a confirmation page
                header("Location: ../../pages/Annoncer.php?status=Publication added");
                exit();
            } else {
                echo "Error in inserting data: " . mysqli_stmt_error($stmt);
            }
        } else {
            echo "Error uploading image to the server.";
        }
    } else {
        // Set the JavaScript code to the variable
        header("Location: ../../pages/Annoncer.php");
        echo "Error uploading image to the server.";
        
    }

    // Close the connection
    mysqli_close($connection);
}
