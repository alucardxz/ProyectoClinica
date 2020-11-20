<?php 

$mysqliConect=new mysqli('localhost','root','','clinica');
if (!$mysqliConect) {
  echo "Error al conectar a la base de datos";
}
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
                <a href="registrar-us.html">Regístrate</a>
            </nav>
        </div>
    </header>
<center>
<!-----------------------------------------------------------------------------------------------> 
        <form name="" method="POST" class="contenido" action="updatepaciente.php">
                <div class="borde-redondeado">
                    <h2 class="let" style="margin: 20px;">Datos Personales</h2>
                    <div class="linea"></div>
                <section class="personal">
                    <table class="tab-datos">
                        <tr>
                            <td><label>Nombre Completo</label></td>
                            <td><label>Escolaridad</label></td>
                            <td><label>Genero</label></td>
                        </tr>
                        <tr>
                            <input value="<?php echo $mostrar['IdPaciente']; ?>" class="txt" type="hidden" name="IdPaciente" />
                        <td><input value="<?php echo $mostrar['Nombre']; ?>" class=" txt" type="text" name="Nombre" placeholder="Nombre" required /></td>
                        <td><input value="<?php echo $mostrar['Escolaridad']; ?>" class="txt" type="text" name="escolaridad" placeholder="Escolaridad" required /></td>
                           <td><select value="<?php echo $mostrar[''] ?>" name="Genero" class="txt" style="color: black">
                            <option value="Masculino" <?php if($mostrar['Genero']=='Masculino') echo 'selected'; ?>>Masculino</option>
                            <option value="Femenino" <?php if($mostrar['Genero']=='Femenino') echo 'selected'; ?>>Femenino</option>
                        </select></td>
                        <tr>
                            <td><label>Fecha de Nacimiento</label></td>
                            <td><label>Estado</label></td>
                            <td><label>Ciudad</label></td>
                        </tr>
                        <tr>
                        <td><input value="<?php echo $mostrar['Fecha-nac']; ?>" class=" txt" type="date" style="color: black" name="Fecha-nac" placeholder="Fecha Nacimiento" required />  </td>
                        <td><input value="<?php echo $mostrar['Estado']; ?>" class=" txt" type="text" name="edo" placeholder="Estado" required /></td>
                        <td><input value="<?php echo $mostrar['Ciudad']; ?>" class="txt" type="text" name="ciudad" placeholder="Ciudad" required /></td>
                        </tr>

                        <tr>
                            <td><label>Dirección</label></td>
                            <td><label>Telefono</label></td>
                            <td><label>Correo Electronico</label></td>
                        </tr>
                        <tr>
                        <td><input value="<?php echo $mostrar['Direccion']; ?>" class=" txt" type="text" name="Dire" placeholder="Dirección" required /></td>
                        <td><input value="<?php echo $mostrar['Telefono']; ?>" class=" txt" type="number" name="tel" placeholder="Telefono" required /></td>
                        <td><input value="<?php echo $mostrar['email']; ?>" class=" txt" type="text" name="correo" placeholder="e-mail" required /></td>
                        </tr>
                    </table>
                        
                </section>
<!-----------------------------------------------------------------------------------------------> 
                    <h2 class="let" style="margin: 20px;">Estilo de Vida</h2>
                    <div class="linea"></div>
                                 <section class="personal">
                     <table class="tab-datos">
                         <tr>
                             <td><label>Actividad Laboral</label></td>
                             <td><label>Descripcion de actividad Laboral</label></td>
                             <td><label>Vegetariano</label></td>
                         </tr>
                         <tr>
                             <td><input value="<?php echo $mostrar['Act-labo']; ?>" class=" txt" type="text" name="act-labo" placeholder="Actividad Laboral" required /></td>
                             <td><input value="<?php echo $mostrar['Descripcion']; ?>" class="txt" type="text" name="desc-lab" placeholder="Descripcion" required /></td>
                                <td><select value="<?php echo $mostrar[''] ?>" name="Vegetariano" class="txt" style="color: black">
                            <option value="Si" <?php if($mostrar['Vegetariano']=='Si') echo 'selected'; ?>>Si</option>
                            <option value="No" <?php if($mostrar['Vegetariano']=='No') echo 'selected'; ?>>No</option>
                        </select></td>
                         </tr>
                         <tr>
                             <td><label>Nivel de estres</label></td>
                             <td><label>Actividades deportivas</label></td>
                         </tr>
                         <tr>
                             <td> <input value="<?php echo $mostrar['Nivel-estres']; ?>" class=" txt" type="text"  name="niv-est" placeholder="Nivel de estres" required />
                        </td>
                             <td><input value="<?php echo $mostrar['Act-depor']; ?>" class=" txt" type="text" name="act-dep" placeholder="Actividad deportiva" required /></td>
                         </tr>
                     </table>
                </section>
<!----------------------------------------------------------------------------------------------->                  
                  <h2 class="let" style="margin: 20px;">Historia Clínica</h2>
                    <div class="linea"></div>
                    <section class="personal">
                        <table class="tab-datos">
                            <tr>
                               <td><label>Motivo Consulta</label></td> 
                               <td><label>Tipo de sangre</label></td>
                               <td><label>Patologias reelevantes</label></td>
                            </tr>

                            <tr>
                               <td><input value="<?php echo $mostrar['Motivo-consu']; ?>" class=" txt" type="text" name="mot-consul" placeholder="Motivo" required /></td> 
                            <td><select value="<?php echo $mostrar[''] ?>" name="Sangre" class="txt" style="color: black">
                            <option value="O-" <?php if($mostrar['Sangre']=='O-') echo 'selected'; ?>>O negativo</option>
                            <option value="O+" <?php if($mostrar['Sangre']=='O+') echo 'selected'; ?>>O positivo</option>
                            <option value="A-" <?php if($mostrar['Sangre']=='A-') echo 'selected'; ?>>A negativo</option>
                            <option value="A+" <?php if($mostrar['Sangre']=='A+') echo 'selected'; ?>>A positivo</option>
                            <option value="B-" <?php if($mostrar['Sangre']=='B-') echo 'selected'; ?>>B negativo</option>
                            <option value="B+" <?php if($mostrar['Sangre']=='B+') echo 'selected'; ?>>B positivo</option>
                            <option value="AB-" <?php if($mostrar['Sangre']=='AB-') echo 'selected'; ?>>AB negativo</option>
                            <option value="AB+" <?php if($mostrar['Sangre']=='AB+') echo 'selected'; ?>>AB positivo</option>
                        </select></td>
                               <td><input value="<?php echo $mostrar['Patologias']; ?>" class="txt" type="text" name="patologias" placeholder="Patologias" required /></td>
                            </tr>

                            <tr>
                                <td><label>Antecedentes heredofamiliares</label></td>
                               <td><label>Cirugías realizadas</label></td>
                               <td><label>Alergias</label></td>
                            </tr>

                            <tr>
                               <td><input value="<?php echo $mostrar['Antecedentes']; ?>" class="txt" type="text" name="antecedentes" placeholder="Antecedentes" required /></td>
                               <td><input value="<?php echo $mostrar['Cirugias']; ?>" class="txt" type="text" name="cirugias" placeholder="Cirugías" required /></td>
                               <td><input value="<?php echo $mostrar['Alergia']; ?>" class="txt" type="text" name="alergia" placeholder="Alergias" required /></td>
                            </tr>

                            <tr>
                               <td><label>Vacunas</label></td> 
                               
                               
                            </tr>

                            <tr>
                               <td>  <input value="<?php echo $mostrar['Vacunas']; ?>" class="txt" type="text" name="vacunas" placeholder="Vacunas" required /></td> 
                               
                            </tr>
                        </table>
                     
                </section>
                         <div class="">

                        <label>Patologias actuales</label>
                   
                    <table class="tabla">
                        <tr>
                            <td><input type="checkbox" name="acido-u" value="Acido urico alto">
                            <label>Acido urico alto</label></td>
                            
                            <td><input type="checkbox" name="anorexia" value="Anorexia">
                            <label>Anorexia</label></td>
                            
                            <td><input type="checkbox" name="bulimia" value="Bulimia">
                            <label>Bulimia</label></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="cancer" value="Cancer">
                            <label>Cancer</label></td>
                            
                            <td><input type="checkbox" name="obesidad" value="Obesidad">
                            <label>Obesidad</label></td>
                            
                            <td><input type="checkbox" name="enfer-ep" value="Enfermedad hepática severa">
                            <label>Enfermedad hepática severa</label></td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" name="sobrepeso" value="Sobrepeso">
                            <label>Sobrepeso</label></td>
                            
                            <td><input type="checkbox" name="renal" value="Enfermedad cronica renal">
                            <label>Enfermedad cronica renal</label></td>
        

                                  <td><input type="checkbox" name="adiccion" value="Adicción a drogas o alcohol">
                            <label>Adicción a drogas o alcohol</label></td>
                        </tr>
                        
                        <tr>
                            <td><input type="checkbox" name="diabetes1" value="Diabetes melitus I">
                            <label>Diabetes melitus I</label></td>
                            
                            <td><input type="checkbox" name="diabetes2" value="Diabetes melitus II">
                            <label>Diabetes melitus Iniciar</label></td>
                            
                            <td><input type="checkbox" name="feni" value="Fenilcetonórico">
                            <label>Fenilcetonórico</label></td>
                        </tr>
                        
                        <tr>
                            <td><input type="checkbox" name="accidente-cere" value="Accidente bascular cerebral">
                            <label>Accidente bascular cerebral</label></td>

                            <td><input type="checkbox" name="infarto" value="Infarto(ultimos 3 meses)">
                            <label>Infarto(ultimos 3 meses)</label></td>

                            <td><input type="checkbox" name="hipercolestemia" value="Hipercolestemía">
                            <label>Hipercolestemía</label></td>
                        </tr>
                        <tr>
                             <td><input type="checkbox" name="hipertension" value="Hipertensión">
                            <label>Hipertensión</label></td>
                        </tr>
                    </table>
                     </div>
<!-----------------------------------------------------------------------------------------------> 
                    <h2 class="let" style="margin: 20px;">Hábitos Tóxicos</h2>
                    <div class="linea"></div>
                <section class="personal">
                    <table class="tab-datos">
                        <tr>
                            <td><label>Consumo de cigarro</label></td>
                            <td><label>Frecuencia</label></td>
                            <td><label>Cantidad Cigarros</label></td>
                        </tr>
                        <tr>
                            <td><select value="<?php echo $mostrar[''] ?>" name="Cigarro" class="txt" style="color: black">
                            <option value="Si" <?php if($mostrar['Cigarro']=='Si') echo 'selected'; ?>>Si</option>
                            <option value="No" <?php if($mostrar['Cigarro']=='No') echo 'selected'; ?>>No</option>
                        </select></td>
                        </select></td>
                             <td><select value="<?php echo $mostrar[''] ?>" name="Frecuencia-c" class="txt" style="color: black">
                            <option value="0%" <?php if($mostrar['Frecuencia-c']=='0%') echo 'selected'; ?>>Nunca</option>
                            <option value="25%" <?php if($mostrar['Frecuencia-c']=='25%') echo 'selected'; ?>>Casi Nunca</option>
                            <option value="50%" <?php if($mostrar['Frecuencia-c']=='50%') echo 'selected'; ?>>En Ocasiones</option>
                            <option value="75%" <?php if($mostrar['Frecuencia-c']=='75%') echo 'selected'; ?>>Frecuentemente</option>
                            <option value="100%" <?php if($mostrar['Frecuencia-c']=='100%') echo 'selected'; ?>>Todos los días</option>
                        </select></td>
                            <td> <input value="<?php echo $mostrar['Cantidad-c']; ?>" class=" txt" type="text" name="cantidad-ciga" placeholder="Cantidad x semana" required /></td>
                        </tr>
                        <tr>
                            <td><label>Consumo de alcohol</label></td>
                            <td><label>Frecuencia</label></td>
                            <td><label>Cantidad Alcohol</label></td>
                        </tr>
                        <tr>
                            <td><select value="<?php echo $mostrar[''] ?>" name="Alcohol" class="txt" style="color: black">
                            <option value="Si" <?php if($mostrar['Alcohol']=='Si') echo 'selected'; ?>>Si</option>
                            <option value="No" <?php if($mostrar['Alcohol']=='No') echo 'selected'; ?>>No</option>
                        </select></td>
                        <td><select value="<?php echo $mostrar[''] ?>" name="Frecuencia-a" class="txt" style="color: black">
                            <option value="0%" <?php if($mostrar['Frecuencia-a']=='0%') echo 'selected'; ?>>Nunca</option>
                            <option value="25%" <?php if($mostrar['Frecuencia-a']=='25%') echo 'selected'; ?>>Casi Nunca</option>
                            <option value="50%" <?php if($mostrar['Frecuencia-a']=='50%') echo 'selected'; ?>>En Ocasiones</option>
                            <option value="75%" <?php if($mostrar['Frecuencia-a']=='75%') echo 'selected'; ?>>Frecuentemente</option>
                            <option value="100%" <?php if($mostrar['Frecuencia-a']=='100%') echo 'selected'; ?>>Todos los días</option>
                        </select></td>
                            <td><input value="<?php echo $mostrar['Cantidad-a']; ?>" class=" txt" type="text" name="cantidad-alco" placeholder="Cantidad x semana" required /></td>
                        </tr>
                         <tr>
                            <td><label>Consumo de drogas</label></td>
                            <td><label>Frecuencia</label></td>
                            <td><label>Cantidad Drogas</label></td>
                        </tr>
                        <tr>
                             <td><select value="<?php echo $mostrar[''] ?>" name="Drogas" class="txt" style="color: black">
                            <option value="Si" <?php if($mostrar['Drogas']=='Si') echo 'selected'; ?>>Si</option>
                            <option value="No" <?php if($mostrar['Drogas']=='No') echo 'selected'; ?>>No</option>
                        </select></td>
                              <td><select value="<?php echo $mostrar[''] ?>" name="Frecuencia-d" class="txt" style="color: black">
                            <option value="0%" <?php if($mostrar['Frecuencia-d']=='0%') echo 'selected'; ?>>Nunca</option>
                            <option value="25%" <?php if($mostrar['Frecuencia-d']=='25%') echo 'selected'; ?>>Casi Nunca</option>
                            <option value="50%" <?php if($mostrar['Frecuencia-d']=='50%') echo 'selected'; ?>>En Ocasiones</option>
                            <option value="75%" <?php if($mostrar['Frecuencia-d']=='75%') echo 'selected'; ?>>Frecuentemente</option>
                            <option value="100%" <?php if($mostrar['Frecuencia-d']=='100%') echo 'selected'; ?>>Todos los días</option>
                        </select></td>
                            <td><input value="<?php echo $mostrar['Cantidad-d']; ?>" class=" txt" type="text" name="cantidad-dro" placeholder="Cantidad x semana" required></td>
                        </tr>
                    </table>                
                </section>
<!-----------------------------------------------------------------------------------------------------------------> 
                     <h2 class="let" style="margin: 20px;">Medicones Básicas</h2>
                    <div class="linea"></div>
                    <section class="personal">
                    <table class="tab-datos">
                        <tr>
                            <td><label>Estatura</label></td>
                            <td><label>Peso</label></td>
                            <td><label>Factor de Actividad</label></td>
                        </tr>
                        <tr>
                            <td><input value="<?php echo $mostrar['Estatura']; ?>" class=" txt" type="text" name="Estatura" placeholder="Mts" required /></td>
                            <td><input value="<?php echo $mostrar['Peso']; ?>" class="txt" type="text" name="peso" placeholder="Kg" required /></td>
                            <td><input value="<?php echo $mostrar['Factor-acti']; ?>" class="txt" type="text" name="fac-act" placeholder="Actividad x día" required></td>
                        </tr>
                        <tr>
                            <td><label>Grasa total</label></td>
                            <td><label>Grasa sección superior</label></td>
                            <td><label>Grasa sección inferior</label></td>
                            
                        </tr>
                        <tr>
                            <td><input value="<?php echo $mostrar['Grasa-tot']; ?>" class="txt" type="text" name="grasa-tot" placeholder="Kg" required></td>
                            <td><input value="<?php echo $mostrar['Grasa-sup']; ?>" class="txt" type="text" name="grasa-sup" placeholder="%" required></td>
                            <td><input value="<?php echo $mostrar['Grasa-inf']; ?>" class="txt" type="text" name="grasa-inf" placeholder="%" required></td>
                            
                        </tr>
                        <tr>
                            <td><label>Grasa viseral</label></td>
                            <td><label>Masa libre de grasa</label></td>
                            <td><label>Masa muscular</label></td>
                        </tr>
                        <tr>
                            <td><input value="<?php echo $mostrar['Grasa-vis']; ?>" class="txt" type="text" name="grasa-vis" placeholder="%" required></td>
                            <td><input value="<?php echo $mostrar['Libre-grasa']; ?>" class="txt" type="text" name="libre-grasa" placeholder="Kg" required></td>
                            <td><input value="<?php echo $mostrar['Masa-mus']; ?>" class="txt" type="text" name="masa-mus" placeholder="Kg" required></td>
                        </tr>
                        <tr>
                            <td><label>Peso oseo </label></td>
                            <td><label>Agua corporal</label></td>
                            <td><label>Edad metabolica</label></td>
                        </tr>
                        <tr>
                            <td><input value="<?php echo $mostrar['Peso-os']; ?>" class="txt" type="text" name="peso-os" placeholder="Kg" required></td>
                            <td><input value="<?php echo $mostrar['Agua-corp']; ?>" class="txt" type="text" name="agua-corp" placeholder="Kg" required></td>
                            <td><input value="<?php echo $mostrar['Edad-met']; ?>" class="txt" type="number" name="edad-met" placeholder="Edad" required></td>
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


