<?php
    if(isset($_GET['editar'])){
     $editar_codModulo = mysqli_real_escape_string($conex,$_GET['editar']);
     $consulta = "SELECT * FROM SEG_MODULO WHERE COD_MODULO='$editar_codModulo'";
     $ejecutar=mysqli_query($conex,$consulta);
     $fila = mysqli_fetch_array($ejecutar,MYSQLI_ASSOC);

     $nombreModulo=$fila['NOMBRE'];
     $estadoModulo=$fila['ESTADO'];
     
    }
?>
<br />
<form method="post" action="">
    <label>Nombre Producto:</label>
    <input type="text" name="nombreModulo" value="<?php echo $nombreModulo;?>"><br />
    <label>Estado Producto:</label>
    <input type="text" name="estadoModulo" value="<?php echo $estadoModulo;?>"><br />
    
    <input type="submit" name="actualizar" value="ACTUALIZAR DATOS">
</form>
<?php
    if(isset($_POST['actualizar'])){
        $actualizar_nombreModulo = $_POST['nombreModulo'];
        $actualizar_estadoModulo = $_POST['estadoModulo'];
        $actualizar = "UPDATE SEG_MODULO SET nombreModulo='$actualizar_nombreModulo',estadoModulo='$actualizar_estadoModulo' WHERE COD_MODULO=$editar_codModulo";
        $ejecutar=mysqli_query($conex,$actualizar);
        if($ejecutar){
            echo "<script>alert('Datos Actualizados!')</script>";
            echo "<script> window.open('modulo.php','_self')</script>";
        }
    }
?>