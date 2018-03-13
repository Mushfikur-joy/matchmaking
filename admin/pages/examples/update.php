<?php include "db.php";

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$user_role = $_POST['user_role'];
$user_password = $_POST['user_password'];


$query_adm = "UPDATE `login` SET `user_id` = '".$user_id."', `username` = '".$username."', `user_role` = '".$user_role."', `user_password` = '".$user_password."' WHERE `login`.`user_id` = '".$user_id."'";
$select_user_query_adm = mysqli_query($connection,$query_adm);
    
if(!$select_user_query_adm){
    
    die("QUERY FAILED: ".mysqli_error($connection));
}


header("Location: admin.php");

?>