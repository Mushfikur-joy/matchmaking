<?php include "db.php"; ?>
<?php

$user_id = $_COOKIE["user"];

$query = "SELECT `username`,`img_1`,`img_2`,`img_3`,`img_4`,`img_5` FROM `login` WHERE `user_id`=".$user_id;
$select_user_query = mysqli_query($connection,$query);
    
if(!$select_user_query){
    
    die("QUERY FAILED: ".mysqli_error($connection));
}

// to set profile 

$query9 = "SELECT * FROM question WHERE user_id = '{$user_id}'";

$select_user_query9 = mysqli_query($connection,$query9);

if(!$select_user_query9){

    die("QUERY FAILED: ".mysqli_error($connection));  
}

//to check male female

if(mysqli_num_rows ( $select_user_query9) == 0){
                         // female sure
    $query9 = "SELECT * FROM question_female WHERE user_id = '{$user_id}'";

    $select_user_query9 = mysqli_query($connection,$query9);

    if(!$select_user_query9){

        die("QUERY FAILED: ".mysqli_error($connection));
    }
        while($row = mysqli_fetch_array($select_user_query9)){

        $db_profile_id = $row['user_id'];
        $db_profile_gender ="female";


        }
}

while($row = mysqli_fetch_array($select_user_query9)){

    $db_profile_id = $row['user_id'];
    $db_profile_gender = $row['gender'];


}
 
//check male female finish

//make profile info

if($user_id === $db_profile_id && $db_profile_gender === 'male'){

    

    $query10 = "SELECT * FROM question WHERE user_id = '{$user_id}'";
    $select_user_query10 = mysqli_query($connection,$query10);

    if(!$select_user_query10){

         die("QUERY FAILED: ".mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_user_query10)){

            $db_profile_religion = $row['religion'];
            $db_profile_age = $row['age'];
            
                        
            $db_profile_education = $row['education'];
            $db_profile_home = $row['home'];
            $db_profile_height = $row['height'];

                        
            
    }

}

//pro set for female

else{

    

    $query10 = "SELECT * FROM question_female WHERE user_id = '{$user_id}'";
    $select_user_query10 = mysqli_query($connection,$query10);

    if(!$select_user_query10){

         die("QUERY FAILED: ".mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($select_user_query10)){

            $db_profile_religion = $row['religion'];
            $db_profile_age = $row['age'];
            
                        
            $db_profile_education = $row['education'];
            $db_profile_home = $row['home'];
            $db_profile_height = $row['height'];

                        
            
    }

}


//pic upload previous work
while($row = mysqli_fetch_array($select_user_query)){
    
    $db_username = $row['username'];   
    $db_img_1 = $row['img_1'];    
    $db_img_2 = $row['img_2'];    
    $db_img_3 = $row['img_3'];    
    $db_img_4 = $row['img_4'];    
    $db_img_5 = $row['img_5'];
    
}


// input weight from database


$query22 = "SELECT * FROM weight";
$select_user_query22 = mysqli_query($connection,$query22);
    
if(!$select_user_query22){
    
    die("QUERY FAILED: ".mysqli_error($connection));
}

while($row = mysqli_fetch_array($select_user_query22)){
    
    $qs_religion = $row['religion'];   
    $qs_height = $row['height'];    
    $qs_education = $row['education'];
    $qs_home = $row['home'];
    $qs_weight = $row['weight'];    
    $qs_income = $row['income'];    
    $qs_age = $row['age'];
    
    $qs_game = $row['game'];    
    $qs_movie = $row['movie'];
    $qs_travel= $row['travel'];
    $qs_pray = $row['pray'];    
    $qs_arrogant = $row['arrogant'];    
    $qs_introvert = $row['introvert'];
    
}

//echo "$qs_religion";


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | User Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">



  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-collapse" onload="sortTable()">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">SOULMATE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->


          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=$db_img_1?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$db_username?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=$db_img_1?>" class="img-circle" alt="User Image">

                <p>
                  <?=$db_username?> 
                  
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../../../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?=$db_img_1?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?=$db_username?></h3>

             

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Religion</b> <a class="pull-right"><?=$db_profile_religion?></a>
                </li>
                <li class="list-group-item">
                  <b>Age</b> <a class="pull-right"><?=$db_profile_age?></a>
                </li>
                <li class="list-group-item">
                  <b>Height</b> <a class="pull-right"><?=$db_profile_height?></a>
                </li>
              </ul>

            <!--  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>  -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                <?=$db_profile_education?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><?=$db_profile_home?>,Bangladesh</p>

              <hr>

              

              <hr>

             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Search</a></li>
              <li class=""><a href="#timeline" data-toggle="tab">Suggestion</a></li>
              <!-- <li><a href="../../../decision.php" >Timeline</a></li> -->
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">


                <!-- Post -->
                <div class="post clearfix">

                  <!-- /.user-block -->
                  <p>
                    To search user profile.
                  </p>

                  <form class="form-horizontal" action="search.php" method="get">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <input class="form-control input-sm" placeholder="Search" name="search_user">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Search</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?=$db_img_1?>" alt="User Image">
                        <span class="username">
                          <a href="#"><?=$db_username?></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="<?=$db_img_1?>" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?=$db_img_2?>" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?=$db_img_3?>" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?=$db_img_4?>" alt="Photo">
                          <br>
                          <img class="img-responsive" src="<?=$db_img_5?>" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->

              <!-- /.tab-pane -->
            
            <!-- timeline tab -->

              <div class="tab-pane" id="timeline">


                <!-- Post -->
                
                <!-- Post -->
                <div class="post clearfix">

                  <!-- /.user-block -->
                  <p>
                     <br>
                    
                    <!-- Beginning of PHP Block -->

                    <?php

                    $x=0;
                    
                    //check male female
                    $query = "SELECT * FROM question WHERE user_id = '{$user_id}'";

                    $select_user_query = mysqli_query($connection,$query);

                    if(!$select_user_query){

                        die("QUERY FAILED: ".mysqli_error($connection));
                    }
                             
                    if(mysqli_num_rows ( $select_user_query) == 0){
                         // female sure
                        $query = "SELECT * FROM question_female WHERE user_id = '{$user_id}'";

                        $select_user_query = mysqli_query($connection,$query);

                        if(!$select_user_query){

                            die("QUERY FAILED: ".mysqli_error($connection));
                        }
                         while($row = mysqli_fetch_array($select_user_query)){

                        $db_user_id = $row['user_id'];
                        $db_user_gender ="female";


                    }
                    }


                    while($row = mysqli_fetch_array($select_user_query)){

                        $db_user_id = $row['user_id'];
                        $db_user_gender = $row['gender'];


                    }

                    //echo "$db_user_gender";


                    if($user_id === $db_user_id && $db_user_gender === 'male'){

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

                    ?>
                    
                  <!-- /.box-header -->
                    <div class="box-body">
                      <table class="table table-bordered" id="myTable" style="margin-top:-170px">
                        <tbody>

                         <tr>
                          <th><p align="center">User Name</p></th>
                      <!--    <th><p align="center">Match Found</p></th>    -->
                          <th><p align="center">Photo</p></th>
                          <th><p align="center">View User Profile</p></th>
                        </tr>
                    
                    <?php
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


                        //echo"$db_partner_user_id"."<br>";
                        
                        // query into login table
                        $query_login = "SELECT * FROM login where user_id=".$db_partner_user_id;
                        $select_user_query_login = mysqli_query($connection,$query_login);

                        if(!$select_user_query_login){
                            die("QUERY FAILED: ".mysqli_error($connection));
                        }
                        
                        while($row = mysqli_fetch_array($select_user_query_login)){
                            $db_partner_username = $row['username'];
                            $db_partner_img = $row['img_1'];
                        }?>
                        
                      
                      <br>
                      
                      

                      

                   <?php
                    $answer = 0;
                    $answer1 = 0;

                    if($db_partner_height+10>=$db_user_height || $db_partner_height-10<$db_user_height)
                    {
                        //$answer+=$qs_height;
                        
                        //trapezoidal membership funtion
                        //first half
                        
                        if($db_partner_height<$db_user_height)
                        {
                            $a=$db_user_height-10;
                            $height=($db_partner_height-$a)/($db_user_height-$a);
                            $answer+=($qs_height*$height);
                        }
                        //second half
                        else if($db_partner_height>$db_user_height)
                        {
                            $a=$db_user_height+10;
                            $height=($a-$db_partner_height)/($a-$db_user_height);
                            $answer+=($qs_height*$height);
                        }
                        //if equal
                        else
                        {
                            $answer+=$qs_height;
                        }
                        
                    }

                    if($db_partner_weight+10>=$db_user_weight || $db_partner_weight-10<$db_user_weight)
                    {
                       // $answer+=$qs_weight;
                        if($db_partner_weight<$db_user_weight)
                        {
                            $a=$db_user_weight-10;
                            $weight=($db_partner_weight-$a)/($db_user_weight-$a);
                            $answer+=($qs_weight*$weight);
                        }
                        //second half
                        else if($db_partner_weight>$db_user_weight)
                        {
                            $a=$db_user_weight+10;
                            $weight=($a-$db_partner_weight)/($a-$db_user_weight);
                            $answer+=($qs_weight*$weight);
                        }
                        //if equal
                        else
                        {
                            $answer+=$qs_weight;
                        }
                    }

                    if($db_partner_education == $db_user_education )
                    {
                        $answer+=$qs_education;
                    }

                    if($db_partner_home == $db_user_home )
                    {
                        $answer+=$qs_home;
                       

                    }


                    if($db_partner_religion == $db_user_religion )
                    {
                        $answer+=$qs_religion;
                        

                    }

                    if($db_partner_salary+1000>=$db_user_salary || $db_partner_salary-1000<$db_user_salary)
                    {
                        $answer+=$qs_income;
                    }

                    if($db_partner_age+5>=$db_user_age || $db_partner_age-5<$db_user_age)
                    {
                        $answer+=$qs_age;
                    }

                    if($db_partner_games == $db_user_games )
                    {
                        $answer+=$qs_game;
                        
                    }


                    if($db_partner_movie == $db_user_movie )
                    {
                        $answer+=$qs_movie;
                        $answer1+=10;
                    }


                    if($db_partner_travel == $db_user_travel )
                    {
                        $answer+=$qs_travel;
                        $answer1+=10;
                    }


                    if($db_partner_pray == $db_user_pray )
                    {
                        $answer+=$qs_pray;
                        $answer1+=10;
                    }


                    if($db_partner_arrogant == $db_user_arrogant )
                    {
                        $answer+=$qs_arrogant;
                        $answer1+=10;
                    }


                    if($db_partner_introvert == $db_user_introvert )
                    {
                        $answer+=$qs_introvert;
                        $answer1+=10;
                    }
                    //echo "$answer"."<br>";
                    $answer1=0;
                    $answer1=$qs_religion+$qs_height+$qs_weight+$qs_education+$qs_home+$qs_income+$qs_age;
                    $answer1+=$qs_game+$qs_movie+$qs_pray+$qs_travel+$qs_arrogant+$qs_introvert;
                    $answer=$answer/$answer1*100;

                    //echo "$answer%"."<br>";
                        
                    ?>
                    


                        <tr>
                          <td align="center" style="vertical-align:middle;font-size:20px;"><?=$db_partner_username?></td>
                          <td align="center" style="vertical-align:middle;font-size:20px;display : none"><?=number_format((float)$answer, 2, '.', '')." %"?></td>    
                          <td align="center" style="vertical-align:middle;font-size:20px;"><img src="<?=$db_partner_img?>" alt="" width="200"></td>
                          <td align="center" style="vertical-align:middle;font-size:20px;"><a href="user_profile.php?user_id=<?=$db_partner_user_id?>"><?=$db_partner_username?></a></td>
                        </tr>
                        <?php


                        ?>


                    
                    
                    <?php
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
                    }

   

                    //nijer jonno
                    else{
                    $user_id = mysqli_real_escape_string($connection,$user_id);

                    $query = "SELECT * FROM question_female WHERE user_id = '{$user_id}'";
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
                        
                        
                        
                        
                    ///////gale implement
                        
                        
                     
          

                    //partner er jonno

                    $query = "SELECT * FROM question";
                    $select_user_query = mysqli_query($connection,$query);

                    if(!$select_user_query){

                        die("QUERY FAILED: ".mysqli_error($connection));
                    }

                    ?>
                    
                  <!-- /.box-header -->
                    <div class="box-body">
                      <table class="table table-bordered" id="myTable" style="margin-top:-170px">
                        <tbody>

                         <tr>
                          <th><p align="center">User Name</p></th>
                       <!--   <th><p align="center">Match Found</p></th>    -->
                          <th><p align="center">Photo</p></th>
                          <th><p align="center">View User Profile</p></th>
                        </tr>
                    
                    <?php
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


                        //echo"$db_partner_user_id"."<br>";
                        
                        // query into login table
                        $query_login = "SELECT * FROM login where user_id=".$db_partner_user_id;
                        $select_user_query_login = mysqli_query($connection,$query_login);

                        if(!$select_user_query_login){
                            die("QUERY FAILED: ".mysqli_error($connection));
                        }
                        
                        while($row = mysqli_fetch_array($select_user_query_login)){
                            $db_partner_username = $row['username'];
                            $db_partner_img = $row['img_1'];
                        }?>
                        
                      
                      <br>
                      
                      

                      

                   <?php
                    $answer = 0;
                    $answer1 = 0;

                    if($db_partner_height>$db_user_height-10 || $db_partner_height<$db_user_height+10)
                    {
                        //$answer+=50;
                        //$answer+=$qs_height;
                        
                        //trapezoidal membership funtion
                        //first half
                        
                        if($db_partner_height<$db_user_height)
                        {
                            $a=$db_user_height-10;
                            $height=($db_partner_height-$a)/($db_user_height-$a);
                            
                            $answer+=($qs_height*$height);
                        }
                        //second half
                        else if($db_partner_height>$db_user_height)
                        {
                            $a=$db_user_height+10;
                            $height=($a-$db_partner_height)/($a-$db_user_height);
                            $answer+=($qs_height*$height);
                        }
                        //if equal
                        else
                        {
                            $answer+=$qs_height;
                        }
                        
                    }

                    if($db_partner_weight+10>=$db_user_weight || $db_partner_weight-10<$db_user_weight)
                    {
                        //$answer+=50;
                        // $answer+=$qs_weight;
                        if($db_partner_weight<$db_user_weight)
                        {
                            $a=$db_user_weight-10;
                            $weight=($db_partner_weight-$a)/($db_user_weight-$a);
                            $answer+=($qs_weight*$weight);
                        }
                        //second half
                        else if($db_partner_weight>$db_user_weight)
                        {
                            $a=$db_user_weight+10;
                            $weight=($a-$db_partner_weight)/($a-$db_user_weight);
                            $answer+=($qs_weight*$weight);
                        }
                        //if equal
                        else
                        {
                            $answer+=$qs_weight;
                        }
                    }
                        
                    //newly calculation
                        ////
                        ////
                    if($db_partner_education == $db_user_education )
                    {
                        $answer+=$qs_education;
                    }

                    if($db_partner_home == $db_user_home )
                    {
                        $answer+=$qs_home;
                       

                    }


                    if($db_partner_religion == $db_user_religion )
                    {
                        $answer+=$qs_religion;
                        

                    }

                    if($db_partner_salary+1000>=$db_user_salary || $db_partner_salary-1000<$db_user_salary)
                    {
                        $answer+=$qs_income;
                    }

                    if($db_partner_age+5>=$db_user_age || $db_partner_age-5<$db_user_age)
                    {
                        $answer+=$qs_age;
                    }

                    if($db_partner_games == $db_user_games )
                    {
                        $answer+=$qs_game;
                        
                    }


                    if($db_partner_movie == $db_user_movie )
                    {
                        $answer+=$qs_movie;
                        $answer1+=10;
                    }


                    if($db_partner_travel == $db_user_travel )
                    {
                        $answer+=$qs_travel;
                        $answer1+=10;
                    }


                    if($db_partner_pray == $db_user_pray )
                    {
                        $answer+=$qs_pray;
                        $answer1+=10;
                    }


                    if($db_partner_arrogant == $db_user_arrogant )
                    {
                        $answer+=$qs_arrogant;
                        $answer1+=10;
                    }


                    if($db_partner_introvert == $db_user_introvert )
                    {
                        $answer+=$qs_introvert;
                        $answer1+=10;
                    }
                    //echo "$answer"."<br>";
                    $answer1=0;
                    $answer1=$qs_religion+$qs_height+$qs_weight+$qs_education+$qs_home+$qs_income+$qs_age;
                    $answer1+=$qs_game+$qs_movie+$qs_pray+$qs_travel+$qs_arrogant+$qs_introvert;
                    $answer=$answer/$answer1*100;

                   /*
                   
                   //previous calculation
                    /////
                   /////
                   
                   
                   
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
                    $answer=$answer/610*100;*/

                    //echo "$answer%"."<br>";
                        
                    ?>
                    


                        <tr>
                          <td align="center" style="vertical-align:middle;font-size:20px;"><?=$db_partner_username?></td>
                          <td align="center" style="vertical-align:middle;font-size:20px;display : none"><?=number_format((float)$answer, 2, '.', '')." %"?></td>
                          <td align="center" style="vertical-align:middle;font-size:20px;"><img src="<?=$db_partner_img?>" alt="" width="200"></td>
                          <td align="center" style="vertical-align:middle;font-size:20px;"><a href="user_profile.php?user_id=<?=$db_partner_user_id?>"><?=$db_partner_username?></a></td>
                        </tr>
                        
                        
                        <?php


                        ?>


                    
                    
                    <?php
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
                    }
                    ?>
                    
                    
                    
                      </tbody></table>

                    </div>
                    
                    <?php
                   // echo "array";
                    //echo "$x"."<br>";
                    $x--;


                      function method1($a,$b) 
                      {
                        return ($a[1] >= $b[1]) ? -1 : 1;
                      }
                      usort($girls, "method1");



                 // echo $girls[0][0];
                  //  echo $girls[0][1];
                             
                             
                             

                  //  print_r($girls);


                    ?>
                    
                   <?php
                            
                            
                    ?>
                    
                    <!-- Ending of PHP Block -->
                    
                  </p>

                  
                </div>
                <!-- /.post -->

                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->

              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->
           
            
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script>
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      //check if the two rows should switch place:
      if (y.innerHTML.toLowerCase() > x.innerHTML.toLowerCase() ) {
        //if so, mark as a switch and break the loop:
        shouldSwitch= true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>
<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>