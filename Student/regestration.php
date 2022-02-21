<?php
require_once '../decoupage/operation.php';
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
 if(empty($email) && empty($password))
{
    header('location: ../index.php?error=UserName and Password are required');
    exit;
}

else if(empty($email))
{
    header('location: ../index.php?error=UserName Is Required');
    exit;


}
else if(empty($password))
{
    header('location: ../index.php?error=Password Is Required');
    exit;

}





$con=connexion();
if(isset($_POST['check']))
{
    setcookie('email_cookie', $_POST['email'], time()+60,'/');
    setcookie('password_cookie', $_POST['password'], time()+60,'/');
}
    
else
{
    setcookie('email');
    setcookie('password');
}

if(isset($_POST['email']) && isset($_POST['password']))
{
   
        $req=$con->prepare("select * from admin where email=? and password=?");
        $req->execute(array($_POST['email'],$_POST['password']));
        $row=$req->fetch();
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
        $nblignes=$req->rowCount();
        if($nblignes>0)
        {
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            header('location: ../Dashboard/dashboard.php');
        }
        else
        header('location: ../index.php');
}




?>
