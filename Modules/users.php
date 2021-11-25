<?php
function addUser()
{
    global $pdo;
        
    $name =  $_POST['name'];
    $password =  $_POST['password'];
    $email = $_POST['email'];      
    $sql = "INSERT INTO users  VALUES ('$name','$email','$password')";
    $pdo-> exec($sql);
}
?>