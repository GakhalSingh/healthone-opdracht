<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM products WHERE category_id = $categoryId") ;
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS,"Product");
    return $result;
}

function getProduct(int $productId)
{
    global $pdo;
    try {
        $query = $pdo->prepare("SELECT * FROM products WHERE id=$productId") ;
        $query->execute();
        $result = $query->fetch(PDO::FETCH_CLASS,"Product");
    }
    catch(PDOException $e){
        $e->error_log;
    }
    
    return $result;
}   
