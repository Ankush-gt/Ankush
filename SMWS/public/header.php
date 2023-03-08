<?php
  include("./include/config.php");
  include("./include/constant.php");
  include("./include/database.php");
?>

 <div id="navbar" class="collapse navbar-collapse">
    <a class="active" href="javascript:void(0)">Home</a>
    <a href="About Us.txt">About Us</a>
    <a href="javascript:void(0)">Contact Us</a>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

  <div class="content " style="text-align:center">
    <h3>Society Web Management System</h3>
    <p>Wel-come to <strong>SWMS</strong></p>

  </div>
  <script>
    window.onscroll = function () { myFunction() };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>