function mostrar(){
	$.ajax({
		type:"POST",
		url:"procesos/mostarDatos.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});

}

function obtenerDatos(id){

}

function eliminarDatos(id){
	swal({
		title:"¿Esta seguro de eliminar este registro?",
		text:"!Una vez eliminado no podra recuperarse¡",
		icon:"warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete)=>{
		if (willDelete) {

		}
	});
}