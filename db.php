<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE scandiweb";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scandiweb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE products (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    sku VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    price VARCHAR(255) NOT NULL,
    size VARCHAR(255) NOT NULL,
    height VARCHAR(255) NOT NULL,
    width VARCHAR(255) NOT NULL,
    lenght VARCHAR(255) NOT NULL,
    weight VARCHAR(255) NOT NULL
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table Products created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>