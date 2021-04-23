<?php

include_once('connectdb.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    $login_user = $_POST['user1'];
    $login_pwd  = $_POST['pwd1'];
    if (isset($login_user) && isset($login_user)) {

        $result = $conn->query("select * from member
WHERE user = '$login_user' AND password = '$login_pwd'");
    }
    $row = mysqli_num_rows($result);
    echo '<br>' . $row;
    $_SESSION['login'] = $login_user;
    if ($row == 1) {
       
        header('location: /CSC350/projectweb/index.php');
    
    }
    else{
        session_start();
        $_SESSION['notpass'] = 'notpass';
        header('location: /CSC350/projectweb/login_Bootstrap.php');
        
    }
}
