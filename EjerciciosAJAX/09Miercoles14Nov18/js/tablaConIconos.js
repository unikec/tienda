var READY_STATE_COMPLETE = 4;
var destino= document.getElementById('tablita');
var peticion_http = null;

function cargaContenido(url, metodo, funcion) {
  peticion_http = inicializa_xhr();

  if (peticion_http) {
    /* var Ndni = document.getElementById('dniIT').value;
    query = '?dni=' + Ndni;
    peticion_http.onreadystatechange = funcion;
    alert(query);
    peticion_http.open(metodo, url + query, true);
    peticion_http.send(null);*/
    peticion_http.onreadystatechange = funcion;
    peticion_http.open(metodo, url, true);
    peticion_http.send(null);
  }
}

function inicializa_xhr() {
  if (window.XMLHttpRequest) {
    return new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    return new ActiveXObject("Microsoft.XMLHTTP");
  }
}

function muestraContenido() {
  if (peticion_http.readyState == READY_STATE_COMPLETE) {
    if (peticion_http.status == 200) {
       alert(peticion_http.responseText);
     // var devolution= (peticion_http.responseText).split(",");
     var devolution= peticion_http.responseText;

      if(devolution==""){
        destino.innerHTML=("No existe ningun registro con el DNI introducido")
      }else{
        destino.innerHTML=devolution;
        /*   destino.innerHTML=("<table border='1'><th> DNI</th><th> Nombre </th><th> Telefono </th><th> Localidad </th><th> Fecha nacimiento </th>"+
           "<tr><td>"+devolution[0]+"</td><td>"+devolution[1]+"</td><td>"+devolution[2]+"</td><td>" + devolution[3] + "</td><td>"+devolution[4]+"</td></tr></table>");*/
      }
    }
  }
}

function descargaArchivo() {
   // var destino= document.getElementById('tablita');
    destino.innerHTML=cargaContenido("./tablaConIconos.php", "GET", muestraContenido);
}

function entregaDNI(){
  peticion_http = inicializa_xhr();

  if (peticion_http) {
     var Ndni = document.getElementById('dniIT').value;
    query = '?dni=' + Ndni;
    peticion_http.onreadystatechange = funcion;
  //  alert(query);
    peticion_http.open(metodo, url + query, true);
    peticion_http.send(null);
  }

}