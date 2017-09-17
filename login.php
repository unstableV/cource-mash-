<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
<style>
  .s{
    margin-left: 400px;

  }
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="login page.css">
   <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<h3 style="background-color:#4863A0; padding:0.5% 0 0.5% 0; border:2px #4863A0">
   <center><h4> Course Mash</h4></center>
   </h3>
<body>
<div class="row " >
  <div class="col-sm-4 s" align="center">

    <section class="container">
      <div class="login">
        <h2>Login to course mash</h2>
        <hr>
        <form method="post" action="">
         <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
         <p><input type="password" name="password" value="" placeholder="Password"></p>
         <p class="remember_me">
           <label>
             <input type="checkbox" name="remember_me" id="remember_me">
             Remember me on this computer
           </label>
         </p>
         <p class="submit"><input type="submit" name="commit" value="Login"></p>
        </form>
      </div>
      <div class="login-help">
       <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p>
      </div>
    </section>
  </div>
  <div class="col-sm-4">
      <br>
      <br>
      <br>
      <br>
      <br>

      <img src="https://us.123rf.com/450wm/morrmota/morrmota1303/morrmota130300001/18392402-vector-tree-in-black-and-white.jpg?ver=6" height="400px" width="400px" >
  </div>
</div>


  <section class="about">
    <p class="about-links">
      <a href="http://www.cssflow.com/snippets/login-form" target="_parent"></a>
      <a href="http://www.cssflow.com/snippets/login-form.zip" target="_parent"></a>
    </p>
    <p class="about-author">
      &copy; 2017&ndash;2020 <a href="http://thibaut.me" target="_blank">@cource mash</a> -
      <a href="http://www.cssflow.com/mit-license" target="_blank">Education License</a><br>
  </section>
</body>
</html>
<?php
require "config.php";
config();

if(isset($_POST['commit'])){

  $email=$_POST['login'];
  $pass=$_POST['password'];
  $sql="SELECT * FROM main WHERE emailid='$email'";
  if(!mysql_query($sql)){

    die("error");
  }else{
    $sql1=mysql_fetch_row(mysql_query($sql));
    if($sql1[1]==$pass && $sql1[0]==$email){
      header("Location: department.html");
    }else{
      echo "unsuccessful";
    }
  }
}
?>