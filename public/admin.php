<?php
global $params;

if (!isAdmin()){
    logout();
    header("location:/home");

}   else {
    switch ($params[2]) {
        case 'home:':
            include_once "Templates\admin\home.php";
            break;
        case 'addProduct':
            echo "dit komt binnekort";
            break;
        case 'deleteProduct':
            echo "dit komt later";
            break;
        case 'users':
            echo "dit komt zo";
            break;
        default:
            include_once "Templates\admin\home.php";
            echo "er was een error";
            break;
    }
}