<?php
include_once('connectdb.php');
session_start();

    $regisuser = $_POST['user'];
    $regispwd1 = $_POST['pwd1'];
	

    $checkuserSQL =  "select user from member where user like '$regisuser'";
    $resualt = $conn->query($checkuserSQL);
    $row = 0;
    while($data = $resualt->fetch_array()){
        $row++;
    }
    echo "<br>".$row;
    if($row == 1){
        $_SESSION['uae'] = 'uae';
       
         header('location: /CSC350/projectweb/register.php');
    }
    else{
         $savemember ="insert into member values
        (0,'$regisuser','$regispwd1','1')";
         $insert_register = $conn->query($savemember);
        $_SESSION['regis_completed'] ='register_completed';
        header('location: /CSC350/projectweb/index.php');

        
    }




	// if($_POST["pwd1"] != $_POST["pwd2"])
	// {
		
    //     echo "<script type='text/javascript'>alert('Password not Match!');</script>";
	// 	header('location: /CSC350/projectweb/register.php');
	// }
    ?>
