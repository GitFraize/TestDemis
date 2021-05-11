<?php
	include("include/db_info.php");
	$connection=mysqli_connect($host,$userName,$password,$dbName);
	$connection->set_charset('utf8mb4');
	$query="Select * FROM $tableName";
	$res = mysqli_query($connection,$query);
	require_once("include/header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/news.css">
</head>
<body>
	<div class="container">
		<div class="news-container">
<?php 
	$news = array();
	for($i=0; $i<3;$i++){
		$row=mysqli_fetch_assoc($res);
		$news[$i]=$row;
		$content=substr($row['content'],0,600);
		$content=substr($content, 0, strrpos($content, ' ' ))." ";
		echo "<div class=\"news-item\"><h1>".$row['title']."</h1><p class=\"newsitem-info\">Дата размещения: ".date('d/m/Y',strtotime($row['pubDate']))."&#160&#160&#160 Автор: ".$row['author']."</p>".$content."<a href=\"news.php\">Перейти к новости...</a></div>";
	}
?>	
		</div>
	</div>
</body>
</html>