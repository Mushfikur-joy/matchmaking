<?php include "db.php"; ?>

<?php




$query = "DELETE FROM `login` WHERE `login`.`user_id` = ".$_GET['user_id'];
$select_user_query = mysqli_query($connection,$query);
    
if(!$select_user_query){
    
    die("QUERY FAILED: ".mysqli_error($connection));
}

header("Location: admin.php");

?>