<?php
    if(empty($_SESSION['user'])){
        header('Location: ../Login.php');
    }
?>