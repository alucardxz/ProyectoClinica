<?php 

require 'conexion.php';
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
</head>
<script src="https://kit.fontawesome.com/6f754649ba.js" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $('#mostrardatos').DataTable({
            "order": [[1, "asc"]],
            "language":{
           
                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                "infoEmpty": "Registro encontrado",
                "infoFiltered": "(filtrada de _MAX_ registros)",
                "loadingRecords": "Cargando...",
                "processing":     "Procesando...",
                "search": "Buscar:",
                "zeroRecords":    "No se encuentra registro",
                "paginate": {
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },                  
            }
        }); 
    }); 
</script>

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
        <h2 class="let" style="margin: 20px; font-size: 40px; ">Consultar Alimentos</h2>
        <div class="linea"></div>
        <div class="row table-responsive">

            <table style="width: 90%;" class="display" id="mostrardatos" >
              <thead style="background-color: rgba(44,161,177,0.80);">
                <tr>
                  <th scope="col" class="">Id Alimento</th>
                  <th scope="col">Alimento</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Energia</th>
                  <th scope="col">Peso Bruto</th>
                  <th scope="col">Peso Neto</th>
                  <th scope="col">Editar</th>
                  <th scope="col">Eliminar</th>
              </tr>
            </thead>
          <tbody>
            <?php 
            $sql = "SELECT * FROM alimentos;";
            $result = mysqli_query($mysqliConect,$sql);
            while ($mostrar=mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $mostrar['IdAlimento']; ?></td>
                    <td><?php echo $mostrar['Alimento']; ?></td>
                    <td><?php echo $mostrar['Categoria']; ?></td>
                    <td><?php echo $mostrar['Cantidad']; ?></td>
                    <td><?php echo $mostrar['Energia']; ?></td>
                    <td><?php echo $mostrar['Pesobruto']; ?></td>
                    <td><?php echo $mostrar['Pesoneto']; ?></td>

                    <td><a href="modificar-alimento.php?IdAlimento=<?php echo $mostrar['IdAlimento']; ?>"><i class="fas fa-edit"></i></a></td>


                    <td><a style="width: 90px;"  href="#" data-href="eliminaralimento.php?IdAlimento=<?php echo $mostrar['IdAlimento']; ?>" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash-alt"></i></a></td>
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
                <i class="fas fa-exclamation-triangle">¿Desea eliminar este registro?</i>
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
    <div class="final" >
        <div class="derechos">
            @2020 Todos los Derechos Reservados
        </div>
        <div class="informacion">
            Información Compañia | Política y Privacidad | Términos y Condiciones
        </div>
    </div>
</footer>
</html>
