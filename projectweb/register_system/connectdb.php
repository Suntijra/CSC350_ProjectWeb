<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "register_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


// else{
//   echo '<br>Data base not have this username and password';
// }

//  while($data = $result->fetch_array()){
//   echo $data['user'].'<br>';
//    if(($data['user'] == $login_user) and ($data['password'])){
//      echo'your connect <br>';
//        header("location :location: \CSC350\projectweb\index.html");
//      break;
//    }
//    else{echo 'no one <br>.';}
//  }

// if(!empty($login_user) and !empty($login_pwd)){
//     echo "register finished <br> User : $login_user<br>";
// }
// else{echo 'erore';}

// $sql ="insert into member values
//         (0,'$login_user','$login_pwd','1')";
//         $insert_register = $conn->query($sql);
      
        // if($insert_register){
        //     echo'insert finished';
        // }
        // else{
        //     echo'';
        //
