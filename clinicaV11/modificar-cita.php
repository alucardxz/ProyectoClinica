<?php 

$where ="";

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
</head>


<body>

    <header class="">

        <div class="wrapper">

            <div class="logo">
                <h1 style="color: white; font-size: 50px;">Clínica de Nutrición Yin-Yiao</h1>
            </div>
            <nav>
                <a href="loggin-consul.html">Iniciar Sesión</a>
            </nav>
        </div>
    </header>
</div>
<center>
 <form name="" method="POST" class="contenido" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="">
        <h2 class="let" style="margin: 20px; font-size: 40px; ">Consultar Cita</h2>
        <div class="linea"></div>
        <section class="personal">
            <table class="tab-datos">
                <tr>
                    <td><label style="font-size: 22px;">Buscar: </label></td>
                    <td><input class=" txt" type="date" id="busqueda" name="busqueda" placeholder="Buscar" required value="<?php $busqueda?>" /></td>
                    <td><input class="btn btn-info" type="submit" name="" value="Buscar"></td>
                    <td><a href="Agregar-cita.html" class="btn btn-primary">Agregar</td>
                    </tr>
                </table>
                <br>
  </section>
                <div>
                        <table style="width: 90%;" class="table table-bordered table-dark">
                          <thead >
                            <tr>
                              <th scope="col">Id Cita</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Telefono</th>
                              <th scope="col">email</th>
                              <th scope="col">Fecha</th>
                              <th scope="col">Hora</th>
                              <th scope="col">Servicio</th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $sql = "SELECT * FROM citas;";
                        $result = mysqli_query($mysqliConect,$sql);
                        while ($mostrar=mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $mostrar['IdCita']; ?></td>
                                <td><?php echo $mostrar['Nombre']; ?></td>
                                <td><?php echo $mostrar['Telefono']; ?></td>
                                <td><?php echo $mostrar['email']; ?></td>
                                <td><?php echo $mostrar['Fecha']; ?></td>
                                <td><?php echo $mostrar['Hora']; ?></td>
                                <td><?php echo $mostrar['Servicio']; ?></td>

                            <td><a style="width: 90px" class="btn btn-primary" href="modificaCi.php?Fecha=<?php echo $mostrar['Fecha']; ?>">Modificar</a></td>

                            <a href="modificaCi.php?IdCita=<?php echo $mostrar['IdCita'] ?>"></a>

                            <td><a style="width: 90px" class="btn btn-primary" href="#" data-href="eliminar.php?Fecha=<?php echo $mostrar['Fecha']; ?>" data-toggle="modal" data-target="#confirm-delete">Eliminar</a></td>
                          </tr>
                      <?php 
                  }
                   ?>
                  </tbody>
              </table>
                </div>
          
        </div>  
    </form>
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
