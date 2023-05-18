<?php
if (isset($_GET['formSubmit'])) {
	$postform = $_GET['post'];
	$base = new mysqli("localhost", "root", "","project");
	$base->query("SET NAMES 'UTF8'"); 
	$post = '"'.$base->real_escape_string($postform).'"';
	$query = "INSERT INTO `Posts` (post) VALUES ($post)";
	$base->query($query);
	$base->close();
	header('Location: '.$_SERVER['PHP_SELF']);
	exit;
}
