<?php
class Auth
{
  public $isloggedIn = false;
  function login($userName, $userPassword)
  {
   session_start();
    global $conn;
   echo $userName, $userPassword;
    $sql = "select * from user where email = '$userName' and  uPassword = '$userPassword' ";
    $result = $conn->query($sql);
    
    // print_r($result);exit;

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);
      $_SESSION['email'] = $userName;
      $_SESSION['uPassword'] = $userPassword;
      if ($row['r_Id'] == '101') {
          header("Location: ./user/userdash.php");
      } elseif ($row['r_Id'] == '102') {
          header("Location: ./Dash/chairmandash.php");
      } elseif ($row['r_Id'] == '103') {
          header("Location: Dashboard.php");
      } else {
          echo "Incorrect Input";
      }
  //   if ($result) {
  //     $rowCount = mysqli_num_rows($result);

  //     if ($rowCount == 1) {
  //       return true;

  //     } else {
  //       return false;
  //     }
  //   } else {
  //     return false;
  //   }
  // }
}
}


}
?>
