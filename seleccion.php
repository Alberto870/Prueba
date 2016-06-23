</head>
<body>
<?php



try {

		$conexion= new PDO("mysql:host=sql5.freemysqlhosting.net; dbname=sql5124996","sql5124996","c2d2UyxQzL");
		
		$conexion->exec("SET CHARECTER SET utf8");

		$sql="SELECT documento, nombres, apellidos from aprendices";

		$resultado=$conexion->prepare($sql);

		$resultado->execute(array("documento","nombre","apellido"));

		while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {

				echo "Documento: " . $registro["documento"] . "  Nombre: " . $registro["nombres"] . "  Apellido: " . $registro["apellidos"] . "<br>";
				echo "<br>";

		}




	} catch(Exception $e){

		die ('error: ' . $e->GetMessage());

	}


?>
</body>
</html>