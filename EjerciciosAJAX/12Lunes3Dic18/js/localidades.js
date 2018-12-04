

window.onload = function(){
    cargarProvincias();
   
}

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

function cargarProvincias(){  
    var pruebaDiv = document.getElementById("prueba");  
    ajax = objetoAjax();
  
    ajax.open('GET','php/cargaProvincias.php',true);
    
    ajax.onreadystatechange = function(){
      if (ajax.readyState==4) {
       // provincias.innerHTML = ajax.responseText.split(',');
      // provincias= ajax.responseText;
       pruebaDiv.innerHTML= ajax.responseText.split(',');
      }
    }
    ajax.send(null);
   // creaProvincias();
  
  }//end function cargarProvincias()
 
  function creaProvincias(){
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
 /* function generarMunicipios(){
  
    var municipioSelect = document.getElementById("destinoMunicipios");
    var select = document.getElementById("provinciaSelect");
    var id = select.options[select.selectedIndex].value;
  
    ajax = objetoAjax();
  
    ajax.open('POST','php/cargaMunicipios.php',true);
    ajax.onreadystatechange = function(){
      if (ajax.readyState==4) {
        municipioSelect.innerHTML = ajax.responseText;
      }
    }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.send("id="+id);
  
  }*/