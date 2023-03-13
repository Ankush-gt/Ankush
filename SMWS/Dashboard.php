<?php
session_start();
include("./include/config.php");
include("./include/constant.php");
include("./include/database.php");
include("user.php");
$info = $userInfo->login();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- Montserrat Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./user/Dash.css">
</head>

<body>
  <div class="grid-container">

    <!-- Header -->
    <header class="header">
      <div class="menu-icon" onclick="openSidebar()">
        <span class="material-icons-outlined">menu</span>
      </div>
      <div class="header-left">
        <span class="material-icons-outlined">search</span>
      </div>
      <div class="header-right">
      <h1>Hello, <?php echo $info['firstName'] ; ?></h1>
      <!-- <h1>Hello, <?php echo  $_SESSION['firstName']."Hello".  $_SESSION['email'] ."welcome"; ?></h1> -->

      

        <span class="material-icons-outlined">notifications</span>
        <span class="material-icons-outlined">email</span>
        <span class="material-icons-outlined">account_circle</span>
      </div>
    </header>
    <!-- End Header -->

    <!-- Sidebar -->
    <aside id="sidebar">
      <div class="sidebar-title">
        <div class="sidebar-brand">
        <span><i class="bi bi-box-arrow-right"></i></span> <a href="logout.php">LOGOUT</a>
        </div>
        <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
      </div>

      <ul class="sidebar-list">
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">dashboard</span> Dashboard
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">inventory_2</span> Products
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">category</span> Categories
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">groups</span> Customers
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">fact_check</span> Inventory
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">poll</span> Reports
          </a>
        </li>
        <li class="sidebar-list-item">
          <a href="#" target="_blank">
            <span class="material-icons-outlined">settings</span> Settings
          </a>
        </li>
      </ul>
    </aside>
    <!-- End Sidebar -->

    <!-- Main -->
    <main class="main-container">
      <div class="main-title">
        <h2>DASHBOARD</h2>
      </div>
<!-- 
      <div class="main-cards">

        <div class="card">
          <div class="card-inner">
            <h3>BUILDNAME</h3>
            <span class="material-icons-outlined">inventory_2</span>
          </div>
          <h1>10</h1>
        </div>

        <div class="card">
          <div class="card-inner">
            <h3>CHAIRMAN</h3>
            <span class="material-icons-outlined">category</span>
          </div>
          <h1>10</h1>
        </div> -->

        <div class="card">
          <div class="card-inner">
            <!-- <h3>MEMBERS</h3> -->
            <span class="material-icons-outlined">groups</span>
            <button> <a href="Userlist.php" class="text-body">MEMBERS</a></button>

          </div>
          <h1>30</h1>
        </div>
<!-- 
        <div class="card">
          <div class="card-inner">
            <h3>ABOUT</h3>
            <span class="material-icons-outlined">notification_important</span>
          </div>
          <h1>56</h1>
        </div>

      </div>

      <div class="charts">

        <div class="charts-card">
          <h2 class="chart-title">Top 5 Products</h2>
          <div id="bar-chart"></div>
        </div>

        <div class="charts-card">
          <h2 class="chart-title">Purchase and Sales Orders</h2>
          <div id="area-chart"></div>
        </div>

      </div>
    </main>  -->
    <!-- End Main -->

  </div>

  <!-- Scripts -->
  <!-- ApexCharts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
  <!-- Custom JS -->
  <script src="js/scripts.js"></script>
</body>

</html>