window.onload = function () {
  document.getElementById("tabla").onclick = loadDoc;
  document.getElementById("buscar").onclick = busqueda;
  document.getElementById("datosD").style.display = "none";
}


function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };

  xhttp.open("GET", "http://localhost/DWEC/tabla/vistatabla.php", true);
  xhttp.send(null);
}

function buscaalumno(id) {
  var dato = document.getElementById("cuadro").value;
  var datos;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var array = this.responseText;
      if (array.length != 0) {
        document.getElementById("datosD").style.display = "inline";
        datos = array.split(",");
        alert(datos);
        document.getElementById("dni").innerHTML = datos[0];
        document.getElementById("nombre").innerHTML = datos[1];
        document.getElementById("telefono").innerHTML = datos[2];
        document.getElementById("localidad").innerHTML = datos[3];
        document.getElementById("provincia").innerHTML = datos[4];
        document.getElementById("fecha").innerHTML = datos[5];
        document.getElementById("asignatura").innerHTML = datos[6];
        document.getElementById("nota").innerHTML = datos[7];
        document.getElementById("error").innerHTML = "";
      } else {
        var arrspan = document.getElementsByTagName("span");
        for (var i = 0; i < 7; i++) {
          document.getElementById("datosD").style.display = "none";
          arrspan[i].innerHTML = "";

        }
        datos = "No encontrado";
        document.getElementById("error").innerHTML = datos;
      }
    }

  };

  xhttp.open("GET", "http://localhost/DWEC/tabla/busquedaa.php?dato=" + id, true);
  xhttp.send(null);
}

function busqueda() {
  var dato = document.getElementById("cuadro").value;
  var datos;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var array = this.responseText;
      if (array.length != 0) {
        document.getElementById("datosD").style.display = "inline";
        datos = array.split(",");
        document.getElementById("dni").innerHTML = datos[0];
        document.getElementById("nombre").innerHTML = datos[1];
        document.getElementById("telefono").innerHTML = datos[2];
        document.getElementById("localidad").innerHTML = datos[3];
        document.getElementById("provincia").innerHTML = datos[4];
        document.getElementById("fecha").innerHTML = datos[5];
        document.getElementById("asignatura").innerHTML = datos[6];
        document.getElementById("nota").innerHTML = datos[7];
        document.getElementById("error").innerHTML = "";
      } else {
        var arrspan = document.getElementsByTagName("span");
        for (var i = 0; i < 7; i++) {
          document.getElementById("datosD").style.display = "none";
          arrspan[i].innerHTML = "";

        }
        datos = "No encontrado";
        document.getElementById("error").innerHTML = datos;
      }
    }

  };

  xhttp.open("GET", "http://localhost/DWEC/tabla/busquedaa.php?dato=" + datos, true);
  xhttp.send(null);
}