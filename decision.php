<?php include "db.php"; ?>
<?php session_start(); ?>

<?php 
  

$user_id = $_COOKIE["user"];
 
echo "$user_id";
/*
$query = "SELECT * FROM question where user_id= '{$user_id}'";
$select_user_query = mysqli_query($connection,$query);
    
if(!$select_user_query){
    
     die("QUERY FAILED: ".mysqli_error($connection));
}

    
else{
    echo "male";
}
 
$query = "SELECT * FROM question_female where user_id= '{$user_id}'";
$select_user_query = mysqli_query($connection,$query);
    
if(!$select_user_query){
    
     die("QUERY FAILED: ".mysqli_error($connection));
}

    
else{
    echo "female";
}
*/

$query = "SELECT * FROM question WHERE user_id = '{$user_id}'";

$select_user_query = mysqli_query($connection,$query);
    
if(!$select_user_query){
    
    die("QUERY FAILED: ".mysqli_error($connection));
}

    
while($row = mysqli_fetch_array($select_user_query)){
    
    $db_user_id = $row['user_id'];
    $db_user_gender = $row['gender'];
   
    
}

echo "$db_user_gender";


if($user_id === $db_user_id && $db_user_gender === 'male'){
    
   header("Location: t.php");
      
}
    
else{
    header("Location: calculation_female.php");
}

