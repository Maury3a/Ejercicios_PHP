<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	//bucle for
	$num=0;	
	$i=1;
		for ($i=0;$i<=20;$i++){
			$num=$i+$num;
			
		}echo $num;
	
	echo "<hr>";
	//bucle while
	
	$num1=0;
	$j=1;
	while ($j<=20){
		$num1=$j+$num1;
		$j++;
	}echo $num1;
	echo "<hr>";
	
	//bucle do while
	
	$num2=0;
	$m=1;
	do{
		$num2=$m+$num2;
		$m++;
		
	}while($m<=20);
	echo $num2;
	?>
<body>
</body>
</html>