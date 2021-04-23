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
    <link rel="stylesheet" href="CSS/new.css">
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
        <div class="row align-items-start">
            <div class="col">
                <div class="main">
                    <div class="img">
                        <img src="img/Dogmeme.png" alt="">
                    </div>
                    <div class="content">
                        <div class="date"> April 1,2021</div>
                        <div class="center">
                            <h4>ราคาเหรียญ Dogecoin พุ่งกว่า 10%</h1>
                                <p>ราคาเหรียญมีมหมาที่โดนใช้งานบ่อยโดยนาย Elon Musk
                                    นั้นดูเหมือนว่าจะมีราคาพุ่งขึ้นอย่างรุนแรงกว่า 10%
                                    โดยเกิดขึ้นหลังจากที่เขานั้นออกมากล่าวว่า SpaceX จะพาเจ้าหมาตัวนี้ไปดวงจันทร์

                                    โดยอ้างอิงจากทวิตเตอร์ของนาย Elon Musk นั้น เขาออกมากล่าวว่า

                                    “SpaceX นั้นจะพา Dogecoin ไปยังดวงจันทร์จริง ๆ”</p>
                        </div>

                    </div>
                    <div class="footer">
                        <div class="ft-l">
                            <img src="img/Dom.jpg" alt="">
                            <p> Dom</p>

                        </div>
                        <div class="ft-r">
                            <a href="newDetail.php">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="main">
                    <div class="img">
                        <img src="img/Dogmeme.png" alt="">
                    </div>
                    <div class="content">
                        <div class="date"> April 1,2021</div>
                        <div class="center">
                            <h4>ราคาเหรียญ Dogecoin พุ่งกว่า 10%</h1>
                                <p>ราคาเหรียญมีมหมาที่โดนใช้งานบ่อยโดยนาย Elon Musk
                                    นั้นดูเหมือนว่าจะมีราคาพุ่งขึ้นอย่างรุนแรงกว่า 10%
                                    โดยเกิดขึ้นหลังจากที่เขานั้นออกมากล่าวว่า SpaceX จะพาเจ้าหมาตัวนี้ไปดวงจันทร์

                                    โดยอ้างอิงจากทวิตเตอร์ของนาย Elon Musk นั้น เขาออกมากล่าวว่า

                                    “SpaceX นั้นจะพา Dogecoin ไปยังดวงจันทร์จริง ๆ”</p>
                        </div>

                    </div>
                    <div class="footer">
                        <div class="ft-l">
                            <img src="img/Dom.jpg" alt="">
                            <p> Dom</p>

                        </div>
                        <div class="ft-r">
                            <a href="newDetail.php">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="main">
                    <div class="img">
                        <img src="img/Dogmeme.png" alt="">
                    </div>
                    <div class="content">
                        <div class="date"> April 1,2021</div>
                        <div class="center">
                            <h4>ราคาเหรียญ Dogecoin พุ่งกว่า 10%</h1>
                                <p>ราคาเหรียญมีมหมาที่โดนใช้งานบ่อยโดยนาย Elon Musk
                                    นั้นดูเหมือนว่าจะมีราคาพุ่งขึ้นอย่างรุนแรงกว่า 10%
                                    โดยเกิดขึ้นหลังจากที่เขานั้นออกมากล่าวว่า SpaceX จะพาเจ้าหมาตัวนี้ไปดวงจันทร์

                                    โดยอ้างอิงจากทวิตเตอร์ของนาย Elon Musk นั้น เขาออกมากล่าวว่า

                                    “SpaceX นั้นจะพา Dogecoin ไปยังดวงจันทร์จริง ๆ”</p>
                        </div>

                    </div>
                    <div class="footer">
                        <div class="ft-l">
                            <img src="img/Dom.jpg" alt="">
                            <p> Dom</p>

                        </div>
                        <div class="ft-r">
                            <a href="newDetail.php">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="main">
                    <div class="img">
                        <img src="img/Dogmeme.png" alt="">
                    </div>
                    <div class="content">
                        <div class="date"> April 1,2021</div>
                        <div class="center">
                            <h4>ราคาเหรียญ Dogecoin พุ่งกว่า 10%</h1>
                                <p>ราคาเหรียญมีมหมาที่โดนใช้งานบ่อยโดยนาย Elon Musk
                                    นั้นดูเหมือนว่าจะมีราคาพุ่งขึ้นอย่างรุนแรงกว่า 10%
                                    โดยเกิดขึ้นหลังจากที่เขานั้นออกมากล่าวว่า SpaceX จะพาเจ้าหมาตัวนี้ไปดวงจันทร์

                                    โดยอ้างอิงจากทวิตเตอร์ของนาย Elon Musk นั้น เขาออกมากล่าวว่า

                                    “SpaceX นั้นจะพา Dogecoin ไปยังดวงจันทร์จริง ๆ”</p>
                        </div>

                    </div>
                    <div class="footer">
                        <div class="ft-l">
                            <img src="img/Dom.jpg" alt="">
                            <p> Dom</p>

                        </div>
                        <div class="ft-r">
                            <a href="newDetail.php">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="main">
                    <div class="img">
                        <img src="img/Dogmeme.png" alt="">
                    </div>
                    <div class="content">
                        <div class="date"> April 1,2021</div>
                        <div class="center">
                            <h4>ราคาเหรียญ Dogecoin พุ่งกว่า 10%</h1>
                                <p>ราคาเหรียญมีมหมาที่โดนใช้งานบ่อยโดยนาย Elon Musk
                                    นั้นดูเหมือนว่าจะมีราคาพุ่งขึ้นอย่างรุนแรงกว่า 10%
                                    โดยเกิดขึ้นหลังจากที่เขานั้นออกมากล่าวว่า SpaceX จะพาเจ้าหมาตัวนี้ไปดวงจันทร์

                                    โดยอ้างอิงจากทวิตเตอร์ของนาย Elon Musk นั้น เขาออกมากล่าวว่า

                                    “SpaceX นั้นจะพา Dogecoin ไปยังดวงจันทร์จริง ๆ”</p>
                        </div>

                    </div>
                    <div class="footer">
                        <div class="ft-l">
                            <img src="img/Dom.jpg" alt="">
                            <p> Dom</p>

                        </div>
                        <div class="ft-r">
                            <a href="newDetail.php">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="main">
                    <div class="img">
                        <img src="img/Dogmeme.png" alt="">
                    </div>
                    <div class="content">
                        <div class="date"> April 1,2021</div>
                        <div class="center">
                            <h4>ราคาเหรียญ Dogecoin พุ่งกว่า 10%</h1>
                                <p>ราคาเหรียญมีมหมาที่โดนใช้งานบ่อยโดยนาย Elon Musk
                                    นั้นดูเหมือนว่าจะมีราคาพุ่งขึ้นอย่างรุนแรงกว่า 10%
                                    โดยเกิดขึ้นหลังจากที่เขานั้นออกมากล่าวว่า SpaceX จะพาเจ้าหมาตัวนี้ไปดวงจันทร์

                                    โดยอ้างอิงจากทวิตเตอร์ของนาย Elon Musk นั้น เขาออกมากล่าวว่า

                                    “SpaceX นั้นจะพา Dogecoin ไปยังดวงจันทร์จริง ๆ”</p>
                        </div>

                    </div>
                    <div class="footer">
                        <div class="ft-l">
                            <img src="img/Dom.jpg" alt="">
                            <p> Dom</p>

                        </div>
                        <div class="ft-r">
                            <a href="newDetail.php">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="main">
                    <div class="img">
                        <img src="img/Dogmeme.png" alt="">
                    </div>
                    <div class="content">
                        <div class="date"> April 1,2021</div>
                        <div class="center">
                            <h4>ราคาเหรียญ Dogecoin พุ่งกว่า 10%</h1>
                                <p>ราคาเหรียญมีมหมาที่โดนใช้งานบ่อยโดยนาย Elon Musk
                                    นั้นดูเหมือนว่าจะมีราคาพุ่งขึ้นอย่างรุนแรงกว่า 10%
                                    โดยเกิดขึ้นหลังจากที่เขานั้นออกมากล่าวว่า SpaceX จะพาเจ้าหมาตัวนี้ไปดวงจันทร์

                                    โดยอ้างอิงจากทวิตเตอร์ของนาย Elon Musk นั้น เขาออกมากล่าวว่า

                                    “SpaceX นั้นจะพา Dogecoin ไปยังดวงจันทร์จริง ๆ”</p>
                        </div>

                    </div>
                    <div class="footer">
                        <div class="ft-l">
                            <img src="img/Dom.jpg" alt="">
                            <p> Dom</p>

                        </div>
                        <div class="ft-r">
                            <a href="newDetail.php">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="main">
                    <div class="img">
                        <img src="img/Dogmeme.png" alt="">
                    </div>
                    <div class="content">
                        <div class="date"> April 1,2021</div>
                        <div class="center">
                            <h4>ราคาเหรียญ Dogecoin พุ่งกว่า 10%</h1>
                                <p>ราคาเหรียญมีมหมาที่โดนใช้งานบ่อยโดยนาย Elon Musk
                                    นั้นดูเหมือนว่าจะมีราคาพุ่งขึ้นอย่างรุนแรงกว่า 10%
                                    โดยเกิดขึ้นหลังจากที่เขานั้นออกมากล่าวว่า SpaceX จะพาเจ้าหมาตัวนี้ไปดวงจันทร์

                                    โดยอ้างอิงจากทวิตเตอร์ของนาย Elon Musk นั้น เขาออกมากล่าวว่า

                                    “SpaceX นั้นจะพา Dogecoin ไปยังดวงจันทร์จริง ๆ”</p>
                        </div>

                    </div>
                    <div class="footer">
                        <div class="ft-l">
                            <img src="img/Dom.jpg" alt="">
                            <p> Dom</p>

                        </div>
                        <div class="ft-r">
                            <a href="newDetail.php">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
        </div>

    </div>
    

  <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-606d5abe0a0a6b67"></script>

</body>

</html>