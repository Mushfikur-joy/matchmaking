<?php include "db.php"; ?>

<?php session_start(); ?>
<?php
    
if(isset($_POST['submit'])){
    
$height = $_POST['height'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$weight = $_POST['weight'];
$salary = $_POST['salary'];
$home = $_POST['home'];
$education = $_POST['education'];
$religion = $_POST['religion'];
$games = $_POST['games'];
$movie = $_POST['movie'];
$travel = $_POST['travel'];  
$pray = $_POST['pray'];  
$arrogant = $_POST['arrogant'];   
$introvert = $_POST['introvert'];  
    
    
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
$gender = mysqli_real_escape_string($connection,$gender);
$weight = mysqli_real_escape_string($connection,$weight);
$salary = mysqli_real_escape_string($connection,$salary);
$home = mysqli_real_escape_string($connection,$home);
$education = mysqli_real_escape_string($connection,$education);
$religion = mysqli_real_escape_string($connection,$religion);
$games = mysqli_real_escape_string($connection,$games);    
$movie = mysqli_real_escape_string($connection,$movie);
$travel = mysqli_real_escape_string($connection,$travel);
$pray = mysqli_real_escape_string($connection,$pray);
$arrogant = mysqli_real_escape_string($connection,$arrogant);
$introvert = mysqli_real_escape_string($connection,$introvert);
$age = mysqli_real_escape_string($connection,$age);    
    
//echo "$user_id";
if($gender== "male"){
$query = "INSERT INTO question(user_id,gender,height,weight,salary,home,education,religion,age,games,movie,travel,pray,arrogant,introvert)";
$query.="VALUES('{$user_id}','{$gender}','{$height}','{$weight}','{$salary}','{$home}','{$education}','{$religion}','{$age}','{$games}','{$movie}','{$travel}','{$pray}','{$arrogant}','{$introvert}')"; 


$register_user_query = mysqli_query($connection,$query);}
    
else if($gender=="female"){
$query = "INSERT INTO question_female(user_id,religion,height,education,home,weight,salary,age,games,movie,travel,pray,arrogant,introvert)";
$query .= "VALUES('{$user_id}','{$religion}','{$height}','{$education}','{$home}','{$weight}','{$salary}','{$age}','{$games}','{$movie}','{$travel}','{$pray}','{$arrogant}','{$introvert}')";
     
//echo "$gender";   
$register_user_query = mysqli_query($connection,$query);}
    
if($register_user_query){
    header("Location: preference.php");
}

}
?>