<?php
include($_SERVER['DOCUMENT_ROOT'].'/smws/public/meta.php') ;
include($_SERVER['DOCUMENT_ROOT'].'/smws/protected/header.php');

if (isset($_POST['aptName']) && isset($_POST['aCity']) && isset($_POST['submit'])) {
  $name= $_POST['aptName'];
  $city = $_POST['aCity'];
  $state = $_POST['aState'];
  $country = $_POST['aCountry'];
  $result=$apt1->addApt($name,$city,$state,$country,);

  // $query = "INSERT INTO user ( `firstName`,`lastName`,`email`,`uPassword`) VALUES ('$user','$lastName','$email','$password');";
  // $result = $conn->query($query);
  // if ($result) {
  //   $msg = "Registered Sussecfully";
  //   echo $msg;
  // } else {
  //   $msg = "Error Registering";
  //   echo $msg;
  // }

}
?>
<style>
      

</style>

<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="POST">
    <h1>Add new user</h1>
    <div class="content">
      <!-- <div class="input-field">
          <input type="uId" placeholder="uId" name="uId">
        </div> -->
      <div class="input-field">
        <input type="aptName" placeholder="aptName" name="aptName">
      </div>
      <div class="input-field">
        <input type="aCity" placeholder="aCity" name="aCity">
      </div>
      <div class="input-field">
        <input type="aState " placeholder="aState" name="aState">
      </div>
      <div class="input-field">
        <input type="aCountry" placeholder="aCountry" name="aCountry">
      </div>

    </div>
    <div class="action">
      <button type="submit" name="submit">Add</button>
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