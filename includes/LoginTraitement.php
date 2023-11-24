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
                $_SESSION['Announcer_name'] = $row['Id'];
                header('location: ../Annoncer.php');
            } elseif ($row['Role'] == 'Viewer') {
                $_SESSION['Viewer_name'] = $row['Id'];
                header('location: ../Viewer.php');
            }
        } else {
            echo 'Incorrect email or password!';
        }
    } else {
        echo 'Incorrect email or password!';
    }
}
