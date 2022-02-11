<?php
global $params;
$products = getAllProducts();
$users = getUsers();
$messages = getMessages();
$categories = getCategories();


if (!isAdmin()){
    logout();
    header("location:/home");

}   else {
    switch ($params[2]) {
        case 'users':
            $titleSuffix = ' | Gebruikers';
            include_once "../Templates/admin/users.php";
            break;
        case 'messages':
            $titleSuffix = ' | messages';
            include_once "../Templates/admin/messages.php";
            break;
        case 'logout':
            logout();
            include_once "../Templates\logout.php";
            break;
        default:
            if(isset($_POST['delete'])) {
                $productId = filter_input(INPUT_POST, 'productId', );
                if($productId === false) {
                    $message = "<div class='alert alert-warning' role='alert'> Oeps er was een error.</div>";
                    include_once "../Templates/admin/machines.php";
                } else {
                    $succes = deleteProduct($productId);
                    $message = "<div class='alert alert-warning' role='alert'> Machine succesvol gedelete.</div>";
                    $status = "<div class='alert alert-success' role='alert'> De formulier staat leeg.</div>";
                    include_once "../Templates/admin/machines.php";
                }
            } else {
                $message = "<div class='alert alert-success' role='alert'> Machines succesvol opgehaald.</div>";
                include_once "../Templates/admin/machines.php";
            }
            if(isset($_POST['addcategorybutton'])) {
                $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
                $description = filter_input(INPUT_POST, 'description', FILTER_VALIDATE_STRING);
                if($name === false) {                    
                    $status = "<div class='alert alert-success' role='alert'> Er was een error.</div>";
                    include_once "../Templates/admin/machines.php";
                } else {
                    $succes = addCategory($name,$description);
                    $status = "<div class='alert alert-success' role='alert'> Item succesvol toegevoegd.</div>";
                    include_once "../Templates/admin/machines.php";
                }
    
            } else {
                $status = "<div class='alert alert-success' role='alert'> De formulier staat leeg.</div>";
                include_once "../Templates/admin/machines.php";
            }
            break;
    }
}