<?php
session_start();
spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    $path = "./classes/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    include_once($fullPath);
}
?>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <h3>PHP Advanced Autoload</h3>
    <?php
    $area = new Area(4, 5);
    echo "The area is ";
    echo $area->calculate_area() . "<br>";
    $perimeter = new Perimeter(4, 5);
    echo "The perimeter is ";
    echo $perimeter->calculate_perimeter() . "<br>";
    $volume = new Volume(4, 5, 2);
    echo "The volume is ";
    echo $volume->calculate_volume();
    ?>
    <hr>
    <h3>PHP Advanced File Handling</h3>
    <?php
    include("config.php");
    ?>
    <a href="dblog.log">View Log Files</a>
    <hr>
    <h3>PHP Advanced Acive Records</h3>
    <a href="home.php">View Home</a>
    <hr>
    <h3>PHP Advanced Tokens</h3>
    <a href="login.php">Login</a>
    <hr>
    <h3>PHP Advanced Cookies</h3>
    <a href="signup.php">Signup</a>
    <hr>
    <h3>PHP AJAX</h3>
    <a href="changeCase.php">Change Case</a>
    <hr>
    <h3>PHP Advanced Filter</h3>
    <input type="text" placeholder="Type Something..." id="specialCharacters">
    <input type="text" name="result" id="result">
    <input type="submit" value="Submit" onclick="removeSpecial()">
    <hr>
    <h3>PHP Advanced Forms</h3>
    <a href="currency.php">Currency Converter</a>
    <hr>
    <h3>PHP Advance Array</h3>
    <select id="productItem" onchange=changeProduct()>

        <option>Select Any Value</option>

        <option>Electronics</option>

        <option>Jewelry</option>

    </select>

    <select id="items" onchange="changeItems()">

    </select>

    <select id="idValue" onclick=showItems()></select>

    <table id="tableDetail"></table>
</body>
<script src="myScript.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</html>