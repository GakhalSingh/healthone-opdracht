<?php
function addUser($name,$email,$password):bool
{
    global $pdo;
    $query = $pdo->prepare( "INSERT INTO users (name,password,email,image) VALUES (:name,:password,:email,:image)");
    $query->bindParam(':name', $name);
    $image ="../public\img\nothing.jpeg";
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
        $sql = 'SELECT * FROM users WHERE email = :e AND password =:p';
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':e',$email);
        $sth->bindParam(':p',$password);
        $sth->setFetchMode(PDO::FETCH_CLASS,'User');
        $sth->execute();
        $user = $sth->fetch();

        if($user!==false){
            $_SESSION['user']=$user;
            if ($_SESSION['user']->id=="1"){
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
        $user = $_SESSION['user'];
        if ($user->id == "1") {
            return true;
        }
        else{
            return false;
        }
    }
    return false;
}
function logout() {
    session_unset();
    echo "test";
}

function getUsers()
{
    global $pdo;
    try {
        $query = $pdo->prepare("SELECT * FROM users") ;
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_CLASS,"user");
    }
    catch(PDOException $e){
        $e->error_message;
    }
    
    return $result;
}   