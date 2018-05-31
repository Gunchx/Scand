<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Scandiweb</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/product_add.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row menu_line">
                <div class="col-md-10 col-sm-12 main_text">
                    <p>Product Add</p>
                </div>
                <div class="col-md-1 col-sm-6 main_add_button">
                    <input type="submit" form="add_form" value="Save"></input>
                </div>
                <div class="col-md-1 col-sm-6 main_back_button">
                    <a href="index.html"><button>Back</button></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row input_menu">
                <form id="add_form" action="add_action.php" method="POST" onsubmit="return checkforblank()">
                    <div class="success">
                        <ul>
                            <?php
                                if (isset($_SESSION['flash']) && isset($_SESSION['flash']['success'])) {
                                    foreach ($_SESSION['flash']['success'] as $msg){
                                        echo "<li>$msg</li>";
                                    }
                                    unset($_SESSION['flash']['success']);
                                }
                            ?>
                        </ul>
                    </div>
                    <label>SKU:</label><input type="text" id="SKU" name="post_sku" value=""><br>
                    <label>Name:</label><input type="text" id="name" name="post_name" value=""><br>
                    <label>Price:</label><input type="text" id="price" name="post_price" value=""> Euro<br>
                    <div class="errors">
                        <ul>
                            <?php
                                if (isset($_SESSION['flash']) && isset($_SESSION['flash']['errors'])) {
                                    foreach ($_SESSION['flash']['errors'] as $error){
                                        echo "<li>$error</li>";
                                    }
                                    unset($_SESSION['flash']['errors']);
                                }
                            ?>
                        </ul>
                    </div>
                    <label>Type Switcher:</label> 
                    <select id="type_switcher" name="type_switcher" onchange="function2()">
                        <option value="1">Type Switcher</option>
                        <option value="2">Book</option>
                        <option value="3">Disc</option>
                        <option value="4">Furniture</option>
                    </select>
                    <div id="disc_menu">
                        <p>DVD Disc</p>
                        <label>Size in Mb:</label> <input type="text" id="size" name="post_size" value=""><br>
                        <h6>Please: write size in MB (1000MB = 1GB)</h6>
                    </div>    
                    <div id="book_menu">
                        <p>Book</p>
                        <label>Weight in g:</label> <input type="text" id="weight" name="post_weight" value=""><br>
                        <h6>Please: write weight in grams (1000gr = 1kg) </h6>   
                    </div>
                    <div id="furniture_menu">
                        <p>Furniture</p>
                        <label>Height in cm:</label> <input type="text" id="height" name="post_height" value=""><br>
                        <label>Width in cm:</label> <input type="text" id="width" name="post_width" value=""><br>
                        <label>Lenght in cm:</label> <input type="text" id="lenght" name="post_lenght" value=""><br>
                        <h6>Please: write dimension in cm (10mm = 1cm)</h6>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="./js/js.js"></script>
</body>
</html>
