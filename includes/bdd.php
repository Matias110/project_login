<?php

/*Conectar con la base de datos*/ 
function openCon(){
   
//llamamos al include y al ini
$config = parse_ini_file('databases.ini');

//ejecutamos el array dentro del ini
$conexion = new mysqli($config['NOMSERVER'], 
                       $config['USER'], 
                       $config['PASS'],
                       $config['NOMBDD']);

//-> es asociativa arrow

if ($conexion -> connect_errno > 0) {
 //die mustra el msj y freca el codigo
	die("Error de conexiòn");

}

return $conexion;


}

/*Desconectar con la base de datos*/
function closeCon($conexion){
  
  /*close() Cerrar conexion*/
  $conexion -> close();

}

 ?>