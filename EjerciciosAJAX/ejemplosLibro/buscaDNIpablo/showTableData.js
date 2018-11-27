var READY_STATE_COMPLETE=4;
 
var peticion_http=null;
  
function cargaContenido(url, metodo, funcion) {
  peticion_http = inicializa_xhr();
  
  if(peticion_http) {
	txt=document.getElementById("txt").value;
	query='?info='+txt;
    peticion_http.onreadystatechange = funcion;
    peticion_http.open(metodo,url+query,true);
    peticion_http.send(null);
  }
}
 
function inicializa_xhr() {
  if(window.XMLHttpRequest) {
    return new XMLHttpRequest();
  }
  else if(window.ActiveXObject) {
    return new ActiveXObject("Microsoft.XMLHTTP");
  }
}
 
function muestraContenido() {
  if(peticion_http.readyState == READY_STATE_COMPLETE) {
    if(peticion_http.status == 200) {
      arrData=(peticion_http.responseText).split(",");
	  if(arrData=='')
		  document.write("Error al introducir datos");
	  else
		document.write("<table border='1'><th> Nombre </th><th> Telefono </th><th> Localidad </th><th> Provincia </th><th> Fecha nacimiento </th>"+
		"<tr><td>"+arrData[0]+"</td><td>"+arrData[1]+"</td><td>"+arrData[2]+"</td><td>" + arrData[3] + "</td><td>"+arrData[4]+"</td></tr></table>");
    }
  }
}
 
function descargaArchivo() {
  
  divv=document.getElementById("div1");
  divv.innerHTML=cargaContenido('http://localhost/ejerciciosDWEC/showTableData.php', "GET", muestraContenido);
}