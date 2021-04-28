<?php
session_start();
if(isset( $_SESSION['uae'])){
  echo "<script type='text/javascript'>alert('Username already exists!');</script>";
  unset($_SESSION['uae']);
}
if (isset($_SESSION['login'])) {
  $status_log = 1;
} else {
  $status_log = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME PAGE</title>
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/bg.css">
  <script src="js/bootstrap.min.js"></script>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">DogeCoin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="news.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="graph.php">Graph</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="history.php">History</a>
          </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="img/2x/baseline_reorder_white_18dp.png" alt="">
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="contact_me.php">contact me</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="d-flex">

          <?php
          if ($status_log == 1) {
            echo '<a href="logout.php" class="nav-link" style="color: red;">LOG OUT</a>';
          } else {
            echo '<a href="register.php" class="nav-link" style="color: aliceblue;">REGISTER</a>';
            echo '<a href="login_Bootstrap.php" class="nav-link" style="color: aliceblue;">LOG IN</a>';
          }

          ?>

        </div>
      </div>

    </nav>

    <br>
  </header>
  <div style="margin: auto;
  width: 50%;
  border: 3px solid black;
  padding: 10px;">
    <form class="form-horizontal" action="register_system/insertdata.php" method="POST" oninput='pwd1.setCustomValidity(pwd1.value != pwd2.value ? "Passwords do not match." : "")'>
      <fieldset>

        <!-- Form Name -->
        <legend>Register</legend>

        <!-- Text input-->
        <div class=" form-group">
          <label class="col-md-4 control-label" for="textinput">Username</label>
          <div class="col-md-4">
            <input id="textinput" name="user" type="text" placeholder="Username" required="" autofocus="" class="form-control input-md">

          </div>


          <!-- Password input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Password</label>
            <div class="col-md-4">
              <input id="passwordinput" name="pwd1" type="password" placeholder="Password" required="" class="form-control input-md">

            </div>
          </div>

          <!-- Password input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Confrim Password </label>
            <div class="col-md-4">
              <input id="passwordinput" name="pwd2" type="password" placeholder="Password" required="" class="form-control input-md">
          
            </div>
          </div>
          <br>
          <div class="form-group">
            <div class="col-md-2">
              <input name="" type="submit" class="form-control input-md">


            </div>

      </fieldset>
    </form>
  </div>

</body>

</html>