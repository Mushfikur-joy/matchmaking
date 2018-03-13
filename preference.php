
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





<form action="preference_result.php" method="post">

<h1 style="font-size: 50px; text-align: CENTER;">
    ANSWER PREFERENCES ABOUT YOUR PARTNER
</h1>

        
           

        <h1 style="font-size: 40px; text-align: left;">
            1. Height of your partner?
        </h1>
        
        <div style="text-align: left; font-size: 30px;">
        
        Answer: <input  placeholder="Height in cm" type="number" name="height" style="width: 350px; height: 40px"><br>
    </div>


        <h4 style="font-size: 40px; text-align: left;">
            2. Educational background of your partner?
        </h4>
        
        <div style="text-align: left; font-size: 30px;">
         <input type="radio" name="education" <?php if (isset($education) && $education=="ssc") echo "checked";?> value="ssc" required>SSC
  <input type="radio" name="education" <?php if (isset($education) && $education=="hsc") echo "checked";?> value="hsc" required>HSC
        <input type="radio" name="education" <?php if (isset($education) && $education=="bsc") echo "checked";?> value="bsc" required>HONOURS
  <input type="radio" name="education" <?php if (isset($education) && $education=="msc") echo "checked";?> value="msc" required>MASTERS
        
    </div>
    

            <h6 style="font-size: 40px; text-align: left;">
            3. Weight of your partner?
        </h6>
        
        <div style="text-align: left; font-size: 30px;">
        
        Answer: <input  placeholder="Weight in kg" type="number" name="weight" style="width: 350px; height: 40px"><br>
    </div>
    
            <h7 style="font-size: 40px; text-align: left;">
            4. Monthly income of your partner?
        </h7>
        
        <div style="text-align: left; font-size: 30px;">
        
        Answer: <input  placeholder="income in tk" type="number" name="salary" style="width: 350px; height: 40px"><br>
    </div>
    
            <h8 style="font-size: 40px; text-align: left;">
            5. Age of your partner?
        </h8>
        
        <div style="text-align: left; font-size: 30px;">
        
        Answer: <input  placeholder="age" type="number" name="age" style="width: 350px; height: 40px"><br>
        
        

    
<input  class="btn btn-primary"  type="submit" name="submit" value="Submit">



</form>
</div>

</body>
</html>

