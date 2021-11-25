<?php
function addUser($name,$email,$password):bool
{
    global $pdo;
              
    $query=$pdo->prepare( "INSERT INTO users (name,password,email,image) VALUES ($name,$password,$email,' ')");
    return $query->execute();
}
?>