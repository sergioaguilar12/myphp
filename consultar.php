<?php
	class conexion{
		function recuperarDatos(){
			$host = "localhost";
			$user = "root";
			$pw = "";
			$db = "itsl";

			$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos ");
			mysql_select_db($db, $con) or die ("No se encontro la base de datos. ");
			$query = "SELECT * FROM estudiantes";
			$resultado = mysql_query($query);

			while ($fila = mysql_fetch_array($resultado)) {
				echo " <tr>";
				echo "<td> $fila[Id]  </td> <td> $fila[Nombre] </td> <td> $fila[Apellidos]  </td> <td> $fila[Numero_de_control] </td> <td> $fila[Edad] </td> <br> ";
				echo " </tr> ";
			}

		}
	}
?>
