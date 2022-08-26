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
        $sql = "INSERT INTO MyGuests (firstname, lastname, email,username,userpassword)
        VALUES ('black', 'coffee', 'cattuongw2000@gmail.com','admin','admin')";
        $conn->exec($sql);
            echo "Database created successfully";
    } catch(PDOException $e){
        echo $sql."<br>".$e->getMessage();
    };
    $conn = null;
?>