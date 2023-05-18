<?php 
$base = new mysqli("localhost", "root", "","project");
$result = $base->query("SELECT * FROM `Posts` ORDER BY ID DESC LIMIT 10");
while ($post = mysqli_fetch_assoc($result)) {
	echo "<div class=\"light\"><div class=\"deep\">".$post['ID'].".".$post['Post']."</div></div><br>";
}	
$base->close();

