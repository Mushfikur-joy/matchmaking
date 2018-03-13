<?php include "db.php"; ?>

<?php session_start(); ?>
<?php
    
if(isset($_POST['submit'])){
    
$height = $_POST['height'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$salary = $_POST['salary'];
$education = $_POST['education'];
    
    
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

$user_id = $_COOKIE["user"];
    

    
mysqli_free_result($result);

//echo "$gender";
$height = mysqli_real_escape_string($connection,$height);
$user_id = mysqli_real_escape_string($connection,$user_id);
$weight = mysqli_real_escape_string($connection,$weight);
$salary = mysqli_real_escape_string($connection,$salary);
$education = mysqli_real_escape_string($connection,$education);
$age = mysqli_real_escape_string($connection,$age);
    
    
echo "$user_id";
//if($gender== "male"){
$query = "INSERT INTO preference_male(user_id,height,weight,salary,education,age)";
$query .="VALUES('{$user_id}','{$height}','{$weight}','{$salary}','{$education}','{$age}')"; 


$register_user_query = mysqli_query($connection,$query);
//}
/*    
else if($gender=="female"){
$query = "INSERT INTO preference(user_id,height,weight,salary,education,age)";
$query .="VALUES('{$user_id}','{$height}','{$weight}','{$salary}','{$education}','{$age}')"; 
     
echo "$gender";   
$register_user_query = mysqli_query($connection,$query);}*/
    
if($register_user_query){
    header("Location: admin/pages/examples/image.php");
}

}
?>