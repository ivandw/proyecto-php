<?php
$server="localhost";
$usuario_db="root";
$clave_db="";
$base="nodejs";
$link=mysqli_connect($server,$usuario_db,$clave_db,$base);
mysql_query ("SET NAMES 'utf8'");

/*

if (!$link) {
    die('Error de Conexion (' . mysqli_connect_errno() . ') ' . mysqli_connect_error() );
}

*/

?>