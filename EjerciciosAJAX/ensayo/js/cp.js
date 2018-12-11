var datos=[];
window.onload = function aaa(){
    
    // Obtener la instancia del objeto XMLHttpRequest
    if(window.XMLHttpRequest) {
      peticion_http = new XMLHttpRequest();
    }
    else if(window.ActiveXObject) {
      peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
    }
   
    // Preparar la funcion de respuesta
    peticion_http.onreadystatechange = muestraContenido;
   
    // Realizar peticion HTTP
  
    peticion_http.open('GET', 'http://localhost/EjerciciosAjax/ensayo/php/sacadatos.php', true);
    peticion_http.send(null);

    function muestraContenido() {
       
      if(peticion_http.readyState == 4) {
        if(peticion_http.status == 200) {
          datos=(peticion_http.responseText).split(',');
         var dest = document.getElementById("destino");  
         // dest.innerHTML=datos;// es para comprobar que llegan bien los datos
         }//end if200
      }//end if4
     // return datos;
    }//end muestraContenido
  }//end funciton aaa

  function cargaProducto(e) {
   
        var codigo = e.innerHTML;
      for (var i = 0; i < datos.length; i+=2) {
        if(datos[i]== codigo) {
           document.getElementById('cod').value = codigo;
           document.getElementById('loc').value = datos[(i+1)];
        }
       
      }
    cargaHabitantes();
  
}

  function busca(e) {
    var art = e.value; //no se como hacer para que ignore las tildes
   
    var tablaCoincidencias = document.getElementById('buscador');
    var filas = tablaCoincidencias.rows.length;
    if (filas > 1) { //limmpio la tabla de los anteriore resultados de busqueda
        for (var i = 0; i < filas; i++) {
            tablaCoincidencias.deleteRow(0);
        }
    }
  //  art = limpiaTildes(art);
    if (art.length > 0) {
        var row = tablaCoincidencias.insertRow(0);
        
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);

        cell1.innerHTML = "CÓDIGO";
        cell2.innerHTML = "MUNICIPIO";

      //  for (var i = 1; i < datos.length; i++) { //for1
            for (var i = 0; i < datos.length; i+=2) { //for1

            var codigo = datos[i];
        
        if(codigo.substring(0,art.length)==art){
 
               var tr = document.createElement('tr');
                var td1 = document.createElement('td');
                
                var tdConte1 = document.createTextNode(datos[i]);
                td1.setAttribute('onclick', 'cargaProducto(this)');
                td1.appendChild(tdConte1);

                var td2 = document.createElement('td');
               var tdConte2 = document.createTextNode(datos[(i+1)]);
            

                td2.appendChild(tdConte2);
//alert(datos[i+2]);

                tr.appendChild(td1);
                tr.appendChild(td2);
     
                tablaCoincidencias.appendChild(tr);

            } //end if 2          
        } //end for1

    } //end if1


} //end funcion busca

function cargaHabitantes() {

  if (window.XMLHttpRequest) {
    peticion_http = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
  }
  //prov=document.getElementById("selectProvincias").options[selectedIndex].value;
  
  var id= document.getElementById("cod").value;
  peticion_http.onreadystatechange = muestraContenido;
  peticion_http.open('GET', 'http://localhost/EjerciciosAjax/ensayo/php/tieneHabitantes.php?id=' + id, true);
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