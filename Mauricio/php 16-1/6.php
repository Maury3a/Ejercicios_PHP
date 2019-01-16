<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$meses=array("enero"=>31,"febrero"=>28,"marzo"=>31,"abril"=>30,"mayo"=>31,"junio"=>30,"julio"=>31,"agosto"=>31,"septiembre"=>30,"octubre"=>31,"noviembre"=>30,"diciembre"=>31);
	foreach ($meses as $mes =>$dias){
		echo "<ul><li>El mes de ".$mes." tiene ".$dias." días </li></ul>";
	}
	?>
<body>
</body>
</html>