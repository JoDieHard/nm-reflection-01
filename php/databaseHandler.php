<?php

// $dbServerName = "localhost";
// $dbUserName = "root";
// $dbPassword = "";
// $dbName = "netmatters_mysql";

// $db = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

// $db = new PDO("mysql:host=localhost;db_name=netmatters_mysql;port=3306", "Username", "Password");


$user = "root";
$pass = "";

    try {
        $db = new PDO("mysql:host=localhost;dbname=netmatters_mysql;charset=utf8mb4", $user, $pass);
        foreach($db->query('SELECT * from articles') as $article) {
            print_r($article);
        }
        $db = null;
        
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>