<html>
<head>
<title>signup</title>
 <link rel="stylesheet" href="signup.css">
   <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
</head>
<h3 style="background-color:#4863A0; padding:0.5% 0 0.5% 0; border:2px #4863A0">
   <center><h4> Course Mash</h4></center>
   </h3>
 <section class="container1">
<form action="" method="post">
  <div class="container">
    <label><b>Email</b></label>
    <input name='email' type="text" placeholder="Enter Email" name="email" required>
    <span id="email"></span>
    <label><b>Password</b></label>
    <input name='pass' type="password" placeholder="Enter Password" name="psw" required>

    <label><b>Repeat Password</b></label>
    <input name='cpass' type="password" placeholder="Repeat Password" name="psw-repeat" >
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button name='cancel' type="button"  class="cancelbtn">Cancel</button>
      <input name='submit' type="submit" class="signupbtn" value="Sign Up"/>
       <button class="signupbtn"><a href="login.php">GET LOGIN</a></button>
    </div>
  </div>
  </form>
  </section>
  <section class="about">
    <p class="about-links">
      <a href="http://www.cssflow.com/snippets/login-form" target="_parent"></a>
      <a href="http://www.cssflow.com/snippets/login-form.zip" target="_parent"></a>
    </p>
    <p class="about-author">
      &copy; 2017&ndash;2020 <a href="http://thibaut.me" target="_blank">@cource mash</a> -
      <a href="http://www.cssflow.com/mit-license" target="_blank">Education License</a><br>
<?php
require 'config.php';
config();


if(isset($_POST['submit'])){

  $email=$_POST['email'];
  $pass=$_POST['pass'];
  echo $email.$pass;
  $sql="INSERT INTO main(emailid,pass) VALUES('$email','$pass')";
  if(!mysql_query($sql)){
    echo "<script>document.getElementById('email').innerHTML='already exists';</script>";
   die("error".mysql_error());
  }else{
echo "successful";
  }
}
?>