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
        case 'edit':
            $titleSuffix = ' | Edit Machine';
            include_once "../Templates/admin/edit.php";
            break;
        case 'messages':
            $titleSuffix = ' | Messages';
            include_once "../Templates/admin/messages.php";
            break;
        case 'logout':
            logout();
            include_once "../Templates\logout.php";
            break;
        default:
            if(isset($_POST['delete'])) {
                $productId = filter_input(INPUT_POST, 'productId');
                if($productId === false) {
                    $message = "<div class='alert alert-success' role='alert'> De formulier staat leeg.</div>";
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
            if(isset($_POST['addcategorybutton'])) {
                $name = filter_input(INPUT_POST, 'name');
                $description = filter_input(INPUT_POST, 'description');
                if($name === false) {                    
                    $message = "<div class='alert alert-success' role='alert'> De formulier staat leeg.</div>";
                    include_once "../Templates/admin/machines.php";
                } else {
                    $succes = addCategory($name,$description);
                    $message = "<div class='alert alert-success' role='alert'> Item succesvol toegevoegd.</div>";
                    include_once "../Templates/admin/machines.php";
                }
            } else {
                $message = "<div class='alert alert-success' role='alert'> Oeps! Er was een error.</div>";
                include_once "../Templates/admin/machines.php";
            }
            if(isset($_POST['addmachinebutton'])) {
                $target_dir = "img/uploads";
                var_dump("Here");
                var_dump($_FILES);
                $target_file = $target_dir . basename($_FILES["machineimageupload"]["name"]);
                $name = filter_input(INPUT_POST, 'name');
                $description = filter_input(INPUT_POST, 'description');
                $category_id = filter_input(INPUT_POST, 'categoryid');
                if($name === false) {                    
                    $message = "<div class='alert alert-success' role='alert'> De formulier staat leeg.</div>";
                    include_once "../Templates/admin/machines.php";
                } else {
                    var_dump($_FILES);
                    var_dump($target_file);
                    if (move_uploaded_file($_FILES["machineimageupload"]["tmp_name"], $target_file)){
                        $succes = addProduct($name,$description,$target_file,$category_id); 
                        $message = "<div class='alert alert-success' role='alert'> Item succesvol toegevoegd.</div>";  
                    } else {
                        $message = "<div class='alert alert-success' role='alert'> Oeps! Er was een error.</div>";
                    }
                
                    include_once "../Templates/admin/machines.php";
                }
            } else {
                $message = "<div class='alert alert-success' role='alert'> Oeps! Er was een error.</div>";
                include_once "../Templates/admin/machines.php";
            }
            break;
    }
}