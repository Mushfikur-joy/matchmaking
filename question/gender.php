

<!DOCTYPE html>
<html>
    <head>
        <title>
            Questions
        </title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style>
       body{
           background: #2574A9 !important ;
       }
    </style>
    </head>
    <body bgcolor="#2574A9">
        <h1 style="font-size: 50px; text-align: center;">
            What's your gender?
        </h1>
        <form action="height.php" method="post">
        <div style="text-align: center; font-size: 30px;">
        
        
        
   
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input  class="btn btn-primary"  type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>