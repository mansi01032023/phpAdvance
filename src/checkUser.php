<?php
session_start();
// this page is checking whether or not the user is registered with us
include_once("config.php");
if (isset($_POST)) {
    $email = $_POST['emailLogin'];
    $password = $_POST['passwordLogin'];
}

// defining the sql query for searching for respective matches with email and password
$statement = "SELECT * from `users` where `email`='$email' AND `password`='$password'";
$result = $conn->query($statement);
$str = "";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($email == $row['email'] && $password == $row['password']) {
            $str = $row['id'] . "." . $row['name'] . "." . $row['email'] . "." . $row['password'] . "." . $row['confirmPassword'];
        }
    }
}

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = base64_encode($str);
}

header("location:./showUser.php");
?>
