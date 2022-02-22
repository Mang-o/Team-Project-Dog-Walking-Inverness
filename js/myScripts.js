//Adds click event to hamburger icon - Runs function navToggle()
var hamburger = document.getElementsByClassName('hamburger');
if(hamburger){
hamburger[0].addEventListener("click", navToggle);
}

function navToggle() {
	var nav = document.querySelector('.navContent');
	nav.classList.toggle("navContentShow");
}


var password = document.getElementById("password")
  , confirm_password = document.getElementById("Cpassword");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


      
