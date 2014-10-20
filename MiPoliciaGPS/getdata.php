<?php

 $varUser = $_POST['usuario'];
 $varNum = $_POST['celular'];


 function Conectarse() {
 
 if(!($conexion=mysql_connect('localhost','root',' '))) {
 exit();
 
}

if(!(mysql_select_db('droidlogin1',$conexion))) {
echo 'Error al Seleccionar Base de Datos';
exit();
}
	return $conexion;
}

$conex=Conectarse();
$sql="insert into usuarios(usuario,celular) values('$varUser','$varNum')";
$resultado=mysql_query($sql,$conex);

mysql_close($conex);
       
   ?>