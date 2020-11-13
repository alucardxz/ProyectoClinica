<?php
require_once"crud.php";
$obj=new Crud();
$datos=$obj->mostrarDatos();
$tabla='<table class="table table-dark">
			<thead>
				<tr clas="font-weight-bold">
				<td>Id</td>
				<td>Terapia</td>
				<td>Beneficios</td>
				<td>Descripción</td>
				<td>Duración</td>
				<td>Precio</td>
				</tr>
				</thead>
				<tbody>';
$datosTabla="";

foreach ($datos as $key => $value) {
	$datosTabla=$datosTabla.'<tr>
							<td>'.$value['Terapia'].'</td>
							<td>'.$value'Beneficios'].'</td>
							<td>'.$value['Descripción'].'</td>
							<td>'.$value['Duración'].'</td>
							<td>'.$value['Precio'].'</td>
							<td>
								<span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['Id'].')" data-toggle="modal" data-target="#actualizarModal">
								<i class="fas fa-trash-alt"></li>
								</span>
							</td>
							<td>
								<span class="btn btn-danger btn-sm" onclick="elinimarDatos('.$value['Id'].')">
								<li class="fas fa-trash-alt"></li>
								</span>
							</td>
							</tr>';
}
echo $tabla.$datosTabla.'</tbody></table>';
?>