<?php
session_start();

if(isset($_SESSION['notpass'])){
  echo "<script type='text/javascript'>alert('username or password ไม่ถูกต้อง');</script>";
  unset($_SESSION['notpass']);
}
?>
<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.0/examples/sign-in/ -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Login</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

  <!-- Bootstrap core CSS -->
  <link href="./Signin Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./Signin Template for Bootstrap_files/signin.css" rel="stylesheet">
<?php 
// include('register_system/OOP/connectdb.php');

?>
</head>

<body class="text-center">
 
  <form class="form-signin" action="register_system/checkuser.php" method="POST">
    <img class="mb-4" src="/CSC350/projectweb/img/Dogecoin.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please Log in</h1>

    <input type="text" class="form-control" name="user1" placeholder="Username" required="" autofocus="">

    <input type="password" class="form-control" name="pwd1" placeholder="Password" required="">
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
    <p class="mt-5 mb-3 text-muted"><a href="index.php">Back to homepage</a> </p>
  </form>


</body>

</html>