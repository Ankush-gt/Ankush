<?php
class Auth {
   public $isloggedIn = false;
   function login($userName,$userPassword)
   {

   global $conn;

   

       $sql =  "select * from user where email = '$userName' and  uPassword = '$userPassword' ";
       $result = $conn->query($sql);
      // print_r($result);exit;

        if ($result){
          $rowCount = mysqli_num_rows($result);

          if($rowCount==1){ 
            return true;

          } else {
            return false;
          }
         } else {
            return false;
         }
      }
    }
   

?> 
<!-- <?php

// if (isset($_POST['userName']) && isset($_POST['userPassword'])) {

//    function login($userName, $userPassword){

// }

// $userName = validate($_POST['userName']);

// $userPassword = validate($_POST['userPassword']);

// if (empty($userName)) {

//     header("Location: index.php?error=User Name is required");

//     exit();

// }else if(empty($pass)){

//     header("Location: index.php?error=Password is required");

//     exit();

// }else{

//     $sql = "SELECT * FROM users WHERE email ='$userName' AND uPassword='$userPassword'";

//     $result = mysqli_query($conn, $sql);

//     if (mysqli_num_rows($result) === 1) {

//         $row = mysqli_fetch_assoc($result);

//     }
//    }
// }

// if ($row['$userName'] === $userPassword && $row['$userPassword'] === $userPassword) {
   //  echo "Logged in!";
   //  $_SESSION['userName'] = $row['userName'];
   //  $_SESSION['userPassword'] = $row['userPassword'];
   // header("Location: home.php");
   // exit();
   // } else if{
   
   //   header("Location: index.php?error=Incorect User name or password");
   
   //   exit();
   
   //  } else if {
   //  header("Location: index.php?error=Incorect User name or password");
   
   // exit();
   
   // } else {
   
   // header("Location: index.php");
   
   // exit();
   //  }
   


   // if(!empty($userName) || !empty($userPassword)) {
   //    return true;
  // }
?> -->