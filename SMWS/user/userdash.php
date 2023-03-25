<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>User Dashboard</title>

    <link rel="stylesheet" type="text/css" href="admin.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    .header {

        background-color: skyblue;
        line-height: 70px;
        padding-left: 30px;
    }

    a,
    a:hover {
        text-decoration: none !important;
    }

    .logout {
        float: right;
        padding-right: 30px;
    }

    ul {
        background-color: #424a5b;
        width: 16%;
        height: 100%;
        position: fixed;
        padding-top: 5%;
        text-align: center;
    }

    ul li {
        list-style: none;
        padding-bottom: 30px;
        font-size: 15px;
    }

    ul li a {
        color: white;
        font-weight: bold;
    }

    ul li a:hover {
        color: skyblue;
        text-decoration: none;
    }

    .content {
        margin-left: 20%;
        margin-top: 5%;
    }
</style>

<body>
    <?php
$info = $userInfo->getinfo();
?>

    <header class="header">

        <a href="">User Dashboard</a>
        

        <div class="logout">
        <h1>Hello,
           <?php echo $info['firstName']; ?>  
        </h1>
            <a href="../index.php" class="btn btn-primary">Logout</a>

        </div>

    </header>


    <aside>

        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="../notes/list.php">view notes</a>
            </li>

            <li>
                <a href="../notes/add.php">Addnotes</a>
            </li>

            <li>
                <a href="../notes/edit.php">Update  notes</a>
            </li>

            <li>
                <a href="">Update user</a>
            </li>
            <li>
                <a href="">Add Courses</a>
            </li>
            <li>
                <a href="">View Courses</a>
            </li>


        </ul>


    </aside>

    <!-- 
    <div class="content">
        
        <h1>Sidebar Accordion</h1>

        <p>In this example, we have added an accordion and a dropdown menu inside the side navigation.

        Click on both to understand how they differ from each other. The accordion will push down the content, while the dropdown lays over the content.</p>

        <input type="text" name="">


    </div> -->

</body>

</html>