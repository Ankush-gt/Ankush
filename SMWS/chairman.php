<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/smws/protected/header.php');
// $info = $userInfo->getinfo();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="chairman.css">
</head>

<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">SIDE <b>BAR</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="user.jpg">
				<h4>Dash</h4>
			</div>
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="../notes/list.php">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span>Notes</span>
					</a>
				</li>
				<li>
					<a href="../notes/edit.php">
						<i class="fa fa-comment-o" aria-hidden="true"></i>
						<span>Updatenotes</span>
					</a>
				</li>
				<li>
					<a href="../notes/add.php">
						<i class="fa fa-info-circle" aria-hidden="true"></i>
						<span>Add new notes</span>
					</a>
				</li>

				<li>
					<a href="../user/Addnew.php">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span>Add user</span>
					</a>
				</li>
				<li>
					<a href="../user/Userlist.php">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span>userlist</span>
					</a>
				</li>
				<li>
					<a href="../user/updateuser.php">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span>userupdate</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Setting</span>
					</a>
				</li>
				<li>
					<a href="../index.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<h1>WELCOME
				<!-- <?php echo $info['firstName']; ?> -->
			</h1>
		</section>
	</div>

</body>

</html>