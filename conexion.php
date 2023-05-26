<?php
$host="localhost";
/* $user cuando lo tengo con XAMP es root, pero ya luego debo cambiarlo
por el usuario de la base de datos*/
$user="id20814087_graphicweb";
$pass="Paulausuga1995@";
/*Nombre de la base de datos*/
$dbname="id20814087_graphicmoney";

$con=mysqli_connect($host,$user,$pass,$dbname);
mysqli_set_charset($con, 'utf8');
if(mysqli_connect_errno()){
    echo 'error de conexion'. mysqli_connect_errno();
}else{
    
}
?>