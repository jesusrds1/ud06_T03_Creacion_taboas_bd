<?php

	//Conexión

	$conexionBD = @mysqli_connect('localhost', 'usuarioIAW', '1234');



	if (!$conexionBD) {

		echo('Erro número ' . mysqli_connect_errno() . ' ao establecer a conexión: ' . mysqli_connect_error() . '.<br/>');

	} else {

		echo('Conexión establecida con éxito<br/>');

	



		//Selección da BD

		if (!mysqli_select_db($conexionBD, 'IAW')) {

			echo('Erro número ' . mysqli_errno($conexionBD) . ' ao seleccionar a BD: ' . mysqli_error($conexionBD) . '.');

		} else {

			echo('Selección da BD realizada con éxito.<br/>');



			//Creación da táboa

			$sentenzaSQL = 'CREATE TABLE unidades (

				id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 

				nome VARCHAR(50) NOT NULL,

				descricion VARCHAR(100)

				)';



			if (mysqli_query($conexionBD, $sentenzaSQL)) {

				echo('Táboa unidades creada con éxito.<br/>');

			} else {

				echo('Erro na creación da táboa: ' . mysqli_error($conexionBD));

			}

		}



			//Desconexión

		if (!@mysqli_close($conexionBD)) {

			echo('Erro número ' . mysqli_errno($conexionBD) . ' ao pechar a conexión: ' . mysqli_error($conexionBD) . '.<br/>');

		} else {

			echo('Conexión pechada con éxito');

		}

	}

?>