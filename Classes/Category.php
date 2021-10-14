<?php


class Category
{
    public $id;
    public $name;
    public $picture;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}

$selectQuery = "SELECT * FROM users WHERE id = :id";
$query = $pdo->prepare($selectQuery);
$id = filter_id(type:INPUT_GET,variable_name:"id",filter:FILTER_SANITIZE_NUMBER_INT);
$query->bindParam("id", $id);
$query->execute();
$result = $query->fetch(fetch_style:PDO,:FETCH_ASSOC);