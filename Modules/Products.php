<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM products WHERE $categoryId") ;
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS,"Product");
    return $result;
}

function getProduct(int $productId)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM products WHERE id=$productId") ;
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS,"Product");
    return $result[0];
}
