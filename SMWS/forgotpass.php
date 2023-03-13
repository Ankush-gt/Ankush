<?php
include('./public/meta.php');
include('./public/header.php');
?>
<div class="login-form">
    <form>
      <h1>Forgotpass</h1>
      <div class="content">
        <div class="input-field">
          <input type="email" placeholder="Email" autocomplete="nope">
        </div>
        <div class="input-field">
          <input type="password" placeholder="Password" autocomplete="new-password">
        </div>
        <div class="input-field">
          <input type="confirm " placeholder="confirm password" autocomplete="nope">
        </div>

      </div>
      <div class="action">
        <button type="button"><a href="./index.php" class="text-body">Reset</a></button>
      </div>
    </form>
  </div>
  <!-- partial -->
  <script src="./script.js"></script>

  <script>
    let form = document.querySelecter('form');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      return false;
    });
  </script>
</body>

</html>