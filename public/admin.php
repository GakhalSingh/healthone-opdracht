<?php
global $params;
$products = getAllProducts();

if (!isAdmin()){
    logout();
    header("location:/home");

}   else {
    switch ($params[2]) {
        case 'home':
            $titleSuffix = ' | Machines';
            include_once "../Templates/admin/machines.php";
            break;
        case 'users':
            $titleSuffix = ' | Gebruikers';
            include_once "../Templates/admin/users.php";
            break;
        case 'messages':
            $titleSuffix = ' | messages';
            include_once "../Templates/admin/messages.php";
            break;
        case 'logout':
            include_once "../Templates\logout.php";
            break;
        default:
            include_once "../Templates/admin/machines.php";
            break;
    }
}