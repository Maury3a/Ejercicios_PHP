<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php 
	$alumno["Rodrigo"] = ["Matematicas"=>8,"Lengua"=>6,"Filosofia"=>18,"Diseño"=>3,];
	$alumno[1] = ["Matematicas"=>8,"Lengua"=>6,"Filosofia"=>18,"Diseño"=>3,"PHP"=>10,"Wordpress"=>3];
	$alumno[2] = ["Matematicas"=>8,"Lengua"=>6,"Filosofia"=>18,"Diseño"=>3,"PHP"=>10,"Wordpress"=>3];
	$alumno[2] = ["Matematicas"=>8,"Lengua"=>6,"Filosofia"=>18,"Diseño"=>3,"PHP"=>10,"Wordpress"=>3];
	$alumno[2] = ["Matematicas"=>8,"Lengua"=>6,"Filosofia"=>18,"Diseño"=>3,"PHP"=>10,"Wordpress"=>3];
	echo $mascota["Rodrigo"];
	echo $mascota["Rodrigo"]["Matematicas"];
	echo $mascota["Rodrigo"]["Lengua"];
	echo $mascota["Rodrigo"]["Filosofia"];
	echo $mascota["Rodrigo"]["Diseño"];
	falta la media
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