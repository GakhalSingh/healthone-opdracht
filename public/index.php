<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/Open_Times.php';
require '../Modules/Reviews.php';
require '../Modules/users.php';


$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

if (isset($_GET['category_id'])){
    $id = $_GET['category_id'];
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

        // if(isset($_POST['verzenden'])) {
        //     var_dump($_POST)
        //     $name = filter_input(INPUT_POST, 'name');
        //     $stars = filter_input(INPUT_POST, 'stars');
        //     $review = filter_input(INPUT_POST, 'review');
        //     if($stars === false) {
        //         include_once "../Templates/machine.php";
        //     } else {
        //         $succes = addReview($name,$stars,$review,$id);
        //         var_dump($succes);die;
        //         include_once "../Templates/home.php";
        //     }

        // } else {
        //     include_once "../Templates/machine.php";
        // }
        include_once "../Templates/machine.php";
        break;
    case 'registreren':
        $titleSuffix = ' | Registreren';

        if(isset($_POST['verzenden'])) {
            $name = filter_input(INPUT_POST, 'name');
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, 'password');
            if($email === false) {
                include_once "../Templates/registreren.php";
            } else {
                $succes = addUser($name,$email,$password);
                var_dump($succes);die;
                include_once "../Templates/home.php";
            }

        } else {
            include_once "../Templates/registreren.php";
        }
       
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
