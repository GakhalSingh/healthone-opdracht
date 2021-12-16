<?php
global $params;
$products = getAllProducts();
$users = getUsers();

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
        case 'deleteProduct':
            include_once "../Templates/admin/deleteProduct.php";
            break;
        default:
            include_once "../Templates/admin/machines.php";
            break;
    }
}