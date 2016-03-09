<?php

include "conexion.php";

$Nombre=$_POST["nomb"];
$Apellidos=$_POST["apps"];
$NumeroControl=$_POST["numC"];
$Edad=$_POST["Ed"];

$sql="INSERT INTO estudiantes (Nombre, Apellidos, Numero_de_control, Edad)VALUES('$Nombre','$Apellidos','$NumeroControl','$Edad')";
$res=mysql_query($sql,$conexion);
if($res){
    echo"los datos fueron registrados correctamente";
    echo "Datos recibidos: Nombre: ".$Nombre." Apellidos: ".$Apellidos." Numero de control: ".$NumeroControl." Edad: ".$Edad;
} else{
    echo"Se produjo un error al momento de registrar los datos: ".mysql_error();
}
mysql_close($conexion);
?>