<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ParketSw</title>
	<link rel="stylesheet" href="src/Views/file/css/bootstrap4/css/bootstrap.min.css">
  <script src="src/Views/file/css/bootstrap4/js/jquery.min.js"></script>
  <script src="src/Views/file/css/bootstrap4/js/popper.min.js"></script>
  <script src="src/Views/file/css/bootstrap4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<?php 
	include "apps/_menu.php";
	?>
<section>
	<?php
	$mvc = new Controller();
	$mvc	->	enlacesPaginasController();

	?>
</section>
</div>
</body>
</html>