<?php 
session_start();
include('database.php');
include('function.php');
$user_data=check_login($conn);

?>