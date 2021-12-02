<?php
function addMessage($email,$message):bool
{
    global $pdo;
    $query = $pdo->prepare( "INSERT INTO contactformulieren (email,message) VALUES (:email,:message)");
    $query->bindParam(':email', $email);
    $query->bindParam(':message', $message);
    return $query->execute();
}
?>