var p1 = document.getElementById("clave").value;
var p2 = document.getElementById("repetir_clave").value;

var espacios = false;
var cont = 0;
     
//Que no haya espacios en blanco
while (!espacios && (cont < p1.length)) {
      if (p1.charAt(cont) == " ")
        espacios = true;
      cont++;
    }
     
    if (espacios) {
      alert ("La contraseña no puede contener espacios en blanco");
      return false;
    }

//Que no nos hayan dejado un campo vacío
    if (p1.length == 0 || p2.length == 0) {
      alert("Los campos de la password no pueden quedar vacios");
      return false;
    }

//Que ambas contraseñas coincidan
    if (p1 != p2) {
      alert("Las passwords deben de coincidir");
      return false;
    } else {
      alert("Todo esta correcto");
      return true; 
    }



    
/*var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;*/