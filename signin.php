<?php
   error_reporting(0);
   require 'db/dbcon.php';
   //include 'db/error.php';
   if(!empty($_GET['error'])){
     $message = "1"; // if error message is 1 then display login message above the login screen.
   }
   if(isset($_POST['submit']))
   {
     if(!empty($_POST['username']) && !empty($_POST['password']))
     {
       $username = trim($_POST['username']);
       $password = trim($_POST['password']);
       $result = $dbcon->prepare('SELECT username,pass FROM users WHERE username =? and pass=?') or die('error prepare');
       $result->bind_param('ss',$username,$pass) or die('error bind');
       $result ->execute() or die('error execute')or die('error execute.');
       $res= count($result);
       $result->bind_result($username,$password) or die('error bind result.');
       if($res==1)
       {
         echo "<script>alert('successfully loggedIn!..');</script>";
         session_start();
         $_SESSION['user']=$username;

         header('location:posts.php');
       }
       else
       {
         if($res>1)
         {
           echo "<script>alert('There was a problem encountered with your credentials Please contact sysadmin.');</script>";
         }
         if($res==0)
         {
           echo "<script>alert('no details found for these user!');</script>";
         }
       }



     }
   }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>signin</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- Optional theme -->
  </head>
  <body>
    <?php
       if(!empty(trim($message))){
         echo '';
       }

     ?>
    <div class="container">

      <form class="form-signin" action="signin.php" method="post">
         <h1 class="text-center">signin</h1>
           <p>
              <label class="sr-only">Email address</label>
              <input type="email" class="form-control"name="username" placeholder="Email address" required autofocus/>
            </p>
            <p>
              <label class="sr-only">Password</label>
              <input type="password" class="form-control" name="password" required autofocus placeholder="Password"/>
            </p>
            <p class="checkbox"><label><input type="checkbox"/>RememberMe</label></p>
            <input type="submit" name="submit" value="Login" class="btn btn-success btn-block"/>
      </form>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
