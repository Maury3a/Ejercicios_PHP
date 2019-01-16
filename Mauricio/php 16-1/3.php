<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$par=0;
	$impar=0;
	$acumulador=array();
	for ($i=1;$i<=15;$i++){
		
		$acumulador[$i]=mt_rand(0,15); //un acumulador de contadores;
		if($acumulador[$i]%2==0){
				echo $acumulador[$i]."<br>";
			}else if($acumulador[$i]%2!=0){
			echo "<br>".$acumulador[$i];
			
		}
	}
	?>
<body>
</body>
</html>