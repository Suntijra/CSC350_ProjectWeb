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

        <div class="card">
            <div class="card-header">
                <div>
                    <h1>ราคาเหรียญ Dogecoin พุ่งกว่า 10% หลัง Elon Musk กล่าว “SpaceX จะพา Dogecoin ไปดวงจันทร์”</h1>
                </div>
                <div class="d-flex">
                    April 1,2021
                </div>

            </div>
            <div class="card-body pt-1">
                <div class=" text-center"><img src="img/elonmusklovedoge.jpg" class="card-body" alt="elonmusklovedoge">
                </div>
                <div>
                    <h4> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ราคาเหรียญมีมหมาที่โดนใช้งานบ่อยโดยนาย Elon Musk นั้นดูเหมือนว่าจะมีราคาพุ่งขึ้นอย่างรุนแรงกว่า
                        10% โดยเกิดขึ้นหลังจากที่เขานั้นออกมากล่าวว่า SpaceX จะพาเจ้าหมาตัวนี้ไปดวงจันทร์
                            
                        โดยอ้างอิงจากทวิตเตอร์ของนาย Elon Musk นั้น เขาออกมากล่าวว่า
                            
                        “SpaceX นั้นจะพา Dogecoin ไปยังดวงจันทร์จริง ๆ”</h4>
                        <br>
                        ภายหลังจากนั้นไม่นานราคาของคู่เทรด DogeUSDT ก็ได้พุ่งขึ้นกว่า 10% เลยทีเดียวในวันนี้
                </div>
                <div class=" text-center"><img src="img/dogegraph.jpg" width="70%" class="card-body" alt="elonmusklovedoge"></div>
                เป็นที่ทราบกันดีว่านาย Elon Musk นั้นมักจะออกมาทวีตเกี่ยวกับ Dogecoin อยู่บ่อย ๆ แต่ในครั้งนี้ดูเหมือนว่าเขาจะมีการนำเอาบริษัทของเขาอย่าง SpaceX มาเกี่ยวข้องด้วย ซึ่งแตกต่างกว่าหลาย ๆ ครั้ง

ที่น่าสนใจก็คือ การออกมาทวีตดังกล่าวของนาย Musk มีขึ้นไม่กี่วันหลังจากที่จรวดทดสอบของ SpaceX เกิดปัญหาระเบิดขึ้น
                    
            </div>
        </div>

    </div>


    </div>


</body>

</html>