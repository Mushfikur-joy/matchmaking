<?php include "db.php"; ?>
<?php session_start(); ?>

<?php 

if(isset($_POST['submit'])) {
    

    
$username = $_POST['username'];
$password = $_POST['password'];


$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// $user_role = mysqli_real_escape_string($connection,$user_role);

$query = "SELECT * FROM login WHERE username = '{$username}'";
$select_user_query = mysqli_query($connection,$query);
    
if(!$select_user_query){
    
    die("QUERY FAILED: ".mysqli_error($connection));
}

    
while($row = mysqli_fetch_array($select_user_query)){
    
    $db_user_id = $row['user_id'];
    $db_username = $row['username'];
    $db_user_password = $row['user_password'];
    $db_user_role = $row['user_role'];
    
}

if($username === $db_username && $password === $db_user_password){
    
    $_SESSION['username'] = $db_username;
    $_SESSION['user_id'] = $db_user_id;
    $_SESSION['password'] = $db_user_password;
    $_SESSION['user_role'] = $db_user_role;
    
    $cookie_name = "user";
    $cookie_value = $db_user_id;
    setcookie($cookie_name, $cookie_value, time() + (60*115), "/"); // 86400 = 1 day
   
    if(isset($_SESSION['user_role'])){
        
        if($_SESSION['user_role']!=='admin'){
            header("Location: admin/pages/examples/profile.php");
        }
        
        else{
            header("Location: admin/pages/examples/admin.php");
        }
    }
    
    
  /*  
    if($db_user_role === 'admin')
    {
        header("Location: admin.php");
    }
    
    else if($db_user_role !== 'admin'){
    header("Location: profile.php");
    }
    
    */
      
}
    
else{
    header("Location: homepage.php");
}


}
