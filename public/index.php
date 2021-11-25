<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Open_Times.php';
require '../Modules/Reviews.php';
require '../Modules/Users.php';


$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

if (isset($_GET['id'])){
    $id = $_GET['id'];
}

switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        include_once "../Templates/categories.php";
        break;

    case 'category':
        $titleSuffix = ' | Category';
        $categories = getCategories();
        $category = getCategoryName($id);
        $products = getProducts($id);
        include_once "../Templates/category.php";
        break;
    case 'contact':
        $titleSuffix = ' | Contact';
        include_once "../Templates/contact.php";
        break;
    case 'login':
        $titleSuffix = ' | Login';
        include_once "../Templates/login.php";
        break;
    case 'machine':
        $titleSuffix = ' | Machine';
        $category = getCategoryName($id);
        $product = getProduct($id);
        $reviews = getReviews($id);
        include_once "../Templates/machine.php";
        break;
    case 'registreren':
        $titleSuffix = ' | Registreren';
        include_once "../Templates/registreren.php";
        break;
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";

        
}

function getTitle()
{
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
