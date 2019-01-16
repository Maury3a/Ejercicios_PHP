<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 	
	$i=1;
		for ($i=1;$i<=100;$i++){
			if($i%3==0){
				echo $i."-";
			}
		}
	echo "<hr>";
	
	//bucle while	
	$j=1;
	while($j<=100){
		if($j%3==0){
			echo $j."-";
		}$j++;
	}echo "<hr>";
	//bucle do while
	$m=1;
	do{
		if($m%3==0){
			echo $m."-";
		}$m++;
	}while($m<=100);
	?>
<body>
</body>
</html>