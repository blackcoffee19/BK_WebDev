<?php
    $severname = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDBPDO";
    try{
        $conn = new PDO("mysql:host=$severname;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            username VARCHAR(20) NOT NULL,
            userpassword VARCHAR(20) NOT NULL,
            re_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        $conn->exec($sql);
    } catch(PDOException $e){
        echo $sql."<br>".$e->getMessage();
    };
?>