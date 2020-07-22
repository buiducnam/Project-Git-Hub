<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		div{
			padding: 20px;
		}
		.header, .footer{
			background-color: red;
		}
	</style>	
</head>
<body>
	<!-- <div class="header"></div> -->
	<div class="content">
		<?php require_once "./mvc/views/pages/".$data["Page"].".php" ?>
	</div>
	<!-- <div class="footer"></div> -->
</body>
</html>