/*var READY_STATE_UNINITIALIZED=0; 
var READY_STATE_LOADING=1; 
var READY_STATE_LOADED=2;
var READY_STATE_INTERACTIVE=3; */
var READY_STATE_COMPLETE = 4;

var peticion_http = null;

function cargaContenido(url, metodo, funcion) {
  peticion_http = inicializa_xhr();

  if (peticion_http) {
    var Ncolumnas = document.getElementById('col').value;
    var Nfilas = document.getElementById('fil').value;
    query = '?filas=' + Nfilas + '&columnas=' + Ncolumnas;
    peticion_http.onreadystatechange = funcion;
    alert(query);
    peticion_http.open(metodo, url + query, true);
    // peticion_http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
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
      // alert(peticion_http.responseText);
      document.write(peticion_http.responseText);

    }
  }
}

function descargaArchivo() {
  cargaContenido("./tabla.php", "GET", muestraContenido);
}