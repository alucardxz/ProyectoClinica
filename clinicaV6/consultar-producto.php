<?php
   $mysqliConect=new mysqli('localhost','root','','clinica');
        if (!$mysqliConect) {
         	echo "Error al conectar a la base de datos";
        }else{
          echo "Hola";}
?>