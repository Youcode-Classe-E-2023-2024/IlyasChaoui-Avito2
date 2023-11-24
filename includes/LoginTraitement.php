<?php

@include './config.php';

session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $pass = md5($_POST['pswd']);


    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($connection, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['user_type'] == 'Announcer') {

            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');
        } elseif ($row['user_type'] == 'Viewer') {

            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
        }
    } else {
        $error[] = 'incorrect email or password!';
    }
};
