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


  <center>
    <img src="img/Dogecoin.png" width="150px" style="text-align: right;" alt="">
    <br>
    <br>
    <h3 style="font-family: Georgia, serif;">Graph Doge Coin DOGE/THB</h3>
  </center>
  <br>

  <!-- TradingView Widget BEGIN -->
  <div class="tradingview-widget-container">
    <div id="tradingview_a775f"></div>
    <div class="tradingview-widget-copyright"><a href="https://th.tradingview.com/symbols/DOGETHB/?exchange=BITKUB" rel="noopener" target="_blank"><span class="blue-text">DOGETHB ชาร์ต</span></a> โดย TradingView</div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
      new TradingView.widget({
        "width": 1080,
        "height": 720,
        "symbol": "BITKUB:DOGETHB",
        "interval": "D",
        "timezone": "Asia/Bangkok",
        "theme": "dark",
        "style": "1",
        "locale": "th_TH",
        "toolbar_bg": "#f1f3f6",
        "enable_publishing": false,
        "allow_symbol_change": true,
        "container_id": "tradingview_a775f"
      });
    </script>
  </div>
  <!-- TradingView Widget END -->
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-606d5abe0a0a6b67"></script>

</body>


</html>