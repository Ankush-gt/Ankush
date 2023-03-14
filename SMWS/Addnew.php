<?php
// include('./public/meta.php');
// include('./public/header.php');
// include("./include/database.php");
include('./protected/header.php');

if (isset($_POST['firstName']) && isset($_POST['lastname']) && isset($_POST['submit'])) {
  $user = $_POST['firstName'];
  $lastName = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['uPassword'];

  $query = "INSERT INTO user ( `firstName`,`lastName`,`email`,`uPassword`) VALUES ('$user','$lastName','$email','$password');";
  $result = $conn->query($query);
  if ($result) {
    $msg = "Registered Sussecfully";
    echo $msg;
  } else {
    $msg = "Error Registering";
    echo $msg;
  }

}
?>

<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="POST">
    <h1>Add new user</h1>
    <div class="content">
      <!-- <div class="input-field">
          <input type="uId" placeholder="uId" name="uId">
        </div> -->
      <div class="input-field">
        <input type="firstname" placeholder="firstname" name="firstName">
      </div>
      <div class="input-field">
        <input type="lastname" placeholder="lastname" name="lastname">
      </div>
      <div class="input-field">
        <input type="email " placeholder="email" name="email">
      </div>
      <div class="input-field">
        <input type="uPassword" placeholder="uPassword" name="uPassword">
      </div>

    </div>
    <div class="action">
      <button type="submit" name="submit">Signup</button>
    </div>
  </form>
</div>
<!-- partial -->
<script src="./script.js"></script>

<!-- <script>
    let form = document.querySelecter('form');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      return false;
    });
  </script> -->
</body>

</html>