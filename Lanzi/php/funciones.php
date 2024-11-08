<?php
function getDBCon(){
    // va a dar la conexion a la base de datos
	return mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
} // Se usa mysqli por ser la ultima version 

function inivariables(){
    // iniciar y limpiar los valores de las variables
    // las variables se escriben solo una vez
    global $tipoDocumneto, $nombreMateria, $numMateria, $numDocumento, $nombre,$apellido, $anioDivision;

    
   $tipoDocumneto = "";
   $nombreMateria = "";
   $numMateria = 0;
   $numDocumento = 0;
   $nombre = "";
   $apellido = "";
   $anioDivision = "";
}