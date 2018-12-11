window.onload = function aaa() {
  // Obtener la instancia del objeto XMLHttpRequest
  if (window.XMLHttpRequest) {
    peticion_http = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
  }

  // Preparar la funcion de respuesta
  peticion_http.onreadystatechange = muestraContenido;

  // Realizar peticion HTTP

  peticion_http.open('GET', 'http://localhost/EjerciciosAjax/12Lunes3Dic18/php/cargaProvincias.php', true);
  peticion_http.send(null);

  function muestraContenido() {

    if (peticion_http.readyState == 4) {
      if (peticion_http.status == 200) {
        arrDatos = (peticion_http.responseText).split(',');
        var destino = document.getElementById("selectProvincias");
        //var selectProvincias=document.createElement('select');
        for (var i = 0; i < arrDatos.length; i += 2) {
          var optionP = document.createElement('option');
          var provincia = document.createTextNode(arrDatos[i + 1]);
          optionP.appendChild(provincia);
          optionP.setAttribute('value', arrDatos[i]);
          destino.appendChild(optionP);
        } //end for

      }//end if200
    }//end if4
  }//end muestraContenido
}//end funtion aaa


function CargaMunicipios() {

  if (window.XMLHttpRequest) {
    peticion_http = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
  }
  //prov=document.getElementById("selectProvincias").options[selectedIndex].value;
  var municipioSelect = document.getElementById("selectMunicipios");
  var select = document.getElementById("selectProvincias");
  var id = select.options[select.selectedIndex].value;
  // alert(id);
  peticion_http.onreadystatechange = muestraContenido;
  peticion_http.open('GET', 'http://localhost/EjerciciosAjax/12Lunes3Dic18/php/cargaMunicipios.php?id=' + id, true);
  peticion_http.send(null);

  function muestraContenido() {

    if (peticion_http.readyState == 4) {
      if (peticion_http.status == 200) {
        municipios = document.getElementById("selectMunicipios");
        datosMunicipios = (peticion_http.responseText).split(",");
        //   alert(datosMunicipios);

        for (i = 0; i < datosMunicipios.length; i++) {
          opt_element = document.createElement("option");
          txtNode = document.createTextNode(datosMunicipios[i]);
          opt_element.appendChild(txtNode);
          //opt_element.setAttribute("value",datosMunicipios[i]);
          municipios.appendChild(opt_element);
        }
      }
    }
  }
}