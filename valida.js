document.addEventListener("DOMContentLoaded", function(event) {
  //Validate telephone with empty selected type of number
  $( '#tel_principal' ).keyup(function(){ //when a user types in input box
    var scream = this.value;
    if ( scream.charAt( 0 ) == '0' ) {
		$( '#tel_principal' ).val("");
      sweetAlert("Recuerda...", "Recuerda no escribir 044 o 045 o 01", "warning");
    }
  });
  //Validate 2nd telephone with empty selected type of number
  $( '#tel_sec1' ).keyup(function(){ //when a user types in input box
    var scream = this.value;
    if ( scream.charAt( 0 ) == '0' ) {
		$( '#tel_sec1' ).val("")
      sweetAlert("Para celular", "Recuerda no escribir 044 o 045 o 01", "warning");
    }
  });
  //Validate 3rd telephone with empty selected type of number
  $( '#tel_sec2' ).keyup(function(){ //when a user types in input box
    var scream = this.value;
    if ( scream.charAt( 0 ) == '0' ) {
		$( '#tel_sec2' ).val("")
      sweetAlert("Para celular", "Recuerda no escribir 044 o 045", "warning");
    }
  });

});

function Refresh_tel_principal_op(tipo){
  if(document.getElementById('tel_principal_op').value=="OFICINA"){
    //document.getElementById("ext1").style.visibility = "visible";
    $("#type1").removeClass("col-xs-5 col-sm-3 col-md-3 col-lg-3");
    $("#type1").addClass("col-xs-4 col-sm-3 col-md-3 col-lg-3");
    $("#extension1").removeClass("hidden-class");
    $("#extension1").addClass("show-class");
    $("#first_tel").removeClass("col-xs-7 col-sm-9 col-md-9 col-lg-9");
    $("#first_tel").addClass("col-xs-5 col-sm-7 col-md-7 col-lg-7");

    //We remove the input addon for 044 or 045 if its not cellphone
    $("#cel_1_input").removeClass("input-group");
    $("#cel_1_addon").addClass("hidden");
    $("#cel_1_addon").removeClass("shown");

    //We validate against people writing 0
    $( '#tel_principal' ).keyup(function(){ //when a user types in input box
      var scream = this.value;
      if ( scream.charAt( 0 ) == '0' ) {
        sweetAlert("Recuerda...", "No escribir 044 o 045 o 01", "warning");
      }
    });

  }else if(document.getElementById('tel_principal_op').value=="CELULAR"){
    $("#type1").removeClass("col-xs-4 col-sm-3 col-md-3 col-lg-3");
    $("#type1").addClass("col-xs-5 col-sm-3 col-md-3 col-lg-3");
    $("#extension1").removeClass("show-class");
    $("#extension1").addClass("hidden-class");
    $("#first_tel").addClass("col-xs-7 col-sm-9 col-md-9 col-lg-9");
    $("#first_tel").removeClass("col-xs-5 col-sm-7 col-md-7 col-lg-7");

    //Validate for input addon
    $("#cel_1_input").addClass("input-group");
    $("#cel_1_addon").removeClass("hidden");
    $("#cel_1_addon").addClass("shown");

    //We validate against people writing 0
    $( '#tel_principal' ).keyup(function(){ //when a user types in input box
      var scream = this.value;
      if ( scream.charAt( 0 ) == '0' ) {
        sweetAlert("Recuerda...", "No escribir 044 o 045 o 01", "warning");
      }
    });
    document.getElementById('ext1').value=""
  }else{
    //document.getElementById("ext1").style.visibility = "hidden";
    $("#type1").removeClass("col-xs-4 col-sm-3 col-md-3 col-lg-3");
    $("#type1").addClass("col-xs-5 col-sm-3 col-md-3 col-lg-3");
    $("#extension1").removeClass("show-class");
    $("#extension1").addClass("hidden-class");
    $("#first_tel").addClass("col-xs-7 col-sm-9 col-md-9 col-lg-9");
    $("#first_tel").removeClass("col-xs-5 col-sm-7 col-md-7 col-lg-7");

    //We remove the 044 or 045 if its not cellphone
    $("#cel_1_input").removeClass("input-group");
    $("#cel_1_addon").addClass("hidden");
    $("#cel_1_addon").removeClass("shown");

    //We validate against people writing 0
    $( '#tel_principal' ).keyup(function(){ //when a user types in input box
      var scream = this.value;
      if ( scream.charAt( 0 ) == '0' ) {
        sweetAlert("Recuerda...", "No escribir 044 o 045 o 01", "warning");
      }
    });

    document.getElementById('ext1').value=""
  }
}

function Refresh_tel_sec2_op(tipo){
  if(document.getElementById('tel_sec1_op').value=="OFICINA"){
    //document.getElementById("ext2").style.visibility = "visible";
    $("#type2").removeClass("col-xs-5 col-sm-3 col-md-3 col-lg-3");
    $("#type2").addClass("col-xs-4 col-sm-3 col-md-3 col-lg-3");
    $("#extension2").removeClass("hidden-class");
    $("#extension2").addClass("show-class");
    $("#second_tel").removeClass("col-xs-7 col-sm-9 col-md-9 col-lg-9");
    $("#second_tel").addClass("col-xs-5 col-sm-7 col-md-7 col-lg-7");
    //We remove the input addon for 044 or 045 if its not cellphone
    $("#cel_2_input").removeClass("input-group");
    $("#cel_2_addon").addClass("hidden");
    $("#cel_2_addon").removeClass("shown");


  }else if(document.getElementById('tel_sec1_op').value=="CELULAR"){
    $("#type2").removeClass("col-xs-4 col-sm-3 col-md-3 col-lg-3");
    $("#type2").addClass("col-xs-5 col-sm-3 col-md-3 col-lg-3");
    $("#extension2").removeClass("show-class");
    $("#extension2").addClass("hidden-class");
    $("#second_tel").addClass("col-xs-7 col-sm-9 col-md-9 col-lg-9");
    $("#second_tel").removeClass("col-xs-5 col-sm-7 col-md-7 col-lg-7");

    //Validate for input addon
    $("#cel_2_input").addClass("input-group");
    $("#cel_2_addon").removeClass("hidden");
    $("#cel_2_addon").addClass("shown");

    //We validate against people writing 0
    $( '#tel_sec1' ).keyup(function(){ //when a user types in input box
      var scream = this.value;
      if ( scream.charAt( 0 ) == '0' ) {
        sweetAlert("Para celular", "Recuerda no escribir 044 o 045", "warning");
      }
    });

    document.getElementById('ext2').value=""

  }else{
    //document.getElementById("ext2").style.visibility = "hidden";
    $("#type2").removeClass("col-xs-4 col-sm-3 col-md-3 col-lg-3");
    $("#type2").addClass("col-xs-5 col-sm-3 col-md-3 col-lg-3");
    $("#extension2").removeClass("show-class");
    $("#extension2").addClass("hidden-class");
    $("#second_tel").addClass("col-xs-7 col-sm-9 col-md-9 col-lg-9");
    $("#second_tel").removeClass("col-xs-5 col-sm-7 col-md-7 col-lg-7");

    //We remove the 044 or 045 if its not cellphone
    $("#cel_2_input").removeClass("input-group");
    $("#cel_2_addon").addClass("hidden");
    $("#cel_2_addon").removeClass("shown");

    document.getElementById('ext2').value=""
  }
}

function Refresh_tel_sec3_op(){
  if(document.getElementById('tel_sec2_op').value=="OFICINA") {
    //document.getElementById("ext3").style.visibility = "visible";
    $("#type3").removeClass("col-xs-5 col-sm-3 col-md-3 col-lg-3");
    $("#type3").addClass("col-xs-4 col-sm-3 col-md-3 col-lg-3");
    $("#extension3").removeClass("hidden-class");
    $("#extension3").addClass("show-class");
    $("#third_tel").removeClass("col-xs-7 col-sm-9 col-md-9 col-lg-9");
    $("#third_tel").addClass("col-xs-5 col-sm-7 col-md-7 col-lg-7");

    //We remove the input addon for 044 or 045 if its not cellphone
    $("#cel_3_input").removeClass("input-group");
    $("#cel_3_addon").addClass("hidden");
    $("#cel_3_addon").removeClass("shown");

  }else if(document.getElementById('tel_sec2_op').value=="CELULAR"){
    $("#type3").removeClass("col-xs-4 col-sm-3 col-md-3 col-lg-3");
    $("#type3").addClass("col-xs-5 col-sm-3 col-md-3 col-lg-3");
    $("#extension3").removeClass("show-class");
    $("#extension3").addClass("hidden-class");
    $("#third_tel").addClass("col-xs-7 col-sm-9 col-md-9 col-lg-9");
    $("#third_tel").removeClass("col-xs-5 col-sm-7 col-md-7 col-lg-7");

    //Validate for input addon
    $("#cel_3_input").addClass("input-group");
    $("#cel_3_addon").removeClass("hidden");
    $("#cel_3_addon").addClass("shown");

    //We validate against people writing 0
    $( '#tel_sec2' ).keyup(function(){ //when a user types in input box
      var scream = this.value;
      if ( scream.charAt( 0 ) == '0' ) {
        sweetAlert("Para celular", "Recuerda no escribir 044 o 045", "warning");
      }
    });

    document.getElementById('ext3').value=""

  }else{
    //document.getElementById("ext3").style.visibility = "hidden";
    $("#type3").removeClass("col-xs-4 col-sm-3 col-md-3 col-lg-3");
    $("#type3").addClass("col-xs-5 col-sm-3 col-md-3 col-lg-3");
    $("#extension3").removeClass("show-class");
    $("#extension3").addClass("hidden-class");
    $("#third_tel").addClass("col-xs-7 col-sm-9 col-md-9 col-lg-9");
    $("#third_tel").removeClass("col-xs-5 col-sm-7 col-md-7 col-lg-7");

    //We remove the 044 or 045 if its not cellphone
    $("#cel_3_input").removeClass("input-group");
    $("#cel_3_addon").addClass("hidden");
    $("#cel_3_addon").removeClass("shown");

    document.getElementById('ext3').value=""
  }
}

function SetMaxLength (combo) {
  var input = document.getElementById (combo);
  if(document.getElementById('estado').value=="OTRO PAIS"){
    input.maxLength = 15;
    document.forms.formol.long.value=15;
    document.forms.formol.varPais.value=1;

  }else{
    input.maxLength = 10;
    document.forms.formol.long.value=10;
    document.forms.formol.varPais.value=0;
  }
}

function alpha(e) {
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " abcdefghijklmn?opqrstuvwxyz ";
  especiales = [209,46,241,37,38];

  tecla_especial = false
  for(var i in especiales) {
    if(key == especiales[i]) {
      tecla_especial = true;
      break;
    }
  }
  if(letras.indexOf(tecla) == -1 && !tecla_especial) return false;
}

function alphaskype(e) {
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " abcdefghijklmn?opqrstuvwxyz1234567890_-@";
  especiales = [46,209,241,37,38];

  tecla_especial = false
  for(var i in especiales) {
    if(key == especiales[i]) {
      tecla_especial = true;
      break;
    }
  }
  if(letras.indexOf(tecla) == -1 && !tecla_especial) return false;
}

function numeric(e) {
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = "0123456789";
  especiales = [];

  tecla_especial = false
  for(var i in especiales) {
    if(key == especiales[i]) {
      tecla_especial = true;
      break;
    }
  }
  if(letras.indexOf(tecla) == -1 && !tecla_especial)  return false;
}

//Validaciones Formulario
function submitForm()
{

  if(document.forms.formol.onsubmit && !document.forms.formol.onsubmit()){
    return;
  }

  if(document.forms.formol.nombre_suc.value=="")	{
		document.forms.formol.nombre_suc.focus();
		sweetAlert("Ciudad de atención...", "Recuerda seleccionar donde quieres ser atendido", "error");
		return false;
	}

  if(document.forms.formol.estado.value=="") {
    document.forms.formol.estado.focus();
    sweetAlert("Tu estado...", "Recuerda seleccionar un Estado", "error");
    return false;
  }

	if(document.forms.formol.nombre.value=="")	{
		document.forms.formol.nombre.focus();
		sweetAlert("Olvidaste tu nombre...", "Por favor escribe tu nombre", "error");
		return false;
	}

	if(document.forms.formol.paterno.value=="") {
		document.forms.formol.paterno.focus();
		sweetAlert("Olvidaste tu apellido paterno...", "Por favor escribe tu apellido paterno", "error");
		return false;
	}
	if(document.forms.formol.edad.value=="") {
		document.forms.formol.edad.focus();
		sweetAlert("Olvidaste tu edad...", "Por favor selecciona tu edad", "error");
		return false;
	}

  if((document.forms.formol.email.value=="") && (document.forms.formol.noemail.checked == false)) {
    document.forms.formol.email.focus();
    sweetAlert("Recuerda...", "Ingresa tu correo electrónico.", "error");
    return false;
  }

  var ck_email = /^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,4})$/;

  if ((document.forms.formol.email.value.search(ck_email)==-1) && (document.forms.formol.noemail.checked == false)){
    document.forms.formol.email.focus();
    sweetAlert("Oops...", "El correo electrónico no es válido.", "error");
    return false;
  }

	var long = document.forms.formol.long.value;
	if(document.forms.formol.tel_principal_op.value=="") {
		document.forms.formol.tel_principal_op.focus();
		sweetAlert("Selecciona el tipo de teléfono...", "Por favor selecciona qué tipo de telefono utilizas", "error");
		return false;
	}

	if(document.forms.formol.tel_principal.value=="") {
		document.forms.formol.tel_principal.focus();
		sweetAlert("Olvidaste tu número telefónico...", "Por favor escribe tu teléfono principal", "error");
		return false;
	}

	if(document.forms.formol.tel_sec1.value != ""){
		if(document.forms.formol.tel_sec1.value.length < 10){
			document.forms.formol.tel_sec1.focus();
			sweetAlert("Recuerda...", "Tu teléfono Secundario debe incluir lada y ser al menos 10 digitos.", "error");
		return false;
		}
	}

	if(document.forms.formol.tel_sec2.value != ""){
		if(document.forms.formol.tel_sec2.value.length < 10){
			document.forms.formol.tel_sec2.focus();
			sweetAlert("Recuerda...", "Tu eléfono debe incluir lada y ser al menos 10 digitos.", "error");
		return false;
		}
	}

   if(document.forms.formol.medio.value=="")	{
		document.forms.formol.medio.focus();
		sweetAlert("Medio por donde nos conociste...", "Recuerda seleccionar el medio por el cual nos descubriste", "error");
		return false;
	}

	if(document.forms.formol.solicitud.value=="")	{
		document.forms.formol.solicitud.focus();
		sweetAlert("Olvidaste el motivo de contacto...", "Recuerda seleccionar el motivo de contacto", "error");
		return false;
	}

	if(document.forms.formol.acepto.checked== false) {
		document.forms.formol.acepto.focus();
		//alert("Debe leer los Terminos de Privacidad.");
		sweetAlert("Olvidaste los términos y condiciones...", "Debes aceptar los términos y condiciones", "error");
		return false;
	}
		document.forms.formol.boton.disabled 				= true;
    document.forms.formol.boton.value 						= 'Por Favor Espere...';
		document.forms.formol.boton.style.background	='blue';
		document.forms.formol.boton.style.cursor			='not-allowed';
    document.forms.formol.submit();
}
