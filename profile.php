<?php include "db.php"; ?>
<?php session_start(); ?>


<?php



$cookie_name = "user";

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    //echo $_SESSION['username'];
    //echo $_COOKIE[$cookie_name];
    header("Location: question.php");
}




       
?>


<!DOCTYPE html>
<html>
    <p>Log-out icon on a styled link button:
        <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
      </p>
       <p>Log-out icon on a styled link button:
        <a href="question.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> height
        </a>
      </p>
</html>