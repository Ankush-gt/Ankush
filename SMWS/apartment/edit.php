<?php
include($_SERVER['DOCUMENT_ROOT'].'/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/protected/header.php');

if (isset($_POST['submit'])) {
    
    $Id = $_POST['aptId'];
    $Name = $_POST['aptName'];
    $Address = $_POST['Address'];
    // $userPassword = $_POST['password'];
    $City = $_POST['aCity'];
    // $aState = $_POST['state'];
    // $aCountry = $_POST['country'];

    $apt1->Aptupdate($Id, $Name, $Address, $City,);
    
}
?>
<div class="login-form" >
    <form action="" method="POST">
      <h1>Update User</h1>
      <div class="content">
        <div class="input-field">
          <input type="aptId" placeholder="aptId" name="aptId">
        </div>
        <div class="input-field">
          <input type="aptName" placeholder="aptName" name="aptName">
        </div>
        <div class="input-field">
          <input type="Address" placeholder="Address" name="Address">
        </div>
        <div class="input-field">
          <input type="aCity " placeholder="aCity" name="aCity">
        </div>

      </div>
      
      <div class="action">
      <button type="submit" name="submit">Signup</button>
        
      </div>
    </form>
  </div>