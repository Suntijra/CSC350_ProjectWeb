<?php
session_start();
if(isset($_SESSION['regis_completed'])){
  echo "<script type='text/javascript'>alert('Register Completed');</script>";
  unset($_SESSION['regis_completed']);
}
if(isset($_SESSION['login'])){
  $status_log = 1; 
 }
 else{
  $status_log = 0; 
  echo "<script type='text/javascript'>alert('Log in ก่อนเข้าใช้ PAGE อื่น');</script>";
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

  <div class="container">
    <div class="row align-items-center">
      <div class="col-4">
        <div class="card text-dark bg-light mb-3" style="width: 20rem; height: 30rem;">
          <div class="card-body">
            <h5 class="card-title">
              <div style="text-align: center;">ลงโฆษณา</div>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted " style="text-align: center;">LOGO</h6>
            <p class="card-text"><img src="img/No ad.png" alt="" width="100%"> </p>

          </div>
        </div>
      </div>
      <div class="col-4 ">
        <div class="fontweb">
          <center style="font-size: 5em;"> Dogecoin <img src="img/Dogecoin.png" alt="DogeCoin" height="50"></center>
          <center><img src="img/Dogmeme.png" height='500' alt="Dogememe"> </center>
          <center>
            <h2>I love DogeCoin , Dogecoin forever</h2>
          </center>
        </div>
      </div>
      <div class="col-4 ">
        <div class="card text-dark bg-light mb-3" style="width: 20rem; height: 30rem;">
          <div class="card-body">
            <h5 class="card-title">
              <div style="text-align: center;">ลงโฆษณา</div>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted " style="text-align: center;">LOGO</h6>
            <p class="card-text"><img src="img/No ad.png" alt="" width="100%"></p>

          </div>

        </div>


      </div>
    </div>

    <br>
    <hr>
    <footer>
      <center>
        <font color="red">Supported by Elon musk</font> <img src="img/rocket.png" alt="" height="40"><br>
        Twitter : <a href="https://twitter.com/elonmusk"> Elon Musk</a>
      </center>
    </footer>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-606d5abe0a0a6b67"></script>
   
</body>

</html>