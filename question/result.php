<?php include "../db.php"; ?>

<?php session_start(); ?>
<?php
    
if(isset($_POST['submit'])){
    
$height = $_POST['height'];
$gender = $_POST['gender'];

echo "$gender";

if($gender){
    header("Location: height.php");
}
   
    
$height = $_POST['height'];    
echo "$gender";    
echo "$height";    
    
    
    
    
    
    
/***
$db['db_host']="localhost";
$db['db_user']="root";
$db['db_pass']="";
$db['db_name']="marriage";

foreach($db as $key=>$value){
    define(strtoupper($key),$value);
}


$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
$query = "SET NAMES utf8";
mysqli_query($connection,$query);
***/
/*    
$sql = "SELECT user_id FROM login where user_role ='subscriber'"; 
$result = mysqli_query($connection, $sql);
    
if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}
 
if (mysqli_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}
    
while ($row = mysqli_fetch_assoc($result)) {
    $user_id = $row["user_id"];
}
    
mysqli_free_result($result);

echo "$gender";
$height = mysqli_real_escape_string($connection,$height);
$user_id = mysqli_real_escape_string($connection,$user_id);
$gender = mysqli_real_escape_string($connection,$gender);
    
//echo "$user_id";

$query = "INSERT INTO question(user_id,gender,height)";
$query .="VALUES('{$user_id}','{$gender}','{$height}')"; 

$register_user_query = mysqli_query($connection,$query);
/*if($register_user_query){
    header("Location: weight.php");
}*/

}
?>