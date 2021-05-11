<?php
	if(empty($_GET['id']))
		header("Location: news.php");
	include("include/db_info.php");
	$connection=mysqli_connect($host,$userName,$password,$dbName);
	$connection->set_charset('utf8mb4');
	$query="Select * FROM $tableName WHERE id=".$_GET['id'];
	$res = mysqli_query($connection,$query);
	require_once("include/header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Новости</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/news.css">
</head>
<body>
	<div class="container">
		<div class="news-container">
		<?php
			$row=mysqli_fetch_assoc($res);
			echo "<div class=\"news-item\"><h1>".$row['title']."</h1><p class=\"newsitem-info\">Дата размещения: ".date('d/m/Y',strtotime($row['pubDate']))."&#160&#160&#160 Автор: ".$row['author']."</p>".$row['content']."</div>";
		?>
		</div>
	</div>
</body>
</html>