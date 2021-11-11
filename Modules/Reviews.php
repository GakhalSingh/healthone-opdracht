<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getReviews(int $reviewId)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM reviews WHERE category_id = $reviewId");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS, "Review");
    return $result;
}

function getReview(int $reviewId)
{
    global $pdo;
    try {
        $query = $pdo->prepare("SELECT * FROM reviews WHERE id=$reviewId");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_CLASS, "Review")[0];
    } catch (PDOException $e) {
        $e->error_message;
    }

    return $result;
}
function saveReview($name, $stars, $review, $postdate)
{
    try {
        $sql = "INSERT INTO Reviews ($name, $stars, $review, $postdate)";
    } catch (PDOException $e) {
        $e->error_message;
    }
}
