<?php session_start(); ?>


<?php



    $_SESSION['username'] = null;
    $_SESSION['password'] = null;
    $_SESSION['user_role'] = null;



    unset($_COOKIE['user']);
    setcookie('user', null, -1, '/');
    header("Location: homepage.php");   
 
    
?>