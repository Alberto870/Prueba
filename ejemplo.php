</head>
<body>
<?php

$Documento=$_POST["documento"];
$Nombre=$_POST["nombre"];
$Apellido=$_POST["apellido"];

try {

		$conexion= new PDO("mysql:host=sql5.freemysqlhosting.net; dbname=sql5124996","sql5124996","c2d2UyxQzL");
		
		$conexion->exec("SET CHARECTER SET utf8");

		$sql="INSERT INTO aprendices (documento,nombres,apellidos) values ($Documento,'$Nombre','$Apellido')";

		$resultado=$conexion->prepare($sql);

		$resultado->execute(array($Documento,$Nombre,$Apellido));

		echo "insertado con exito!";



	} catch(Exception $e){

		die ('error: ' . $e->GetMessage());

	}


?>
</body>
</html>