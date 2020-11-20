<?php 

$where ="";

$mysqliConect=new mysqli('localhost','root','','clinica');
if (!$mysqliConect) {
    echo "Error al conectar a la base de datos";
}
$Fecha=$_GET['Fecha'];
$sql = "SELECT * FROM citas WHERE Fecha ='$Fecha'";
$result = mysqli_query($mysqliConect,$sql);
$mostrar=mysqli_fetch_array($result);

?> 

  <!DOCTYPE html>

  <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="css/estilos.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/header.js"></script>
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
                <h3>Clínica de Nutrición Yin-Yiao</h3>
            </div>
            <nav>
               <a href="inicio.html">Inicio</a>
           </nav>
       </div>
   </header>
   <center>
    <form name="" method="POST" class="contenido" action="updatecita.php">
        <div class="borde-redondeado">
            <h2 class="let" style="margin: 20px;">Modificar Cita</h2>
            <div class="linea"></div>
            <section class="personal">
                
                <table class="tab-datos">
                    <tr>
                        <td><label>Nombre</label></td>
                        <td><label>Telefono</label></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="IdCita" value="<?php echo ['IdCita'] ?>" >
                        <td><input value="<?php echo $mostrar['Nombre'] ?>" class="txt" type="text" name="Nombre" placeholder="Nombre" required></td>
                        <td><input value="<?php echo $mostrar['Telefono'] ?>" type="tel" class="txt" name="tel" placeholder="Telefono" required></td>
                    </tr>
                    <tr>
                        <td><label>E-mail</label></td>
                        <td><label>Fecha</label></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['email'] ?>" class="txt" type="email" name="email" placeholder="email" required></td>
                        <td> <input value="<?php echo $mostrar['Fecha'] ?>" type="date" class="txt" name="fecha" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><label>Hora</label></td>
                        <td><label>Servicio</label></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['Hora'] ?>" class="txt" type="time" name="hora" placeholder="" required></td>
                        <td><select value="<?php echo $mostrar[''] ?>" name="servicio" class="txt" style="color: black">
                            <option value="Consulta" <?php if($mostrar['Servicio']=='Consulta') echo 'selected'; ?>>Consulta</option>
                            <option value="Maderoterapia" <?php if($mostrar['Servicio']=='Maderoterapia') echo 'selected'; ?>>Maderoterapia</option>
                            <option value="Acupuntura" <?php if($mostrar['Servicio']=='Acupuntura') echo 'selected'; ?>>Acupuntura</option>
                        </select></td>
                    </tr>
                </table>

            </section>

            <div class="btns">
                <input class="btn" type="submit" name="" value="Guardar">
                <input class="btn" type="reset" name="" value="Nuevo">
                <input class="btn" type="submit" name="" value="Cancelar">
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