<?php include "db.php";

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$user_role = $_POST['user_role'];
$user_password = $_POST['user_password'];


$query_adm = "INSERT INTO `login` (`user_id`, `username`, `user_role`, `user_password`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`) VALUES ('".$user_id."', '".$username."', '".$user_role."', '".$user_password."', '', '', '', '', '')";
$select_user_query_adm = mysqli_query($connection,$query_adm);
    
//if(!$select_user_query_adm){
    
//    die("QUERY FAILED: ".mysqli_error($connection));
//}


header("Location: admin.php");

?>