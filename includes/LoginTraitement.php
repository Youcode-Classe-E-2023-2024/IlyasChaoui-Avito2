<?php

@include './config.php';


session_start();

if (isset($_POST['submit'])) {

    mysqli_select_db($connection, 'Avito2');

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $CheckPass = $_POST['pswd'];

    // Fetch the hashed password from the database based on the provided email
    $select = "SELECT * FROM Users WHERE Email = '$email'";
    $result = mysqli_query($connection, $select);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        // Use password_verify to check if the entered password is correct
        if (password_verify($CheckPass, $row['Password'])) {

            if ($row['Role'] == 'Annoncer') {
                $_SESSION['user'] = $row['Id'];
                header('location: ../pages/Annoncer.php');
            } elseif ($row['Role'] == 'Viewer') {
                $_SESSION['user'] = $row['Id'];
                header('location: ../pages/Viewer.php');
            }
        } else {

            $_SESSION['error_message'] = 'Incorrect email or password!';
            header('location: ../Login.php');
            exit();
        }
    } else {

        $_SESSION['error_message'] = 'Incorrect email or password!';
        header('location: ../Login.php');
        exit();
    }
}
