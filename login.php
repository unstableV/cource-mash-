<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
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

  <section class="container">
    <div class="login">
      <h1>Login to course mash</h1>
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
      header("Location: signedup.php");
    }else{
      echo "unsuccessful";
    }
  }
}
?>