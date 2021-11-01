<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "root";
  $dbname = "netmatters";
//ensure database is connected.
  try{
    $db = new PDO("mysql:host=$servername;port=8889;dbname=$dbname", $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connnection Success";
  } catch(PDOException $e) {
    echo "Error in connection" . $e->getMessage();
    exit;
  };
?>