<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getCategories()
{
    global $pdo;
    $selectQuery = "SELECT * FROM categories";
    $query = $pdo->prepare($selectQuery);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getCategoryName(int $id)
{
    
}
