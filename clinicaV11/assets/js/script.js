document.getElementById('registrate').addEventListener("click",registrar);
document.getElementById('iniciarS').addEventListener("click",iniciar);
window.addEventListener("resize",anchopag);
//variables
var  contenedor_LogReg = document.querySelector(".contenedorLogReg");
var formulario_login = document.querySelector(".formulariologin");
var formulario_registro = document.querySelector(".formularioregistro");
var caja_login = document.querySelector(".cajalogin");
var caja_Regis = document.querySelector(".cajaRegis");

function anchopag(){
	if (window.innerWidth>850) {
		caja_login.style.display="block";
		caja_Regis.style.display="block";
	}else{
		caja_Regis.style.display="block";
		caja_Regis.style.opacity="1";
		caja_login.style.display="none";
		formulario_login.style.display="block";
		formulario_registro.style.display="none"
		contenedor_LogReg.style.left="0px;"
	}
}
anchopag();

function iniciar() {
	if (window.innerWidth>850) {
	formulario_registro.style.display = "none";
	contenedor_LogReg.style.left="10px";
	formulario_login.style.display="block";
	caja_Regis.style.opacity="1";
	caja_login.style.opacity="0";
	}else{
	formulario_registro.style.display = "none";
	contenedor_LogReg.style.left="0px";
	formulario_login.style.display="block";
	caja_Regis.style.display="block";
	caja_login.style.opacity="none";
	}
}	

function registrar() {
	if (window.innerWidth>850){
	formulario_registro.style.display = "block";
	contenedor_LogReg.style.left="410px";
	formulario_login.style.display="none";
	caja_Regis.style.opacity="0";
	caja_login.style.opacity="1";
}else{
	formulario_registro.style.display = "block";
	contenedor_LogReg.style.left="0px";
	formulario_login.style.display="block";
	caja_Regis.style.opacity="block";
	caja_login.style.display="none";
	}
}