<?php
include('./public/meta.php');
include('./public/header.php');
$outPut = "";
if(isset($_POST['submit'])) {
  $userName = $_POST['email'];
  $userPassword = $_POST['uPassword'];
  session_start();
  $outPut=$auth->login($userName,$userPassword);

  
  if($outPut) {
    echo "Done";
     $_SESSION['email'] = $userName;
     $_SESSION['uPassword'] = $userPassword;
    


    header("Location: Dashboard.php");


      echo "<br>";

     exit();
  }

  } else {
    $outPut = "incorrect information";
  }

// if (isset($_POST['submit'])) {
//   $email = $_POST['email'];
//   $password = $_POST['uPassword'];

//   $sql = "select * from user where email = '$email' and  uPassword = '$password' ";
//   $query = $conn->query($sql);

//   $email_count = mysqli_num_rows($query);

//   if ($email_count) {
//     $email_pass = mysqli_fetch_assoc($query);

//     $db_pass = $email_pass['password'];

//     $pass_decode = password_verify($uPassword, $db_pass);

//     if ($pass_decode) {
//       echo " login succesfully";
//     } else {
//       echo " incorrect";
//     }
//   } else {
//     echo " invalid";
//   }

// }



?>
<div class="login-form">
  <form method="post" action="index.php">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="email" autocomplete="nope" name="email">
      </div>
      <div class="input-field">
        <input type="password" placeholder="uPassword" autocomplete="new-password" name="uPassword">
      </div>
      <a href="./forgotpass.php" class="text-body">Forgot password?</a>
      <div class="input-field">
      </div>
    </div>
    <div class="action">
      <input type="submit" name="submit" value="Login"></button>
      <?php echo $outPut ? ($outPut) : (""); ?>

      <!-- <button>Register</a></button>  -->

    </div>
  </form>
</div>