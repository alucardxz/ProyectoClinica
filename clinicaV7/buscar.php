<?php 
	$conexion=new mysqli('localhost','root','','clinica');
if (!$conexion) {
	echo "Error al conectar a la base de datos";
}
$salida="";
$query ="SELECT * FROM pacientes ORDER BY IdPaciente";
if (isset($_POST['consulta'])) {
	$q=$mysqli->real_escape_string($_POST'[consulta]');
	$query="SELECT IdPaciente, Nombre, email FROM pacientes WHERE Nombre LIKE '%".$q."%' OR email LIKE '%".$q."%'";
}
$resultado= $mysqli->query($query);

if ($resultado->num_rows>0) {
	$salida.= "<table class='tabla_datos'>
				<thead>
				<tr>
				<td>IdPaciente</td>
				<td>Nombre</td>
				<td>Direccion</td>
				<td>Ciudad</td>
				<td>email</td>
				<td>Estatura</td>
				<td>Peso</td>
				</tr>
				</thead>
				<tbody>";
				while ($fila=$resultado->fetch_assoc()) {
					$salida.="<tr>
					<td>".$fila['IdPaciente']."</td>
					<td>".$fila['Nombre']."</td>
					<td>".$fila['Direccion']."</td>
					<td>".$fila['Ciudad']."</td>
					<td>".$fila['email']."</td>
					<td>".$fila['Estatura']."</td>
					<td>".$fila['Peso']."</td>
					</tr>";
					# code...
				}
		$salida.="</tbody></table>";

}else{
	$salida.="No hay datos :("

}
echo $salida;
$mysqli->close();

?>