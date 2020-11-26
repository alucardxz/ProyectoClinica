<?php 


require 'conexion.php';

$IdAlimento=$_GET['IdAlimento'];
$sql = "SELECT * FROM alimentos WHERE  IdAlimento='$IdAlimento'";
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
               <a href="#">Regístrate</a>
           </nav>
       </div>
   </header>
   <center>
    <form name="alimentos" method="post" class="contenido" action="updatealimetos.php">
        <div class="borde-redondeado">
            <h2 class="let" style="margin: 20px;">Agregar Alimento</h2>
            <div class="linea"></div>
            <section class="personal">
                <table class="tab-datos">
                    <tr>
                        <td><label>Alimento</label></td>
                        <td><label>Categoria</label></td>
                        <td><label>Cantidad Sugerida</label></td>
                    </tr>
                    <tr>
                        <input value="<?php echo $mostrar['IdAlimento']; ?>" type="hidden" name="IdAlimento" />
                        <td><input value="<?php echo $mostrar['Alimento']?>" class=" txt" type="text" name="Alimento" placeholder="Alimento" required /></td>
                        <td><select value="<?php echo $mostrar['Categoria'] ?>" name="Categoria" class="txt" style="color: black">
                            <option value="Verduras" <?php if($mostrar['Categoria']=='Verduras') echo 'selected'; ?>>Verduras</option>
                            <option value="Frutas" <?php if($mostrar['Categoria']=='Frutas') echo 'selected'; ?>>Frutas</option>
                            <option value="Leguminosas" <?php if($mostrar['Categoria']=='Leguminosas') echo 'selected'; ?>>Leguminosas</option>
                            <option value="Cereales y Tubérculos" <?php if($mostrar['Categoria']=='Cereales y Tubérculos') echo 'selected'; ?>>Cereales y Tubérculos</option>
                            <option value="Alimentos de Orígen animal" <?php if($mostrar['Categoria']=='Alimentos de Orígen animal') echo 'selected'; ?>>Alimentos de Orígen animal</option>
                            <option value="Leche" <?php if($mostrar['Categoria']=='Leche') echo 'selected'; ?>>Leche</option>
                            <option value="Aceite y grasa" <?php if($mostrar['Categoria']=='Aceite y grasa') echo 'selected'; ?>>Aceite y grasa</option>
                            <option value="Azúcar" <?php if($mostrar['Categoria']=='Azúcar') echo 'selected'; ?>>Azúcar</option>
                            <option value="Etanol" <?php if($mostrar['Categoria']=='Etanol') echo 'selected'; ?>>Etanol</option>
                            <option value="Condimentos" <?php if($mostrar['Categoria']=='Condimentos') echo 'selected'; ?>>Condimentos</option>
                            <option value="Liquidos" <?php if($mostrar['Categoria']=='Liquidos') echo 'selected'; ?>>Liquidos</option>
                        </select></td>
                        <td><input value="<?php echo $mostrar['Cantidad']?>" class="txt" type="text" name="Cantidad" placeholder="Cantidad" required /></td>
                    </tr>
                    <tr>
                        <td><label>Unidad</label></td>
                        <td><label>Peso bruto redondeado</label></td>
                        <td><label>Peso neto</label></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['Unidad']?>" class=" txt" type="text" name="Unidad" placeholder="Unidad" required /></td>
                        <td><input value="<?php echo $mostrar['Pesobruto']?>" class="txt" type="number" step="any" name="Pesobruto" placeholder="Gms" required /></td>
                        <td> <input value="<?php echo $mostrar['Pesoneto']?>" class=" txt" type="number" step="any" name="Pesoneto" placeholder="Gms" required /></td>
                    </tr>
                    <tr>
                        <td><label>Energía</label></td>
                        <td><label>Proteína</label></td>
                        <td><label>Lípidos</label></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['Energia']?>" class=" txt" type="number" step="any" name="Energia" placeholder="Kcal" required /></td>
                        <td><input value="<?php echo $mostrar['Proteina']?>" class=" txt" type="number" step="any" name="Proteina" placeholder="Gms" required /></td>
                        <td><input value="<?php echo $mostrar['Lipidos']?>" class=" txt" type="number" step="any" name="Lipidos" placeholder="Gms" required /></td>
                    </tr>
                    <tr>
                        <td><label>Hidratos de carbono</label></td>
                        <td><label>Fibra</label></td>
                        <td><label>Vitamina A</label></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['Hidratos']?>" class=" txt" type="number" step="any" name="Hidratos" placeholder="Gms" required /></td>
                        <td><input value="<?php echo $mostrar['Fibra']?>" class=" txt" type="number" step="any" name="Fibra" placeholder="Gms" required /></td>
                        <td> <input value="<?php echo $mostrar['VitaminaA']?>" class=" txt" type="number" step="any" name="VitaminaA" placeholder="Gms RE" required /></td>
                    </tr>
                    <tr>
                        <td><label>Acido Ascórbico</label></td>
                        <td><label>Acido Fólico</label></td>
                        <td><label>Hierro</label></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['AcidoAs']?>" class=" txt" type="text" name="AcidoAs" placeholder="Mg" required /></td>
                        <td><input value="<?php echo $mostrar['AcidoFo']?>" class=" txt" type="number" step="any" name="AcidoFo" placeholder="Mg" required /></td>
                        <td><input value="<?php echo $mostrar['Hierro']?>" class=" txt" type="number" step="any" name="Hierro" placeholder="Mg" required /></td>
                    </tr>
                    <tr>
                        <td><label>Potasio</label></td>
                        <td><label>Agua</label></td>
                        <td><label>Índice Glucémico</label></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['Potasio']?>" class=" txt" type="number" step="any" name="Potasio" placeholder="Mg" required /></td>
                        <td><input value="<?php echo $mostrar['Agua']?>" class=" txt" type="number" step="any" name="Agua" placeholder="Ml" required /></td>
                        <td><input value="<?php echo $mostrar['Indice']?>" class=" txt" type="text" name="Indice" placeholder="Indice" required /></td>
                    </tr>
                    <tr>
                        <td><label>Carga Glucémico</label></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input value="<?php echo $mostrar['Carga']?>" class=" txt" type="text" name="Carga" placeholder="Carga" required /></td>
                        <td></td>
                        <td></td>
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
</body>
</html>

