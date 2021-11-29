<?php

function addUser($name,$email,$password):bool
{
    global $pdo;
    $query = $pdo->prepare( "INSERT INTO users (name,password,email,image) VALUES (:name,:password,:email,:image)");
    $query->bindParam(':name', $name);
    $image ="nothing.jpeg";
    $query->bindParam(':password', $password);
    $query->bindParam(':email', $email);
    $query->bindParam(':image', $image);
        return $query->execute();
}
?>