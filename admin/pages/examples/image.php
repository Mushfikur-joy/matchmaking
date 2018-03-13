<!DOCTYPE html>
<html>
<body>

<?php
$user_id = $_COOKIE["user"];
//echo $user_id;
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <br>
    <label for="fileToUpload_01">Image 1: </label><input type="file" name="fileToUpload_01" id="fileToUpload_01">
    <br>
    <label for="fileToUpload_01">Image 2: </label><input type="file" name="fileToUpload_02" id="fileToUpload_02">
    <br>
    <label for="fileToUpload_01">Image 3: </label> <input type="file" name="fileToUpload_03" id="fileToUpload_03">
     <br>
    <label for="fileToUpload_01">Image 4: </label> <input type="file" name="fileToUpload_04" id="fileToUpload_04">
    <br>
    <label for="fileToUpload_01">Image 5: </label><input type="file" name="fileToUpload_05" id="fileToUpload_05">
    <br>
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>