function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {

	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}

if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

//Función para recoger los datos del formulario y enviarlos por post
function registrar(){

  //div donde se mostrará lo resultados
  divResultado = document.getElementById('divResultado');
  //recogemos los valores de los inputs
  var codigo=document.getElementById('codigo').value;
  var nombre=document.getElementById('nombre').value;
  var direccion=document.getElementById('direccion').value;
  var provincia=document.getElementById('provincias').options[document.getElementById("provincias").selectedIndex].text;
  var poblacion=document.getElementById('selectMunicipio').options[document.getElementById("provincias").selectedIndex].text;
  var telefono=document.getElementById('telefono').value;

  //instanciamos el objetoAjax
  var ajax=objetoAjax();

  //uso del medotod POST
  ajax.open("POST", "insertar.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("codigo="+codigo+"&nombre="+nombre+"&direccion="+direccion+"&provincia="+provincia+"&poblacion="+poblacion+"&telefono="+telefono);
  window.reload();
}

function borrar(){

  //div donde se mostrará lo resultados
  divResultado = document.getElementById('divResultado');
  //recogemos los valores de los inputs
  var codigo=document.getElementById('codigoB').value;

  //instanciamos el objetoAjax
  var ajax=objetoAjax();

  //uso del medotod POST
  ajax.open("POST", "borrar.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText;

	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("codigo="+codigo);
  window.reload();
}

function selectM(){

  //select donde se mostrará lo resultados
  var selectMunicipio= document.getElementById('selectMunicipio');
  //recogemos el valor del id de la provincia
  var codigo=document.getElementById('provincias').value;

  //instanciamos el objetoAjax
   ajax=objetoAjax();

  //uso del medotod POST
  ajax.open("POST", "selectMunicipios.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		selectMunicipio.innerHTML = ajax.responseText;

	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("codigo="+codigo);

}
