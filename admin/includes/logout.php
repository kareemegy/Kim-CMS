<?php session_start();?>
<?php
$_SESSION['user_name'] = null;
$_SESSION['first_name'] = null;
$_SESSION['first_last'] = null;
$_SESSION['user_role'] = null;

header("Location:/cms/index.php");
