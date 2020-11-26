<?php
$table = 'citas';
$la_bd= 'clinica';
$Fecha=$_POST['busqueda'];
$db = mysqli_connect('localhost','root','');
if (!mysqli_select_db($db,$la_bd)) {
    die("<h2>Error</h2>");
}
$sql = "SELECT * FROM $table WHERE Fecha = '$Fecha';";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_row($result);
if ( $row > 1) {
    echo '<script language="javascript">alert("Cita encontrado satisfactoriamente");</script>';
}else {
    die('<script language="javascript">alert("Cita no encontrado ");</script>');
}
mysqli_close($db);

?>



  <!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/header.js"></script>  
</head>
<body>
    <header class="">
        <div class="wrapper">
            <div class="logo">
                <h3>Clínica de Nutrición Yin-Yiao</h3>
            </div>
            <nav>
                <a href="loggin-consul.html">Iniciar Sesión</a>
                <a href="ConsultaMed.html">Regístrate</a>
            </nav>
        </div>
    </header>
    </div>
    <center>
              <form name="mostrar-consul" method="POST" class="contenido" action="">
            <div class="borde-redondeado">
                <h2 class="let" style="margin: 20px;">Consultar Cita</h2>
                <div class="linea"></div>
                <section class="personal">


</section>
                    <div>
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
                        <tr>
                          <th scope="row">1</th>
                          <td><?php echo $row[0]?> </td>
                          <td><?php echo $row[1]?> </td>
                          <td><?php echo $row[2]?></td>
                          <td><?php echo $row[3]?></td>
                          <td><?php echo $row[4]?></td>
                          <td><?php echo $row[5]?> </td>
                          <td><?php echo $row[6]?> </td>
                          <td><a href="" class="boton2" >Modificar</a> </td>
                          <td><a href="" class="boton2" >Eliminar</a> </td>
                      </tr>
                  </tbody>
                                <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td><?php echo $row[0]?> </td>
                          <td><?php echo $row[1]?> </td>
                          <td><?php echo $row[2]?></td>
                          <td><?php echo $row[3]?></td>
                          <td><?php echo $row[4]?></td>
                          <td><?php echo $row[5]?> </td>
                          <td><?php echo $row[6]?> </td>
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
