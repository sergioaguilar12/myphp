<html>
<head>
<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css" type="text/css"/>
<link rel="stylesheet" href="css/jquery.mobile.theme-1.4.5.min.css" type="text/css"  />
<link rel="stylesheet" href="css/jquery.mobile.structure-1.4.5.min.css" type="text/css" />
<script type="text/javascript" src="phonegap.js"></script>
<script type="text/javascript" src="js/jquery-2.2.0.min.js" ></script>
<script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js" ></script>

<script type="text/javascript">


document.addEventListener("deviceready", onDeviceReady, false);

function onDeviceReady() {
     var btnenviar=$("#btnenviar");
     btnenviar.tap(function env(){
         
            alert("hola iniciamos con las alertas jijiji");
         var nom=$("#txtnombre").val();
         var aps=$("#txtapp").val();
         var nc=$("#txtncontrol").val();
         var edad=$("#txtedad").val();
         
         if(nom==""&& aps=="" && nc=="" && edad==""  ){
             alert("introdusca los datos requeridos en todos los campos");
         }else{
               // alert("se enviaran los datos; Nombre: "+nom+"Apellidos: "+aps+"Numero de control: "+nc+"Edad: "+edad);
           $.ajax({
               type:"POST",
               url:"guardar.php",
               data:"nomb="+nom+"&apps="+aps+"&numC="+nc+"&Ed="+edad,
               success: exitoso
           });
           function exitoso(datos){
               alert("Respuesta: "+datos);
           }
         
         }
     });
}
</script>
<style type="text/css">
#encabezado{
text-align:center;
font-size: 14px;
color:red;
font-weight:bold;
}
#pie{
text-align:center;
font-size:8px;
color:green;
font-weight:bold;
}
</style>
</head>
<body>
    <div data-role="page" id="principal">
	<div data-role="header">
		<h1>Mi Menu Pricipal</h1>
	</div>

	<div data-role="content">
            <a href="#Insertar" data-role="button" data-transition="flip">Registrar</a>	
            <a href="#consultar" data-role="button" data-transition="slideup">Consultar</a>	
  	
            
  	</div>

	<div data-role="footer">
     	<p> pie de mi apliacion</p>
	</div>
    </div>
    
    <div data-role="page" id="Insertar">
	<div data-role="header">
		<h1>Mi aplicación</h1>
	</div>

	<div data-role="content">
            <input type="text" value="" placeholder="Escrive tu nombre" id="txtnombre"/>
            <input type="text" value="" placeholder="Apellidos" id="txtapp"/>
            <input type="text"  placeholder="numero de control" id="txtncontrol"/>
            <input type="text"  placeholder="Edad" id="txtedad"/>
            <input type="button" value="registrar"   id="btnenviar"/>
  	
  	
            
  	</div>

	<div data-role="footer">
            <a href="#principal" data-role="button" data-transition="flip">Inicio</a>
            <a href="#consultar" data-role="button" data-transition="flip">Consultar</a>
     	<p> pie de mi apliacion</p>
	</div>
    </div>
    
    <div data-role="page" id="consultar">
	<div data-role="header">
		<h1>Tabla de Consulta</h1>
	</div>

	
            <div>
			<fieldset>
                            <legend> Datos recuperados: <br>
                            ID Nombre Apellido NumC Edad
                            </legend>
				<div>
					<?php
					    include("consultar.php");
					    $Con = new conexion();
					    $Con->recuperarDatos();
					?>
				</div>
			</fieldset>
		</div>
        

	<div data-role="footer">
     	<p> pie de mi apliacion</p>
        <a href="#principal" data-role="button" data-transition="slideup">Inicio</a> 
        <a href="#Insertar" data-role="button" data-transition="flip">Registrar</a>
         
	</div>
    </div>
    

</body>
</html>
