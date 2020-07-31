<?php
if(isset($_POST['insert1'])){

    $codModulo = $_POST['codModulo'];
    $nombreModulo = $_POST['Nombre'];
    $estadoModulo = $_POST['Estado'];
    $insertar = "INSERT INTO SEG_MODULO(COD_MODULO,NOMBRE,ESTADO) values ('$codModulo','$nombreModulo','$estadoModulo')";
    $ejecutar = mysqli_query($conex,$insertar);
    if($ejecutar){
        echo "<script>alert('Datos Ingresados!')</script>";
        echo "<script> window.open('modulo.php','_self')</script>";
    }else {
        echo "<script>alert('Datos no ingresados!')</script>";
        echo "<script> window.open('modulo.php','_self')</script>";}
    
}


?>
<form  method = "POST" action="">
        <label>Codigo Modulo:</label>
        <input type="text" name="codModulo" placeholder="Escriba el codigo Modulo"><br/>
        <label>Nombre Modulo:</label>
        <input type="text" name="Nombre" placeholder="Escriba el nombre del Modulo"><br/>
        <label>Estado Modulo:</label>
        <input type="text" name="Estado" placeholder="Escriba el nombre del Modulo"><br/>
        <input type="submit" name="insert1" value="Insertar Datos">
</form>
    
<br/>