

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
      
<form action="result.php" method="post">

<h1 style="font-size: 50px; text-align: CENTER;">
    ANSWER QUESTION ABOUT YOURSELF
</h1>


 <h2 style="font-size: 40px; text-align: left;">
            9.Do you like games?
        </h2>
<div style="text-align: left; font-size: 30px;">
             
   
 <input type="radio" name="games" <?php if (isset($games) && $games=="1") echo "checked";?> value="1">yes 
  <input type="radio" name="games" <?php if (isset($games) && $games=="0") echo "checked";?> value="0">no

    </div> 
    

 <h3 style="font-size: 40px; text-align: left;">
            10.Do you like to watch movie?
        </h3>
<div style="text-align: left; font-size: 30px;">
             
   
 <input type="radio" name="movie" <?php if (isset($movie) && $movie=="1") echo "checked";?> value="1">yes
  <input type="radio" name="movie" <?php if (isset($movie) && $movie=="0") echo "checked";?> value="0">no

    </div> 
    
 <h4 style="font-size: 40px; text-align: left;">
            11.Do you like to travel?
        </h4>
<div style="text-align: left; font-size: 30px;">
             
   
 <input type="radio" name="travel" <?php if (isset($travel) && $travel=="1") echo "checked";?> value="1">yes
  <input type="radio" name="travel" <?php if (isset($travel) && $travel=="0") echo "checked";?> value="0">no

    </div>
 <h5 style="font-size: 40px; text-align: left;">
            12.Do you pray to your GOD?
        </h5>
<div style="text-align: left; font-size: 30px;">
             
   
 <input type="radio" name="pray" <?php if (isset($pray) && $pray=="1") echo "checked";?> value="1">yes
  <input type="radio" name="pray" <?php if (isset($pray) && $pray=="0") echo "checked";?> value="0">no

    </div> 
    
  <h6 style="font-size: 40px; text-align: left;">
            13.Are you arrogant?
        </h6>
<div style="text-align: left; font-size: 30px;">
             
   
 <input type="radio" name="arrogant" <?php if (isset($arrogant) && $arrogant=="1") echo "checked";?> value="1">yes
  <input type="radio" name="arrogant" <?php if (isset($arrogant) && $arrogant=="0") echo "checked";?> value="0">no

    </div> 
      <h7 style="font-size: 40px; text-align: left;">
            14.Are you introvert?
        </h7>
<div style="text-align: left; font-size: 30px;">
             
   
 <input type="radio" name="introvert" <?php if (isset($introvert) && $introvert=="1") echo "checked";?> value="1">yes
  <input type="radio" name="introvert" <?php if (isset($introvert) && $introvert=="0") echo "checked";?> value="0">no

    </div>                                                                                              
  

<input type="hidden" name="height" value="<?=$_POST['height']?>">
<input type="hidden" name="age" value="<?=$_POST['age']?>">
<input type="hidden" name="gender" value="<?=$_POST['gender']?>">
<input type="hidden" name="weight" value="<?=$_POST['weight']?>">
<input type="hidden" name="salary" value="<?=$_POST['salary']?>">
<input type="hidden" name="home" value="<?=$_POST['home']?>">
<input type="hidden" name="education" value="<?=$_POST['education']?>">
<input type="hidden" name="religion" value="<?=$_POST['religion']?>">
 
<input  class="btn btn-primary"  type="submit" name="submit" value="Submit">

</form>
</div>
</body>
</html>