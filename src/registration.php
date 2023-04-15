<?php
include_once("./config.php");
// setting the variables with their respective fields
if(isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
}
// defining the sql statement to insert values into the db
    $statement = "INSERT INTO `users`(`id`, `name`, `email`, `password`, `confirmPassword`) VALUES (NULL, '$name', '$email', '$password', '$confirmPassword')";
    if($conn -> query($statement) === true && $password == $confirmPassword){
        $stmt = "SELECT `id` FROM `users` where `email` = '$email' AND `password` = '$password'";
        $result = $conn -> query($stmt);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
              $text = $row['id'];
            }
        }
        setcookie("email", $email, time() + (86400 * 30), "/");
        setcookie("password", $password, time() + (86400 * 30), "/");
    }else{
        echo false;
    }
    header("location: login.php");
?>
