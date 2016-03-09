<?php

$usuario="root";
$contrasena="";
$servidor="localhost";
$bd="itsl";

$conexion=mysql_connect($servidor,$usuario,$contrasena) or die("Error al conectarse al servidor de base de datos: ".mysql_error());
mysql_select_db($bd,$conexion);

?>