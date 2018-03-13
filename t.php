<?php include "db.php"; ?>

<?php session_start(); ?>
<?php

$user_id = $_COOKIE["user"];

$x=0;
//nijer jonno

$user_id = mysqli_real_escape_string($connection,$user_id);

$query = "SELECT * FROM question WHERE user_id = '{$user_id}'";
$select_user_query = mysqli_query($connection,$query);
    
if(!$select_user_query){
    
    die("QUERY FAILED: ".mysqli_error($connection));
}


while($row = mysqli_fetch_array($select_user_query)){
    
    $db_user_religion = $row['religion'];
    //$db_user_education = $row['education'];
    $db_user_home = $row['home'];
    //$db_user_weight = $row['weight'];
    
    //$db_user_salary = $row['salary'];
    //$db_user_age = $row['age'];
    $db_user_games = $row['games'];
    $db_user_movie = $row['movie'];
    
    $db_user_travel = $row['travel'];
    $db_user_pray = $row['pray'];
    $db_user_arrogant = $row['arrogant'];
    $db_user_introvert = $row['introvert'];
}

//echo $db_user_movie;
// user preference

$query = "SELECT * FROM preference_male WHERE user_id = '{$user_id}'";
$select_user_query = mysqli_query($connection,$query);
    
if(!$select_user_query){
    
    die("QUERY FAILED: ".mysqli_error($connection));
}

    
while($row = mysqli_fetch_array($select_user_query)){
    
    $db_user_height = $row['height'];
    $db_user_education = $row['education'];
    //$db_user_home = $row['home'];
    $db_user_weight = $row['weight'];
    
    $db_user_salary = $row['salary'];
    $db_user_age = $row['age'];
    /*$db_user_games = $row['games'];
    $db_user_movie = $row['movie'];
    
    $db_user_travel = $row['travel'];
    $db_user_pray = $row['pray'];
    $db_user_arrogant = $row['arrogant'];
    $db_user_introvert = $row['introvert'];*/
}



//partner er jonno

$query = "SELECT * FROM question_female";
$select_user_query = mysqli_query($connection,$query);
    
if(!$select_user_query){
    
    die("QUERY FAILED: ".mysqli_error($connection));
}

    
while($row = mysqli_fetch_array($select_user_query)){
    
    $db_partner_religion = $row['religion'];
    $db_partner_user_id = $row['user_id'];
        
    $db_partner_height = $row['height'];
    $db_partner_education = $row['education'];
    $db_partner_home = $row['home'];
    $db_partner_weight = $row['weight'];
    
    $db_partner_salary = $row['salary'];
    $db_partner_age = $row['age'];
    $db_partner_games = $row['games'];
    $db_partner_movie = $row['movie'];
    
    $db_partner_travel = $row['travel'];
    $db_partner_pray = $row['pray'];
    $db_partner_arrogant = $row['arrogant'];
    $db_partner_introvert = $row['introvert'];
    
    // calculate funnc call
    //insert into arr
    
    
    echo"$db_partner_user_id"."<br>";

$answer = 0;
$answer1 = 0;

if($db_partner_height+10>=$db_user_height || $db_partner_height-10<$db_user_height)
{
    $answer+=50;
}

if($db_partner_weight+10>=$db_user_weight || $db_partner_weight-10<$db_user_weight)
{
    $answer+=50;
}

if($db_partner_education == $db_user_education )
{
    $answer+=50;
}

if($db_partner_home == $db_user_home )
{
    $answer+=50;
    $answer1+=50;
    
}


if($db_partner_religion == $db_user_religion )
{
    $answer+=250;
    $answer1+=250;
    
}

if($db_partner_salary+1000>=$db_user_salary || $db_partner_salary-1000<$db_user_salary)
{
    $answer+=50;
}

if($db_partner_age+5>=$db_user_age || $db_partner_age-5<$db_user_age)
{
    $answer+=50;
}

if($db_partner_games == $db_user_games )
{
    $answer+=10;
    $answer1+=10;
}


if($db_partner_movie == $db_user_movie )
{
    $answer+=10;
    $answer1+=10;
}


if($db_partner_travel == $db_user_travel )
{
    $answer+=10;
    $answer1+=10;
}


if($db_partner_pray == $db_user_pray )
{
    $answer+=10;
    $answer1+=10;
}


if($db_partner_arrogant == $db_user_arrogant )
{
    $answer+=10;
    $answer1+=10;
}


if($db_partner_introvert == $db_user_introvert )
{
    $answer+=10;
    $answer1+=10;
}
//echo "$answer"."<br>";
$answer=$answer/610*100;

echo "$answer%"."<br>";
//echo "$answer1"."<br>";

//array
    
/*$girls = array
  (
    //echo "arrrrrrray";
    array($db_partner_user_id,$answer)

  );*/
    $girls[$x][0]=$db_partner_user_id;
    $girls[$x][1]=$answer;
    
    
$x++;    
    
}
echo "array";
echo "$x"."<br>";
$x--;


  function method1($a,$b) 
  {
    return ($a[1] >= $b[1]) ? -1 : 1;
  }
  usort($girls, "method1");



echo $girls[0][0];
echo $girls[0][1];

print_r($girls);


?>