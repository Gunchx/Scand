<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Scandiweb</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/product_list.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row menu_line">
                    <div class="col-md-4 col-sm-12 main_text">
                        <p>Product List</p>
                    </div>
                    <div class="col-md-6 col-xs-6 main_select">
                        <select id="delete_option" onchange="function1()">
                            <option value="1"></option>
                            <option value="2">Mass Delete Action</option>
                        </select>
                    </div>
                    <div class="col-md-1 col-xs-3 main_del_button">
                        <input type="submit" id="delete" name="delete" form="del_form" value="Apply"></input>
                    </div>
                    <div class="col-md-1 col-xs-3 main_back_button">
                        <a href="index.html"><button>Back</button></a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <form id="del_form" action="del_action.php" method="POST">
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "scandiweb";

                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT id, sku, name, price, size, weight, height, width, lenght FROM products");
                            $stmt = $conn->prepare("SELECT * FROM products ORDER BY sku");
                            $stmt->execute();
                            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                            $product = $stmt->fetchAll();

                            foreach ($product as $prod){
                                if($prod['sku']=='DVD') 
                                {
                                echo "<div class='col-md-3 col-sm-6 col-xs-12'>";
                                echo    "<div class='row items'>";
                                echo        "<div class='col-md-1 col-sm-1'>";
                                echo            "<input class='check_box' type='checkbox' name='checkbox[]' value='".$prod['id']."'>";
                                echo        "</div>";
                                echo        "<div class='col-md-11 col-sm-11'>";
                                echo            $prod['sku'].$prod['id'].'';
                                echo            '<h4>'.$prod['name'].'<h4>';
                                echo            '<h5>'.$prod['price'].' Euro</h5>';
                                echo            "Size: ".$prod['size'].' MB';
                                echo        "</div>";
                                echo    "</div>";
                                echo "</div>";
                                }
                                if($prod['sku']=='BK') 
                                {
                                echo "<div class='col-md-3 col-sm-6 col-xs-12'>";
                                echo    "<div class='row items'>";
                                echo        "<div class='col-md-1 col-sm-1'>";
                                echo            "<input class='check_box' type='checkbox' name='checkbox[]' value='".$prod['id']."'>";
                                echo        "</div>";
                                echo        "<div class='col-md-11 col-sm-11'>";
                                echo            $prod['sku'].$prod['id'].'';
                                echo            '<h4>'.$prod['name'].'<h4>';
                                echo            '<h5>'.$prod['price'].' Euro</h5>';
                                echo            "Weight: ".$prod['weight'].' g';
                                echo        "</div>";
                                echo    "</div>";
                                echo "</div>";
                                }
                                if($prod['sku']=='FURN') 
                                {
                                echo "<div class='col-md-3 col-sm-6 col-xs-12'>";
                                echo    "<div class='row items'>";
                                echo        "<div class='col-md-1 col-sm-1'>";
                                echo            "<input class='check_box' type='checkbox' name='checkbox[]' value='".$prod['id']."'>";
                                echo        "</div>";
                                echo        "<div class='col-md-11 col-sm-11'>";
                                echo            $prod['sku'].$prod['id'].'';
                                echo            '<h4>'.$prod['name'].'<h4>';
                                echo            '<h5>'.$prod['price'].' Euro</h5>';
                                echo            "Dimension: ".$prod['height'].' x '.$prod['width'].' x '.$prod['lenght'].''; 
                                echo        "</div>";
                                echo    "</div>";
                                echo "</div>";
                                }
                            }
                        }
                        catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                        $conn = null;
                    ?>
                </form>
            </div>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="./js/js.js"></script>
    </body>
</html>
