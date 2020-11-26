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
    <link rel="stylesheet" href="css/estilos2.css" />
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
            <h2 class="let" style="margin: 20px;">Datos personales</h2>
            <div class="linea"></div>
            <section class="personal">

                <table class="tab-datos">
                    <tr>
                        <td><label>Nombre</label></td>
                        <td><label>Vegetariano</label></td>
                        <td><label>Sangre</label></td>
                    </tr>
                    <tr>
                        <td><input style="background-color: rgba(6,137,151,0.70);" value="<?php echo $mostrar['Nombre'] ?>" class="txt"disabled></td>
                        <td><input style="background-color: rgba(6,137,151,0.70);" value="<?php echo $mostrar['Vegetariano'] ?>" type="text" class="txt" name="Vegetariano" disabled></td>
                        <td><input style="background-color: rgba(6,137,151,0.70);" value="<?php echo $mostrar['Sangre'] ?>"class="txt" disabled></td>
                    </tr>
                    <tr>
                        <td><label>Patologias</label></td>
                        <td><label>Antecedentes</label></td>
                        <td><label>Cirugías</label></td>
                    </tr>
                    <tr>
                        <td><input style="background-color: rgba(6,137,151,0.70);" value="<?php echo $mostrar['Patologias'] ?>" class="txt" disabled></td>
                        <td><input style="background-color: rgba(6,137,151,0.70);" value="<?php echo $mostrar['Antecedentes'] ?>" class="txt" disabled></td>
                        <td><input style="background-color: rgba(6,137,151,0.70);" value="<?php echo $mostrar['Cirugias'] ?>" class="txt" disabled></td>
                    </tr>
                    <tr>
                        <td><label>Alergías</label></td>
                    </tr>
                    <tr>
                        <td><input style="background-color: rgba(6,137,151,0.70);" value="<?php echo $mostrar['Alergia'] ?>"class="txt" disabled></td>
                    </tr>

                    <tr>
                        <td><label>Estatura</label></td>
                        <td><label>Peso</label></td>
                        <td><label>Factor Actividad</label></td>
                    </tr>
                    <tr>
                        <td><input style="background-color: rgba(6,137,151,0.70);" value="<?php echo $mostrar['Estatura'] ?>" class="txt" disabled></td>
                        <td><input value="<?php echo $mostrar['Peso'] ?>" type="number" class="txt" name="Peso" required></td>
                        <td><input value="<?php echo $mostrar['Factoracti'] ?>" type="text" class="txt" name="Factoracti" required></td>
                    </tr>
                    <tr>
                        <td><label>Grasa Total</label></td>
                        <td><label>Grasa Superior</label></td>
                        <td><label>Grasa Inferior</label></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['Grasatot'] ?>" type="text" class="txt" name="tel" ></td>
                        <td><input value="<?php echo $mostrar['Grasasup'] ?>" type="text" class="txt" name="Grasasup" required></td>
                        <td><input value="<?php echo $mostrar['Grasainf'] ?>" type="text" class="txt" name="Grasainf" required></td>
                    </tr>
                    <tr>
                        <td><label>Grasa Viseral</label></td>
                        <td><label>Libre de Grasa</label></td>
                        <td><label>Masa Muscular</label></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['Grasavis'] ?>" type="text" class="txt" name="Grasavis" required></td>
                        <td><input value="<?php echo $mostrar['Libregrasa'] ?>" type="text" class="txt" name="Libregrasa" required></td>
                        <td><input value="<?php echo $mostrar['Masamus'] ?>" type="text" class="txt" name="Masamus" required></td>
                    </tr>
                    <tr>
                        <td><label>Peso Oseo</label></td>
                        <td><label>Agua Corporal</label></td>
                        <td><label>Edad Metabolica</label></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['Pesoos'] ?>" type="text" class="txt" name="Pesoos" required></td>
                        <td><input value="<?php echo $mostrar['Aguacorp'] ?>" type="text" class="txt" name="Aguacorp" required></td>
                        <td><input value="<?php echo $mostrar['Edadmet'] ?>" type="text" class="txt" name="Edadmet" required></td>
                    </tr>
                </table>

            </section>
            <form>
                <h2 class="let" style="margin: 20px;">Nueva Dieta</h2>
                <div class="linea"></div>
            </form>
            <table>
                <tr>
                    <td><label style="font-size: 24px; text-align: center;">Al Despertar</label></td>
                </tr>
                <tr>
                    <td><textarea cols="100" rows="40" class="dieta" name="Despertar"></textarea></td>
                </tr>
                <tr><td><label style="font-size: 24px; text-align: center;">Desayuno</label></td></tr>
                <tr><td><textarea cols="100" rows="40" class="dieta" name="Despertar"></textarea></</td></tr>
                <tr><td><label style="font-size: 24px; text-align: center;">Colacion Matutina</label></td></tr>
                <tr><td><textarea cols="100" rows="40" class="dieta" name="Despertar"></textarea></td></tr>
                <tr><td><label style="font-size: 24px; text-align: center;">Comidad</label></td></tr>
                <tr><td><textarea cols="100" rows="40" class="dieta" name="Despertar"></textarea></td></tr>
                <tr><td><label style="font-size: 24px; text-align: center;">Colacion Vespertina</label></td></tr>
                <tr><td><textarea cols="100" rows="40" class="dieta" name="Despertar"></textarea></td></tr>
                <tr><td><label style="font-size: 24px; text-align: center;">Cena</label></td></tr>
                <tr><td><textarea cols="100" rows="40" class="dieta" name="Despertar"></textarea></td></tr>    
            </table>
        
            <div class="btns">
                <input class="btn" type="submit" name="" value="Agendar">
                <input class="btn" type="reset" name="" value="Nuevo">
            </div>
        </div>
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