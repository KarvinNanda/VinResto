<?php
if(isset($_POST['submit'])){
    session_start();
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    if(strcmp($user,"admin")==0 && strcmp($pass,"adminvinresto123")==0){
        $_SESSION['user']=$user;
        header("Location:adminPage");
    }
    else{
        $_SESSION['eror']="Wrong Credential!!!";
        header("Location:admin");
    }
}


?>