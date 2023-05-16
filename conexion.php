<?php
$host="localhost";
$user="root";
$pass="";
$dbname="graphicmoney";

$con=mysqli_connect($host,$user,$pass,$dbname);
mysqli_set_charset($con, 'utf8');
if(mysqli_connect_errno()){
    echo 'error de conexion'. mysqli_connect_errno();
}else{
    
}
?>