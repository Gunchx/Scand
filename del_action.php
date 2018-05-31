<?php
    session_start();

    if(isset($_POST['checkbox'])){
        $checkbox = $_POST['checkbox'];
        foreach($checkbox as $key => $num){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "scandiweb";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // sql to delete a record
            $sql = "DELETE FROM products WHERE id IN ($num)";

            // use exec() because no results are returned
            $conn->exec($sql);
            header('Location: product_list.php');
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }

        $conn = null;

        }
    }
?>
