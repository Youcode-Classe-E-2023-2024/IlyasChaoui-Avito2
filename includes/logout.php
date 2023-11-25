<?php
session_start();
unset($_SESSION['user']);
session_destroy();
if (empty($_SESSION['user'])) {
    header('Location: ../Login.php');
    echo '<script>alert("You are loged out.")</script>';
}
?>