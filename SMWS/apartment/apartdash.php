<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
include($_SERVER['DOCUMENT_ROOT'] . '/smws/public/meta.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- //boxicons -->

    <!-- Montserrat Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../user/Dash.css">
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
                    <a href="../Dashboard.php" target="_blank">
                        <span class="material-icons-outlined">dashboard</span> Dashboard
                    </a>
                </li>

        </aside>
        <main class="main-container">
            <div class="main-title">
                <h2>DASHBOARD</h2>
            </div>

            <div class="main-cards">

                <div class="card">
                    <li>
                        <box-icon type='solid' name='message-dots'></box-icon>
                        <span class="text">
                            <h3><a href="add.php">Add Appartment</a></h3>

                        </span>
                    </li>
                </div>

                <div class="card">
                    <li>
                        <box-icon type='solid' name='message-dots'></box-icon>
                        <span class="text">
                            <h3><a href="edit.php">Edit Apartment</a></h3>

                        </span>
                    </li>
                </div>

                <div class="card">
                    <div class="card-inner">
                        <h3>Apart</h3>
                        <span class="material-icons-outlined"><a href="list.php"
                                class="text-body">groups<a><span><br><br>
                    </div>
                    <h3>UserInfo</h3>
                </div>
            </div>

            <div class="charts">
            </div>
        </main>
        End Main

    </div>

    Scripts
    ApexCharts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    Custom JS
    <script src="js/scripts.js"></script>
</body>

</html>