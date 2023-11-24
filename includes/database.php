<?php

include("config.php");



// Select database
mysqli_select_db($connection, 'avito2');

// Create table of user
$sql_table_user = "CREATE TABLE IF NOT EXISTS Users (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(100) NOT NULL,
    Role VARCHAR (50) NOT NULL,
    Phone_number VARCHAR (50) NOT NULL,
    Email VARCHAR (50) NOT NULL,
    Password VARCHAR (200) NOT NULL
    )";
if (mysqli_query($connection, $sql_table_user)) {
    echo "Table user created successfully <br> ";
} else {
    echo "Error creating table: <br>  ";
}


// Create table of annonce
$sql_table_annoce = "CREATE TABLE IF NOT EXISTS Annonce (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(100) NOT NULL,
    Title VARCHAR(100) NOT NULL,
    Price INT(50) NOT NULL,
    Description VARCHAR(200) NOT NULL,
    Phone_number VARCHAR (50) NOT NULL,
    Image VARCHAR(200) NOT NULL,
    User_id INT NOT NULL,
    FOREIGN KEY (User_id) REFERENCES Users(Id)
    )";

if (mysqli_query($connection, $sql_table_annoce)) {
    echo "Table Annonce created successfully <br> ";
} else {
    echo "Error creating table:<br>  ";
}


?>