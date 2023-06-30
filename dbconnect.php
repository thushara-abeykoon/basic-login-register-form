<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';

    // Create a database connection
    $conn = new mysqli($host, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }


    $database = 'form';

    $query = "CREATE DATABASE $database";

    try {
        if (mysqli_query($conn, $query)) {
            //echo "Database '$database' created successfully.";
        }
    } catch (Exception $e) {
        //echo "Database Already Exists\n";
    }
    

    $query = "USE ${database};";
    mysqli_query($conn, $query);

    $query = "CREATE TABLE user_data (
        fname VARCHAR(255),
        lname VARCHAR(255),
        email VARCHAR(255),
        dob DATE,
        username VARCHAR(255) PRIMARY KEY,
        password VARCHAR(255)
    );";
    try {
        mysqli_query($conn, $query);
    } catch (Exception $th) {
        //echo "table already created";
    }

?>
