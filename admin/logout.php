<?php 
if($_SESSION['admin'] == "" || $_SESSION['username'] == ""|| $_SESSION['password'] == ""){
	header("location:index.php");
}
?>
