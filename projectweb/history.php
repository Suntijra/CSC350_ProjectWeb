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


  <div class="container">
    <div class="card">
      <div class="card-header">
        <h1>
          <center style="font-family: Georgia, serif;">History Dogecoin</center>
        </h1>
      </div>
      <div class="card-body">
        <center>
          <h5 class="card-title"><iframe width="560" height="315" src="https://www.youtube.com/embed/9GjBtOhIpmw"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe></h5>
          <p class="card-text">
          <div class="text" style="font-family:cursive; font-size: 24px; width: 70%; text-align: left;">
            <br> 
            สำหรับเหรียญ Dogecoin ถูกสร้างขึ้นโดยนาย Billy Markus วิศวกรซอฟต์แวร์ของ IBM และนาย Jackson Palmer
            วิศวกรซอฟต์แวร์ของ Adobe โดยมีแนวคิดที่จะสร้างสกุลเงินดิจิทัลที่ “รวดเร็ว เป็นมิตร สนุก
            และปราศจากค่าธรรมเนียมธนาคาร”<br><br>

            แรกเริ่มนั้น นาย Jackson แค่กล่าวติดตลกเกี่ยวกับ Dogecoin บนอินเทอร์เน็ตเท่านั้น ก่อนที่นาย Billy
            จะติดต่อเข้ามา ทั้งคู่เลยตัดสินสร้าง Dogecoin ขึ้นมาจริง ๆ เสียอย่างนั้น<br><br>

            Dogecoin ถูกสร้างขึ้นมาเมื่อวันที่ 6 ธันวาคม 2013 โดยมีเทคโนโลยีพื้นฐานเหมือนกับ Litecoin และ Luckycoin
            ที่ใช้ระบบ Proof-of-work เหมือนกัน ส่งผลให้ Dogecoin
            ไม่มีฟีเจอร์สำคัญอะไรที่แตกต่างไปจากสกุลเงินดิจิทัลสกุลอื่น ๆ ในช่วงนั้น<br><br>

            จุดเปลี่ยนสำคัญของ Dogecoin
            ด้วยความที่เป็นเหรียญที่ดูเป็นมิตร ทำให้ Dogecoin มีชุมชนที่ให้สนับสนุนอยู่เป็นจำนวนมากพอสมควร
            ส่งผลให้เกิดการนำ Dogecoin มาใช้กันจริง ๆ โดยหลัก ๆ จะใช้ในการ “ให้ทิป” บนโซเชียลเน็ตเวิร์คอย่าง Reddit หรือ
            Twitch แก่ผู้ที่ทำคอนเทนต์หรือแสดงความคิดเห็นออกมาได้น่าสนใจ คล้าย ๆ กับการกด Like บน Facebook<br><br>

            หมายความว่ามูลค่าของ Dogecoin ไม่ได้มาจากเทคโนโลยีที่อยู่เบื้องหลัง
            แต่มาจากเครือข่ายการใช้งานที่เพิ่มขึ้นเรื่อย ๆ นั่นเอง<br><br>

            และในช่วงต้นปี 2018 นั่นเอง Dogecoin ได้กลายเป็นที่สนใจของบรรดาสื่อมวลชนต่างประเทศ เนื่องจากมูลค่าตลาดรวมของ
            Dogecoin ได้ขึ้นแตะระดับ 2 พันล้านดอลลาร์ และเมื่อมีข่าวเกี่ยวกับ Dogecoin ออกมามากขึ้นเรื่อย ๆ
            จึงส่งผลให้มีนักลงทุนหน้าใหม่ ๆ ไหลเข้ามากันอย่างล้นหลาม</p>
          </div>

        </center>

      </div>
    </div>
  </div>



  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-606d5abe0a0a6b67"></script>

</body>

</html>