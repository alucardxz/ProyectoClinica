<?php 

$where ="";

require 'conexion.php';

$IdProducto=$_GET['IdProducto'];
$sql = "SELECT * FROM productos WHERE  IdProducto='$IdProducto'";
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
        <form method="post" class="contenido" action="updateproducto.php">
                <div class="borde-redondeado">
                    <h2 class="let" style="margin: 20px;">Agregar Producto</h2>
                    <div class="linea"></div>
                <section class="personal">
                    <table class="tab-datos">
                    <tr>
                        <td><label>Nombre Producto</label></td>
                        <td><label>Descripción</label></td>
                        <td><label>Precio Cliente</label></td>
                    </tr>
                    <tr>
                         <input value="<?php echo $mostrar['IdProducto']; ?>" class="txt" type="hidden" name="IdProducto" />
                      <td><input value="<?php echo$mostrar['Producto'] ?>" class="txt" type="text" name="Producto" placeholder="Producto" required /></td>
                      <td><input value="<?php echo$mostrar['Descripcion'] ?>" class=" txt" type="text" name="Descripcion" placeholder="Descripción" required /></td>
                      <td><input value="<?php echo$mostrar['Precli'] ?>" class=" txt" type="number" name="Precli" placeholder="$" required /></td>
                    </tr>
                    <tr>
                      <td><label>Existencia</label></td>
                      <td><label>Proveedor</label></td>
                      <td><label>Tamaño</label></td>
                    </tr>
                    <tr>
                      <td><input value="<?php echo$mostrar['Existencia'] ?>" class=" txt" type="number" name="Existencia" placeholder="Existencia" required /></td>
                      <td><input value="<?php echo$mostrar['Proveedor'] ?>" class=" txt" type="text" name="Proveedor" placeholder="Proveedor" required /></td>
                      <td><input value="<?php echo$mostrar['Tamaño'] ?>" class="txt" type="text" name="Tamaño" placeholder="ml/gms" required /></td>
                    </tr>
                    <tr>
                      <td><label>Precio proveedor</label></td>
                    </tr>
                    <tr>
                      <td><input value="<?php echo$mostrar['Prepro'] ?>" class=" txt" type="number" name="Prepro" placeholder="$" required /></td>
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


