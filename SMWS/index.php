<?php
include('./public/meta.php');
include('./public/header.php');
$outPut = "";
if (isset($_POST['submit'])) {
  $userName = $_POST['email'];
  $userPassword = $_POST['uPassword'];
  session_start();

  $outPut =$auth->login($userName, $userPassword);

  if ($outPut) {
    echo "Done";
    // $_SESSION['email'] = $userName;
    // $_SESSION['uPassword'] = $userPassword;
    // print_r($_SESSION);
    header("Location: Dashboard.php");
    echo "<br>";
  } else {
    $outPut = "incorrect information";
  }
}

?>

<head>
  <title>multi-user role-based-login-system</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
  <form class="border shadow p-3 rounded" action="index.php" method="post" style="width: 450px;">
    <h1 class="text-center p-3">LOGIN</h1>
    <div class="mb-3">
      <label for="username" class="form-label">email</label>
      <input type="text" class="form-control" name="email" id="email">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">uPassword</label>
      <input type="password" name="uPassword" class="form-control" id="uPassword">
    </div>
    <div class="mb-1">
      <label class="form-label">Select User Type:</label>
    </div>
    <select class="form-select mb-3" name="role" aria-label="Default select example">
      <option selected value="user">User</option>
      <!-- <option value="admin">Admin</option>
      <option value="chairman">chairman</option>
      <option value="member">member</option> -->

    </select>

    <div class="action">
      <input type="submit" name="submit" value="Login"></button>
       <!-- <?php echo $outPut ? ($outPut) : (""); ?> -->
    </div>
  </form>
</div>
</body>

</html>

<!-- ********************************************************************************************** -->
<!-- <div class="login-form">
  <form method="post" action="index.php">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="email" autocomplete="nope" name="email">
      </div>
      <div class="input-field">
        <input type="password" placeholder="uPassword" autocomplete="new-password" name="uPassword">
      </div> -->
<!-- <select class="form-select mb-3"
            aria-label="Default select example">
       <option selected>user</option>
        <option value="1">one</option>
</select> -->

<!-- <div class="input-field">
        <input type="usertype" placeholder="usertype" autocomplete="nope" name="usertype">
      </div> -->
<!-- <a href="./forgotpass.php" class="text-body">Forgot password?</a>
      <div class="input-field">
      </div>
    </div>
    <div class="action">
      <input type="submit" name="submit" value="Login"></button>-->


<!-- <button>Register</a></button>  -->

<!-- </div>
  </form>
</div> -->