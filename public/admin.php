<?php
global $params;

if (!isAdmin()){
    logout();
    header("location:/home");

}   else {
    switch ($params[2]) {
        case 'home:':
            $titleSuffix = ' | Thuis';
            include_once "../Templates/admin/home.php";
            break;
        case 'machines':
            $titleSuffix = ' | Machines';
            echo "dit komt binnekort";
            include_once "../Templates/admin/machines.php";
            break;
        case 'users':
            $titleSuffix = ' | Gebruikers';
            echo "dit komt zo";
            include_once "../Templates/admin/users.php";
            break;
        case 'uitloggen':
            logout();
            break;
        default:
            include_once "../Templates/admin/home.php";
            break;
    }
}