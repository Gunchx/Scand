<?php
session_start();

$errors = [];

if(isset($_POST['post_name']) && strlen($_POST['post_name']) == 0){
    $errors[] = 'Please enter name.';
}
if(isset($_POST['post_price']) && strlen($_POST['post_price']) == 0){
    $errors[] = 'Please enter price.';
}
if (count($errors) > 0) {
    $_SESSION['flash']['errors'] = $errors;
    header('Location: add_action.php');
    
} else {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scandiweb";

$sku = $_POST['post_sku'];
$name = $_POST["post_name"];
$price = $_POST["post_price"];
$size = $_POST["post_size"];
$weight = $_POST["post_weight"];
$height = $_POST["post_height"];
$width = $_POST["post_width"];
$lenght = $_POST["post_lenght"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO products (id, sku, name, price, size, weight, height, width, lenght)
    VALUES (NULL, '$sku', '$name', '$price', '$size', '$weight', '$height', '$width', '$lenght')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $_SESSION['flash']['success'] = ["Item was added."];
    header('Location: product_add.php');
    }
        catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
}
?>