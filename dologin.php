<?php 

    session_start();
    
    if($_POST['txtUserName'] == "super"){
        $_SESSION["username"] = "Super Administrator";
        $_SESSION["usertype"] = "super_admin";
    }
    
    if($_POST['txtUserName'] == "admin"){
        $_SESSION["username"] = "Administrator";
        $_SESSION["usertype"] = "admin";
    }

    if($_POST['txtUserName'] == "user"){
        $_SESSION["username"] = "User";
        $_SESSION["usertype"] = "user";
    }

    header("Location: index.php");
?>