<?php 

$where ="";

$table = 'citas';
$la_bd= 'clinica';
$db = mysqli_connect('localhost','root','');
if (!mysqli_select_db($db,$la_bd)) {
    die("<h2>Error</h2>");
}

$sql = "SELECT * FROM $table WHERE Fecha = 'Fecha';";
$result = mysqli_query($db,$sql);
?> 

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/header.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>


<body>

    <header class="">

        <div class="wrapper">

            <div class="logo">
                <h3>Clínica de Nutrición Yin-Yiao</h3>
            </div>
            <nav>
                <a href="loggin-consul.html">Iniciar Sesión</a>
            </nav>
        </div>
    </header>
</div>
<center>
 <form name="" method="POST" class="contenido" action="mostrar-consul.php">
    <div class="">
        <h2 class="let" style="margin: 20px;">Consultar Cita</h2>
        <div class="linea"></div>
        <section class="personal">
            <table class="tab-datos">
                <tr>
                    <td><label>Buscar: </label></td>
                    <td><input class=" txt" type="date" id="busqueda" name="busqueda" placeholder="Buscar" required value="<?php $busqueda?>" /></td>
                    <td><input class="btn btn-primary" type="submit" name="" value="Buscar"></td>
                    <td><a href="Agregar-cita.html" class="btn btn-primary">Agregar</td>
                    </tr>
                </table>
                <br>
  </section>
                <div class="row table-responsive">
                        <table style="width: 90%;" class="table">
                          <thead class="table table-striped table-dark">
                            <tr>
                                <th scope="col">#</th>
                              <th scope="col">Id Consulta</th>
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
                        while ($result->mysql_fetch_array(result)) {?>
                            <tr>
                                <td><?php echo $row['IdCita']; ?></td>
                                <td><?php echo $row['Nombre']; ?></td>
                                <td><?php echo $row['Telefono']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['Fecha']; ?></td>
                                <td><?php echo $row['Hora']; ?></td>
                                <td><?php echo $row['Servicio']; ?></td>
                            <td><a style="width: 90px;" href="" class="btn btn-primary" >Modificar</a> </td>
                          <td><a style="width: 90px;" href="" class="btn btn-primary" >Eliminar</a> </td>
                          </tr>
                      <?php } ?>
                        <tr>
                          <th scope="row"></th>
                          <td> </td>
                          <td> </td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td> </td>
                          <td> </td>
                          <td><a style="width: 90px;" href="" class="btn btn-primary" >Modificar</a> </td>
                          <td><a style="width: 90px;" href="" class="btn btn-primary" >Eliminar</a> </td>
                      </tr>
                  </tbody>
              </table>
                </div>
          
        </div>  
    </form>
</center>

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

</body>
</html>
