<?php 
$stage = (int)$_GET['stage'];
$base = new mysqli("localhost", "root", "","project");
$result = $base->query('SELECT * FROM `Posts` ORDER BY ID  DESC LIMIT '.$stage.', 10');
$posts = [];
while ($post = mysqli_fetch_assoc($result)) {
	$posts[] = $post;
}	
$base->close();
echo json_encode($posts, JSON_UNESCAPED_UNICODE);
