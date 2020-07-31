<?php
include ("./service/configuracion.php");
$conex = new mysqli($server,$user,$pass,$database);
if(mysqli_connect_errno()){
    echo "No conectado", mysqli_conect_error();
    exit();
}else{
    echo 'Conectado';
}
?>