<?php
session_start();
if(isset($_SESSION['login'])){
  $status_log = 1; 
 }
 else{
  $status_log = 0; 
  echo "<script type='text/javascript'>alert('Log in ก่อนเข้าใช้ PAGE อิ่น');</script>";
  header('location: /CSC350/projectweb/index.php');
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
  
  <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/bg.css">
    <link rel="stylesheet" href="CSS/new.css">
    <link rel="stylesheet" href="CSS/style.css">
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
                <li><a class="dropdown-item" href="#">REGISTER</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
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

        <div class="card">
            <div class="card-header">
                <div>
                    <h1></h1>
                </div>
                <div class="d-flex">
                <h2> Contact me</h2>
                   
                </div>

            </div>
            <div class="card-body pt-1">
               <div style="text-align: center;"><img src="img/5542.jpg" alt="" width="20%"></div>
                <div >
                <br>
                <center><h3 style="margin-bottom: 10px;"> นายสันติ พ่อคำจันทร์ <br> รหัสนักศึกษา 6101187</h3></center>
                </div>
                    <div>
                    <center> นักศึกษา มหาวิทยาลัยรังสิต คณะวิทยาลัยนวัตกรรมดิจิทัลเทคโนโลยี สาขาวิทยาการคอมพิวเตอร์ <br>
                    <br>
                    <div>
                    <img src="img/facebook_logos.png" width="4%" alt="Facbook"> Facbook : <a href="https://www.facebook.com/sunti.porkumjun">Sunti porkhamchan</a>
                    
                    <img src="img/ig.png" width="4%" alt="IG"> Instagram : <a href="https://www.instagram.com/domdy_ez/">domdy_ez</a>
                    </div>
                    
                    </center>
                  
                  
                    </div>
            </div>
        </div>

    </div>


    </div>


</body>

</html>