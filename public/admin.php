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
            $titleSuffix = ' | Gebruikers';
            include_once "../Templates/admin/users.php";
            break;
        case 'uitloggen':
            logout();
            break;
        default:
            include_once "../Templates/admin/machines.php";
            break;
    }
}