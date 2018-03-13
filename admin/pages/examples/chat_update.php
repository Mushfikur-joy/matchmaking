<?php include "db.php"; ?>

<?php



$query = "INSERT INTO `chat` (`id`, `snd_usr`, `rcv_usr`, `text`) VALUES (NULL, '".$_GET['snd_usr']."', '".$_GET['rcv_usr']."', '".$_GET['text']."')";
$select_user_query = mysqli_query($connection,$query);
    
if(!$select_user_query){
    
    die("QUERY FAILED: ".mysqli_error($connection));
}

header("Location: chat.php?user_id=".$_GET['snd_usr']);

?>