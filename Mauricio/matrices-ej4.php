<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$matnum[0] = [mt_rand(0,20),"Hola",28,"Años",true,null];
	echo $matnum[0][0];
	echo var_dump( $matnum[0][0]);echo "<br>";
	echo $matnum[0][1];
	echo var_dump( $matnum[0][1]);echo "<br>";
	echo $matnum[0][2];
	echo var_dump( $matnum[0][2]);echo "<br>";
	echo $matnum[0][3];
	echo var_dump( $matnum[0][3]);echo "<br>";
	echo $matnum[0][4];
	echo var_dump( $matnum[0][4]);echo "<br>";
	echo $matnum[0][5];
	echo var_dump( $matnum[0][5]);echo "<br>";
	?>
<body>
</body>
</html>