<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:../../index.php");
}


?>

<?php 
$title = 'Home';
$page = 'home';
include('../../Core/Includes/header.php'); 
?>

<h1>THIS IS USER HOME PAGE</h1><?php echo $_SESSION["username"] ?>

<a href="../../../Assets/logout.php">Logout</a>

<?php include('../../Core/Includes/footer.php'); ?>


