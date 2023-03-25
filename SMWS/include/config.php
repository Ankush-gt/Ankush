<?php

include($_SERVER['DOCUMENT_ROOT'].'/smws/liabrary/helper.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/liabrary/auth.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/liabrary/user.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/liabrary/apart.php');
include($_SERVER['DOCUMENT_ROOT'].'/smws/liabrary/notes.php');




$userInfo = new user();

$auth= new Auth();

$apt1 = new apartment();

$note1= new note();


// $apt2 = new apartment();
// $apartment = new apart();

?>