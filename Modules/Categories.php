<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getCategories()
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM categories");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS,"Category");
    return $result;
}

function getCategoryName(int $id)
{
    global $pdo;
    $query=$pdo->prepare("SELECT name FROM categories WHERE id=$id");
    $query->execute();
    $result=$query->fetch(PDO::FETCH_COLUMN);
    return $result;
}

function AddCategory($name,$description):bool
{
    global $pdo;
    $query = $pdo->prepare("INSERT INTO categories (name,description) VALUES (:name,:description)");
    $query->bindParam(':name', $name);
    $query->bindParam(':description', $description);
    $image ="../public/img/nothing.jpeg";
    return $query->execute();
    
};


