<?php
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');

if (isset($_POST['submit'])) {

  $Id = $_POST['aptId'];
  $Name = $_POST['aptName'];
  $Address = $_POST['Address'];
  $City = $_POST['aCity'];
  $apt1->Aptupdate($Id, $Name, $Address, $City, );

}
?>
<div class="login-form">
  <form action="" method="POST">
    <h1>Update Apartment</h1>
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
      <button type="submit" name="submit">Save changes</button>

    </div>
  </form>
</div>