function validar(){
	var pass,conpass;

	pass = document.getElementById("pass").value;
	conpass = document.getElementById("conpass").value;
	if(pass!=conpass){
		alert("Las contraseñas no coinciden");
		return false;
	}
}