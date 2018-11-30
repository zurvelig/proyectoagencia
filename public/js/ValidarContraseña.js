var p1 = document.getElementById("clave").value;
var p2 = document.getElementById("repetir_clave").value;

//ahora validamos que no haya espacios en blanco
var espacios = false;
var cont = 0;

while(!espacios && (cont < p1.length)){
	if (p1.charAt(cont) == " ") {
		espacios = true;
		cont++;
	}
}

if (espacios) {
	alert ("La contraseña no puede contener espacios en blanco");
	return false;
}


//ahora validamos que no nos haya dejado un campo vacío
if (p1.length == 0 || p2.length == 0) {
	alert("Las contraseñas no pueden quedar vacias")
}

//ahora validamos que coincidan las contraseñas
if (p1 != p2) {
	alert("Las contraseñas deben coincidir");
	return false;	
}else{
	alert("Todo esta correcto");
	return true;
}







/*var contraseña_usu = document.getElementById("contraseña_usu")
  , repetir_contraseña = document.getElementById("repetir_contraseña");

function validatePassword(){
  if(contraseña_usu.value != repetir_contraseña.value) {
    repetir_contraseña.setCustomValidity("Las contraseñas no coinciden");
  } else {
    repetir_contraseña.setCustomValidity('');
  }
}

contraseña_usu.onchange = validatePassword;
repetir_contraseña.onkeyup = validatePassword;*/