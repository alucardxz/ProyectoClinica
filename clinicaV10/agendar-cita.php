<?php 


require 'conexion.php';

$IdPaciente=$_GET['IdPaciente'];
$sql = "SELECT * FROM pacientes WHERE  IdPaciente='$IdPaciente'";
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
    <form name="alimentos" method="post" class="contenido" action="citas.php">
        <div class="borde-redondeado">
            <h2 class="let" style="margin: 20px;">Agendar Cita</h2>
            <div class="linea"></div>
            <section class="personal">
                
                <table class="tab-datos">
                    <tr>
                        <td><label>Nombre</label></td>
                        <td><label>Telefono</label></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['Nombre'] ?>" class="txt" type="text" name="Nombre" placeholder="Nombre" disabled></td>
                        <td><input value="<?php echo $mostrar['Telefono'] ?>" type="tel" class="txt" name="tel" placeholder="Telefono" disabled></td>
                    </tr>
                    <tr>
                        <td><label>E-mail</label></td>
                        <td><label>Fecha</label></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['email'] ?>" class="txt" type="email" name="email" placeholder="email" disabled></td>
                        <td> <input type="date" class="txt" name="fecha" placeholder="" required></td>
                    </tr>
                    <tr>
                        <td><label>Hora</label></td>
                        <td><label>Servicio</label></td>
                    </tr>
                    <tr>
                        <td><input class="txt" type="time" name="hora" placeholder="" required></td>
                        <td><select name="servicio" class="txt" style="color: black">
                            <option value="Consulta" style="color: black">Consulta</option>
                            <option value="Maderoterapia" style="color: black">Maderoterapia</option>
                            <option value="Acupuntura" style="color: black">Acupuntura</option>
                        </select></td>
                    </tr>
                </table>

            </section>

            <div class="btns">
                <input class="btn" type="submit" name="" value="Agendar">
                <input class="btn" type="reset" name="" value="Nuevo">
            </div>
        </div>
        
    </form>
</center>


<footer>
    <div class="C-footer">
        <!---Columna 1--->
        <div class="col1">
            <h1>Más información.</h1>
            <p>
                La Clínica de Nutrición Yin-Yiao se ubica en Colima México, es atendida por la licenciada en Nutrición Erica Liliana Valencia Ramírez. Además de ofrecer citas para control de peso y enfermedades se prestan los servicios de Maderoterapía y acupuntura 
            </p>
        </div>
        <!---Columna 2--->
        <div class="col2">
            <h1>Redes Sociales</h1>
            <div class="row">
                <img src="img/facebook.png" />
                <label>Siguenos en Facebook</label>
            </div>
            <div class="row">
                <img src="img/instagram.png" />
                <label>Siguenos en Instagram</label>
            </div>
            <div class="row">
                <img src="img/twitter.png" />
                <label>Siguenos en Twitter</label>
            </div>
        </div>
        <!---Columna 3--->
        <div class="col3">
            <h1>Información Contactos</h1>
            <div class="row2">
                <br><br>
                <img src="img/house.png" />
                <label>
                    Maclovio Herrera #188B
                    <br>
                    Jardines de la corregidora 
                    Colima, Colima.
                </label>
            </div>
            <div class="row2">
                <img src="img/tel.png" />
                <label>312 330 9587</label>
            </div>
            <div class="row2">
                <img src="img/contact.png" />
                <label>erica_conc@hotmail.com</label>
            </div>
        </div>
    </div>
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