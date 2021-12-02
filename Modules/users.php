<?php
function addUser($name,$email,$password):bool
{
    global $pdo;
    $query = $pdo->prepare( "INSERT INTO users (name,password,email,image) VALUES (:name,:password,:email,:image)");
    $query->bindParam(':name', $name);
    $image ="nothing.jpeg";
    $query->bindParam(':password', $password);
    $query->bindParam(':email', $email);
    $query->bindParam(':image', $image);
    return $query->execute();
};

function checkLogin():string{
    global $pdo;
        $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        $password=filter_input(INPUT_POST,'password');
    if ($email!== null && $email !== false && !empty($password)){
        $sql = 'SELECT * FROM 'users' WHERE 'email' = :e AND 'password' =:p';
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':e',$email);
        $sth->bindParam(':p',$password);
        $sth->setFetchMode(PDO::FETCH_CLASS,'User');
        $sth->execute();
        $user = $sth->fetch();

        if($user!==false){
            $_SESSION['user']=$user;
            if ($_SESSION['user']->role=="admin"){
                return 'ADMIN';
            }
            else{
                return 'MEMBER';
            }
        }
        return 'FAILURE';
    }
    return 'INCOMPLETE';
};

function isAdmin():bool {
    if (isset($_SESSION['user']) &&!empty($_SESSION['user'])){
        if ($user->role == "admin") {
            return true;
        }
        else{
            return false;
        }
    }
    return false;
}
