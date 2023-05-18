<!DOCTYPE html>
<html>
<head>

<script src="js/main.js"></script>
	<title></title>
</head>
<body>
	<h1>Записная книжка</h1>
	<form method="get">
		<input type="text" name="post">	
		<input type="submit" name="formSubmit" value="Отправить">
	</form>
	<div id="global" class="global">
		<?php include 'php/Form.php'; ?>
		<?php include 'php/Content.php'; ?>
	</div>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
</body>
</html>