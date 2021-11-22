<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getReviews(int $product_id)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM reviews WHERE product_id = $product_id");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS, "Review");
    return $result;
}

 function saveReview($name, $stars, $review, $product_id)
 {
     global $pdo;
     $query = $pdo->prepare("INSERT INTO reviews ($name, $stars, $review, $product_id)");
     $query->execute();
 }
