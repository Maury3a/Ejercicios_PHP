<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$mascota[0] = ["Nombre"=>"Lazy","Peso"=>"20kg","Color"=>"Negro","Edad"=>"5 años","Raza"=>"Labrador"];
	$mascota[1] = ["Nombre"=>"Rodrigo","Peso"=>"18kg","Color"=>"Blanco","Edad"=>"4 años","Raza"=>"Bull Dog"];
	$mascota[2] = ["Nombre"=>"Perete","Peso"=>"19kg","Color"=>"Marrón", "Edad"=>"3 años","Raza"=>"Terrier"];
	echo $mascota[0]["Nombre"];
	echo $mascota[0]["Peso"];
	echo $mascota[0]["Color"];
	echo $mascota[0]["Edad"];
	echo $mascota[0]["Raza"];
	echo "<br>";
	echo $mascota[1]["Nombre"];
	echo $mascota[1]["Peso"];
	echo $mascota[1]["Color"];
	echo $mascota[1]["Edad"];
	echo $mascota[1]["Raza"];
	echo "<br>";
	echo $mascota[2]["Nombre"];
	echo $mascota[2]["Peso"];
	echo $mascota[2]["Color"];
	echo $mascota[2]["Edad"];
	echo $mascota[2]["Raza"];
	
	?>
<body>
</body>
</html>