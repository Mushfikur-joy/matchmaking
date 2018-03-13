
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

<?php
        /*$nameErr = $emailErr = $genderErr = $websiteErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["gender"])) {
        $genderErr = "Name is required";
        }
}*/
?>        





<form action="question1.php" method="post">

<h1 style="font-size: 50px; text-align: CENTER;">
    ANSWER QUESTION ABOUT YOURSELF
</h1>



 <h2 style="font-size: 40px; text-align: left;">
            1.What's your gender?
        </h2>
<div style="text-align: left; font-size: 30px;">
             
   
 <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female" required>Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male" required>Male

  
    </div>          
           
           <h3 style="font-size: 40px; text-align: left;">
            2.What's your religion?
        </h3>
<div style="text-align: left; font-size: 30px;">
             
   
 <input type="radio" name="religion" <?php if (isset($religion) && $religion=="muslim") echo "checked";?> value="muslim" required>Muslim
  <input type="radio" name="religion" <?php if (isset($religion) && $religion=="hindu") echo "checked";?> value="hindu" required>Hindu
    </div>
        <h1 style="font-size: 40px; text-align: left;">
            3.What's your height?
        </h1>
        
        <div style="text-align: left; font-size: 30px;">
        
        Answer: <input  placeholder="Height in cm" type="number" name="height" style="width: 350px; height: 40px"><br>
    </div>


        <h4 style="font-size: 40px; text-align: left;">
            4.What's your educational background?
        </h4>
        
        <div style="text-align: left; font-size: 30px;">
         <input type="radio" name="education" <?php if (isset($education) && $education=="ssc") echo "checked";?> value="ssc" required>SSC
  <input type="radio" name="education" <?php if (isset($education) && $education=="hsc") echo "checked";?> value="hsc" required>HSC
        <input type="radio" name="education" <?php if (isset($education) && $education=="bsc") echo "checked";?> value="bsc" required>HONOURS
  <input type="radio" name="education" <?php if (isset($education) && $education=="msc") echo "checked";?> value="msc" required>MASTERS
        
    </div>
    
    <h5 style="font-size: 40px; text-align: left;">
            5.What's your home devision?
        </h5>
        
        <div style="text-align: left; font-size: 30px;">
         <input type="radio" name="home" <?php if (isset($home) && $home=="dhaka") echo "checked";?> value="dhaka" required>DHAKA
  <input type="radio" name="home" <?php if (isset($home) && $home=="rangpur") echo "checked";?> value="rangpur" required>RANGPUR
        <input type="radio" name="home" <?php if (isset($home) && $home=="rajshahi") echo "checked";?> value="rajshahi" required>RAJSHAHI
  <input type="radio" name="home" <?php if (isset($home) && $home=="khulna") echo "checked";?> value="khulna" required>KHULNA
              <input type="radio" name="home" <?php if (isset($home) && $home=="chittagong") echo "checked";?> value="chittagong" required>CHITTAGONG
  <input type="radio" name="home" <?php if (isset($home) && $home=="sylhet") echo "checked";?> value="sylhet" required>SYLHET
        
    </div>
    
            <h6 style="font-size: 40px; text-align: left;">
            6.What's your weight?
        </h6>
        
        <div style="text-align: left; font-size: 30px;">
        
        Answer: <input  placeholder="Weight in kg" type="number" name="weight" style="width: 350px; height: 40px"><br>
    </div>
    
            <h7 style="font-size: 40px; text-align: left;">
            7.What's your monthly income?
        </h7>
        
        <div style="text-align: left; font-size: 30px;">
        
        Answer: <input  placeholder="income in tk" type="number" name="salary" style="width: 350px; height: 40px"><br>
    </div>
    
            <h8 style="font-size: 40px; text-align: left;">
            8.What's your age?
        </h8>
        
        <div style="text-align: left; font-size: 30px;">
        
        Answer: <input  placeholder="age" type="number" name="age" style="width: 350px; height: 40px"><br>
    
<input  class="btn btn-primary"  type="submit" name="submit" value="Submit">



</form>
</div>

</body>
</html>

