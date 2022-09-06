<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users_account";
    
    $conn = new mysqli($severname,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    };
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        username VARCHAR(20) NOT NULL,
        userpassword VARCHAR(20) NOT NULL,
        re_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if($conn->query($sql) === TRUE){
        echo "Table MyGuests created successfully";
    }else {
        echo "Error creating table: ".$conn->error;
    };
    
?>