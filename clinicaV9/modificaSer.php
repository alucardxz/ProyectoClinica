<?php 

$where ="";

require 'conexion.php';

$IdTerapia=$_GET['IdTerapia'];
$sql = "SELECT * FROM terapia WHERE  IdTerapia='$IdTerapia'";
$result = mysqli_query($mysqliConect,$sql);
$mostrar=mysqli_fetch_array($result);

?>     

<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <title></title>
  <link rel="stylesheet" href="css/estilos.css" />
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/header.js"></script>
</head>


<body >
  
  <header class="">
    
    <div class="wrapper">

      <div class="logo">
        <h3>Clínica de Nutrición Yin-Yiao</h3>
      </div>
      <nav>
        <a href="inicio.html">Inicio</a>
      </nav>
    </div>
  </header>
  <center>
    <form method="POST" class="contenido" action="updateservi.php">
      <div class="borde-redondeado">
        <h2 class="let" style="margin: 20px; font-weight: bold; ">Modificar Terapia</h2>
        <div class="linea"></div>
        <section class="personal">
         <table class="tab-datos">
          <tr>
            <td><label>Nombre Terapia</label></td>
            <td><label>Beneficios</label></td>
            <td><label>Descripción</label></td>
          </tr>
          <tr>
            <input value="<?php echo $mostrar['IdTerapia']; ?>" class="txt" type="hidden" name="IdTerapia" />
            <td><input value="<?php echo $mostrar['Terapia']; ?>" class="txt" type="text" name="Terapia" placeholder="Servicio" required /></td>
            <td><input value="<?php echo $mostrar['Beneficios'];?>" class=" txt" type="text" name="Beneficios" placeholder="Descripción" required /></td>
            <td><input value="<?php echo $mostrar['Descripcion'];?>" class=" txt" type="text" name="Descripcion" placeholder="Descripción" required /></td>
          </tr>
          <tr>
            <td><label>Duracion</label></td>
            <td><label>Precio</label></td>
          </tr>
          <tr>
            <td><input value="<?php echo $mostrar['Duracion'];?>" class=" txt" type="text" name="Duracion" placeholder="Duración" required /></td>
            <td><input value="<?php echo $mostrar['Precio'];?>" class="txt" type="text" name="Precio" placeholder="$" required /></td>
          </tr>
        </table>
      </section>
      <div class="btns">
        <input class="btn" type="submit" name="" value="Guardar">
        <input class="btn" type="reset" name="" value="Nuevo">
        <input class="btn" type="submit" name="" value="Cancelar">
      </div>
      
    </form>
  </center>
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


