<?php
include('./public/meta.php');
include('./protected/header.php');
include('./user.php');

$user = new user();
$user_list_arr = $user->list();

// echo "<pre>";
// print_r($user_list_arr);

foreach ($user_list_arr as $key => $value) {
    echo $value['uId'] . ". Welcome " . $value['firstName'] . " " . $value['lastName'];
    echo "<br>";
                                    
                                   
}
?>