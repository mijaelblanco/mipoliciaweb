<?php

$data=$_POST["myHttpData"];
$data2=$_POST["myHttpData2"];
$data3=$_POST["myHttpData3"];
$data4=$_POST["myHttpData4"];
$data5=$_POST["myHttpData5"];


 function Conectarse() {
 
 if(!($conexion=mysql_connect('mysql1.000webhost.com','a2934386_mijael','blanco11'))) {
 exit();
 
}

if(!(mysql_select_db('a2934386_mijael',$conexion))) {
echo 'Error al Seleccionar Base de Datos';
exit();
}
	return $conexion;
}

$conex=Conectarse();
$sql="insert into markers(usuario,celular,lat,lng,type) values('$data','$data2','$data4','$data3','$data5')";
$resultado=mysql_query($sql,$conex);

mysql_close($conex);
       
   ?>