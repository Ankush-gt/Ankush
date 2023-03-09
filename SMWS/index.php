<?php
include('./public/meta.php');
include('./public/header.php');
$outPut = "";
if(isset($_POST['submit'])) {
  $userName = $_POST['email'];
  $userPassword = $_POST['uPassword'];
  $outPut=$auth->login($userName,$userPassword);
  //  if(!empty($userName) || !empty($userPassword)) {
  //   $outPut= "missing input";
  //  } else {
  //    $input=$auth->login($userName,$userPassword);
  //    $displayError = $auth->login($userName, $userPassword);
  // } 
  // print_r($outPut);
  if($outPut) {
    header("Location: Dashboard.php");
  } else {
    $outPut = "incorrect information";
  }
}
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
      <input type="submit"  name="submit" value="Login"></button>
      <?php echo $outPut ? ($outPut) : ("");?>

        <!-- <button>Register</a></button>  -->
        
      </div>
    </form>
  </div>

