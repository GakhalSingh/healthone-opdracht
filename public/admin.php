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
                    include_once "../Templates/admin/machines.php";
                }
            } else {
                $message = "<div class='alert alert-success' role='alert'> Machines succesvol opgehaald.</div>";
                include_once "../Templates/admin/machines.php";
            }
            break;
    }
}