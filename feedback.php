<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Обратная связь</title>
	<link rel="stylesheet" type="text/css" href="styles/feedback.css">
	<script src="/scripts/valid.js"></script>
</head>
<body>
<?php
	if(empty($_POST['fio']) && empty($_POST['address']) && empty($_POST['number']) && empty($_POST['email'])){
		require_once("forms/InputForm.php");
	}else{
		require_once("forms/Show.php") ;
	}
?>
</body>
</html>