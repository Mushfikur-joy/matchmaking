<?php include "../db.php"; ?>

<?php

if(isset($_POST['submit'])){
    
$username = $_POST['username'];
$password = $_POST['password'];
    
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
    
    
$query = "INSERT INTO login(username,user_password,user_role)";
$query .="VALUES('{$username}','{$password}','subscriber')";    
$register_user_query = mysqli_query($connection,$query);
/*if(!register_user_query){
die("QUERY FAILED ".mysqli_error($connection) . ' ' . mysqli_errno($connection));
}    
*/

//to set cookie to collect user id
$query1 = "SELECT * FROM login WHERE username = '{$username}'";
$select_user_query = mysqli_query($connection,$query1);
    
if(!$select_user_query){
    
    die("QUERY FAILED: ".mysqli_error($connection));
}

    
while($row = mysqli_fetch_array($select_user_query)){
    
    $db_user_id = $row['user_id'];
    $db_username = $row['username'];
    $db_user_password = $row['user_password'];
    $db_user_role = $row['user_role'];
    
}
  //set cookie
    
    $cookie_name = "user";
    $cookie_value = $db_user_id;
    setcookie($cookie_name, $cookie_value, time() + (60*15), "/"); // 86400 = 1 day
    
if(register_user_query){
    header("Location: ../profile.php");
}    
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/register.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
	<div class="header-w3l">
		<h1>Intelligent match making system</h1>
	</div>
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Sign Up</h2>
		<div class="sub-main">	
			<form action="registration.php" method="post">
				<input placeholder="User Name" name="username" class="name" type="text" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				
				<input  placeholder="Password" name="password" class="pass" type="password" required="">
					<span class="icon5"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				
				
				<input  class="btn btn-primary"  type="submit" name="submit" value="Submit">
			</form>
		</div>
		
</div>
<!--//main-->

<!--footer-->
<div class="footer-w3">
	<p>All rights reserved | Design by <a href="https://www.facebook.com/mushfikur.rahmann.joy"><?=$db_username?></a></p>
</div>
<!--//footer-->

</body>
</html>