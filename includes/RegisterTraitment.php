

<?php

include('./config.php');

if (isset($_POST['submit'])) {

    mysqli_select_db($connection, 'Avito2');

    $name = mysqli_real_escape_string($connection, $_POST['Username']);
    $phonenumber = mysqli_real_escape_string($connection, $_POST['PhoneNumber']);
    $user_type = $_POST['role'];
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = password_hash($_POST['pswd'], PASSWORD_DEFAULT);        
    

    // Check if the email already exists
    $select = "SELECT * FROM Users WHERE email = '$email'";
    $result = mysqli_query($connection, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists!';
    } else {

        // Insert the user into the database
        $insert = "INSERT INTO Users (Username, Role, Phone_number, Email, Password) VALUES ('$name', '$user_type', '$phonenumber', '$email', '$password')";
        mysqli_query($connection, $insert);

        // Redirect to the login page

    
    }
    header('location: ../Login.php');
        exit();
}

?>

<script></script>