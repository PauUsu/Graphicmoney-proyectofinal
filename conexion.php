<?php
$host="localhost";
/* $user cuando lo tengo con XAMP es root, pero ya luego debo cambiarlo
por el usuario de la base de datos*/
$user="root";
$pass="";
/*Nombre de la base de datos*/
$dbname="graphicmoney";

$con=mysqli_connect($host,$user,$pass,$dbname);
mysqli_set_charset($con, 'utf8');
if(mysqli_connect_errno()){
    echo 'error de conexion'. mysqli_connect_errno();
}else{
    
}
?>