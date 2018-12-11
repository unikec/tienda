  function objetoAjax() {
    var xmlhttp = false;
    try {
      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
          xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
      xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
  }//end function ObejtoAjax

function descargarContenido() {

    peticion_http = objetoAjax();

    // Preparar la funcion de respuesta
    peticion_http.onreadystatechange = mostrarAlumnos;

    // Realizar peticion HTTP
    peticion_http.open('GET', '../10Miercoles21Nov18/php/tablaAlumnos.php', true);
    peticion_http.send(null);

  }//end descargarContenido
 function mostrarAlumnos() { //esta función es llamada desde descargaContenidos()
    if (peticion_http.readyState == 4) {
      if (peticion_http.status == 200) {
        alumnos = peticion_http.responseText;
        var div = document.getElementById("tablita");
        div.innerHTML = alumnos;
      }
    }
  }

  function verNotas(alumnotb) {
    // document.getElementById("not_con").style.display='block';
    var alumnoId = alumnotb.id
    var ajax = objetoAjax();
    ajax.open("GET", "../10Miercoles21Nov18/php/recogerNotas.php?id=" + alumnoId, true);
    ajax.onreadystatechange = function () {
      if (ajax.readyState == 4) {
        document.getElementById("notas").innerHTML = ajax.responseText;
      }
    }
    ajax.send(null);

  }
 
  function eliminarAlumno(alumnotb) {
    // document.getElementById("not_con").style.display='block';
    var alumnoId = alumnotb.id
    var ajax = objetoAjax();
    ajax.open("GET", "../10Miercoles21Nov18/php/eliminarAlumno.php?id=" + alumnoId, true);
    ajax.onreadystatechange = function () {
      if (ajax.readyState == 4) {
        document.getElementById("mensaje").innerHTML = ajax.responseText;
      }
    }
    ajax.send(null);

  } 

  function realizarInsercion() {
    var orden = document.getElementById("select");

    var nombre = document.getElementById("nombre").value;
    var direccion = document.getElementById("direccion").value;
    var provincia = document.getElementById("provinciaSelect").options[document.getElementById("provinciaSelect").selectedIndex].text;
    var poblacion = document.getElementById("MunicipioSelect").options[document.getElementById("MunicipioSelect").selectedIndex].value;
    var telefono = document.getElementById("telefono").value;
    orden = orden.options[orden.selectedIndex].text;


    ajax = objetoAjax();


    // Realizar peticion HTTP
    ajax.open('POST', '../php/insertarAlumno.php', true);
    ajax.onreadystatechange = function () {
      if (ajax.readyState == 4) {
        document.getElementById("alumnos").innerHTML = ajax.responseText
      }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("nombre=" + nombre + "&direccion=" + direccion + "&provincia=" + provincia + "&poblacion=" + poblacion + "&telefono=" + telefono + "&orden=" + orden);

  }