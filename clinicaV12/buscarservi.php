<?php 

$where ="";

$mysqliConect=new mysqli('localhost','root','','clinica');
if (!$mysqliConect) {
    echo "Error al conectar a la base de datos";
}

if (!empty($_POST)) {
    $valor=$_POST['busqueda'];
    if (!empty($valor)) {
        $where="WHERE Terapia LIKE '$valor'";
    }
    echo $where;
}

$sql="SELECT * FROM servicios $where";
$resultado=mysqli_query($mysqliConect,$sql);
 ?> 

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Clínica de nutrición Yin-Yiao</title>
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/header.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
</head>


<body>

    <header class="">

        <div class="wrapper">

            <div class="logo">
                <h1 style="color: white; font-size: 50px;">Clínica de Nutrición Yin-Yiao</h1>
            </div>
            <nav>
                <a href="inicio.html">Inicio</a>
            </nav>
        </div>
    </header>
</div>
<center>
        <div class="contenido">
            <h2 class="let" style="margin: 20px; font-size: 40px; ">Consultar Servicio</h2>
            <div class="linea"></div>
            <div>
               <table class="tab-datos">
                <tr>

                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <td><label style="font-size: 22px;">Buscar: </label></td>
                        <td><input class=" txt" type="txt" id="busqueda" name="busqueda" placeholder="Buscar" required /></td>
                        <td><input class="btn btn-info" type="submit" name="" value="Buscar"></td>
                    </form>

                    <td><a href="Agregar-servicio.html" class="btn btn-primary">Agregar</td>
                    </tr>
                </table>
                <table style="width: 90%;" class="table table-bordered table-dark">
                  <thead >
                    <tr>
                      <th scope="col">Id Terapia</th>
                      <th scope="col">Nombre terapia</th>
                      <th scope="col">Beneficios</th>
                      <th scope="col">Descripción</th>
                      <th scope="col">Duración</th>
                      <th scope="col">Precio</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                $sql = "SELECT * FROM terapia;";
                $result = mysqli_query($mysqliConect,$sql);
                while ($mostrar=mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $mostrar['IdTerapia']; ?></td>
                        <td><?php echo $mostrar['Terapia']; ?></td>
                        <td><?php echo $mostrar['Beneficios']; ?></td>
                        <td><?php echo $mostrar['Descripcion']; ?></td>
                        <td><?php echo $mostrar['Duracion']; ?></td>
                        <td><?php echo $mostrar['Precio']; ?></td>

                        <td><a class="btn btn-primary" style="width: 90px" href="modificaSer.php?IdTerapia=<?php echo $mostrar['IdTerapia']; ?>">Modificar</a></td>


                        <td><a style="width: 90px; background-color: red;"  class="btn btn-primary" href="#" data-href="eliminarservicio.php?IdTerapia=<?php echo $mostrar['IdTerapia']; ?>" data-toggle="modal" data-target="#confirm-delete">Eliminar</a></td>
                    </tr>
                    <?php 
                }
                ?>
            </tbody>
        </table>
    </div>

</div>  
</center>
<!--modal-->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
            </div>

            <div class="modal-body">
                ¿Desea eliminar este registro?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger btn-ok">Eliminar</a>
            </div>
        </div>
    </div>
</div>

<!--script-->
<script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });
</script>   

</body>
<footer>
    <!--derechos-->
    <div class="final">
        <div class="derechos">
            @2020 Todos los Derechos Reservados
        </div>
        <div class="informacion">
            Información Compañia | Política y Privacidad | Términos y Condiciones
        </div>
    </div>
</footer>
</html>
