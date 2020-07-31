<?php
 include ("./service/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modulo PHP y MYSQL</title>
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./css/util.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link href="./css/all.css" rel="stylesheet"> <!--load all styles -->
    <script src="https://kit.fontawesome.com/a3c8e6637e.js" crossorigin="anonymous"></script>
</head>
<body>
    <br/>
    <div class="cabezera">
    <a class="cab" href="modulo.php?insert1">Agregar<i class="far fa-plus-square" ></i></a>
    </div>
    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                    <table>
                        <thead>
                            <tr class="row100 head">
                                <th class="cell100 column1">CódigoModulo</th>
                                <th class="cell100 column2">Nombre</th>
                                <th class="cell100 column3">Estado</th>
                                <th class="cell100 column3">Opciones</th>
                            </tr>
                        </thead>
                    </table>
                    </div>
                    <?php
                    $consulta = "SELECT * FROM SEG_MODULO";
                    $ejecutar = mysqli_query($conex,$consulta);
                    $i=0;
                    while($fila = mysqli_fetch_array($ejecutar)){
                        $codModulo=$fila['COD_MODULO'];
                        $nombreModulo=$fila['NOMBRE'];
                        $estadoModulo=$fila['ESTADO'];
                        $i++;

                    ?>
                    <div class="table100-body js-pscroll">
                        <table>
                        <tbody>
                            <tr class="row100 body">
                                <td class="cell100 column1"><?php echo $codModulo;?> </td>
                                <td class="cell100 column2"><?php echo $nombreModulo;?></td>
                                <td class="cell100 column3"><?php echo $estadoModulo;?></td>
                                <td class="cell100 column5"><a href="modulo.php?editar=<?php echo $codModulo; ?>"><i class="fas fa-edit"></i></a></td>
                                <td class="cell100 column6"><a href="modulo.php?borrar=<?php echo $codModulo; ?>"><i class="fas fa-minus-circle"></i></a></td>
                            </tr>
                        </tbody>
                        <?php  } ?>
                        </table>
                    </div>
                </div>   
            </div>    
        </div>
    </div>
    
    <div class="formularios" style="display: run-in">
    <?php
        if(isset($_GET['insert1'])){
            include("agregar1.php");
        }    
    ?>
    <?php
        if(isset($_GET['editar'])){
            include("editar.php");
        }    
    ?>
    </div>
    <?php
    if(isset($_GET['borrar'])){
        
        $borrar_codModulo = mysqli_real_escape_string($conex,$_GET['borrar']);
        $borrar = "DELETE FROM SEG_MODULO WHERE COD_MODULO= '$borrar_codModulo' ";
        $ejecutar=mysqli_query($conex,$borrar);
        if($ejecutar){
            echo "<script>alert('El MODULO ha sido Eliminado!')</script>";
            echo "<script> window.open('modulo.php','_self')</script>";
        }
    }
    ?>
</body>
</html>