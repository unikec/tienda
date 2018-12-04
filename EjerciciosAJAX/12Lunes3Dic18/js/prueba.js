window.onload = function aaa(){
    // Obtener la instancia del objeto XMLHttpRequest
    if(window.XMLHttpRequest) {
      peticion_http = new XMLHttpRequest();
    }
    else if(window.ActiveXObject) {
      peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
    }
   
    // Preparar la funcion de respuesta
    peticion_http.onreadystatechange = muestraContenido1;
   
    // Realizar peticion HTTP
  
    peticion_http.open('GET', 'http://localhost/EjerciciosAjax/12Lunes3Dic18/php/cargaProvincias.php', true);
    peticion_http.send(null);

    function muestraContenido1() {
       
      if(peticion_http.readyState == 4) {
        if(peticion_http.status == 200) {
          provincias=(peticion_http.responseText).split(',');
          document.getElementById('prueba').innerHTML=provincias;
        //  alert(a);
        /*for (var i = 0; i < a.length; i++) {
            document.getElementById('selectProvincias').innerHTML='<option value='+a[i]+'>'+a[i]+'</option>';
            
        }*/
        var provincias= document.getElementById('prueba').value;
       alert(provincias);
    var destino = document.getElementById("destino");  
    var selectProvincias=document.createElement('select');
    for (var i = 0; i < provincias.length; i+2) {
        var optionP= document.createElement('option');
        var provincia=document.createTextNode(provincias[(i+1)]);
        optionP.appendChild(provincia);
        optionP.setAttribute('value',provincias[i]);
        selectProvincias.appendChild(optionP);
    }//end for
    destino.appendChild(selectProvincias);
        }
      }
    }
  }