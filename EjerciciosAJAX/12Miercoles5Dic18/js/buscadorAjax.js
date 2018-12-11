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
  
    peticion_http.open('GET', 'http://localhost/EjerciciosAjax/12Miercoles5Dic18/php/sacaRegistros.php', true);
    peticion_http.send(null);

    function muestraContenido() {
       
      if(peticion_http.readyState == 4) {
        if(peticion_http.status == 200) {
          datos=(peticion_http.responseText).split(',');
         var dest = document.getElementById("destino");  
          dest.innerHTML=datos;
         }//end if200
      }//end if4
     // return datos;
    }//end muestraContenido
  }//end funciton aaa

  function limpiaTildes(cadena){
    // Definimos los caracteres que queremos eliminar
    var specialChars = "!@#$^&%*()+=-[]\/{}|:<>?,.";
 
    // Los eliminamos todos
    for (var i = 0; i < specialChars.length; i++) {
        cadena= cadena.replace(new RegExp("\\" + specialChars[i], 'gi'), '');
    }   
 
    // Lo queremos devolver limpio en minusculas
    cadena = cadena.toLowerCase();
 
    // Quitamos espacios y los sustituimos por _ porque nos gusta mas asi
    cadena = cadena.replace(/ /g,"_");
 
    // Quitamos acentos y "ñ". Fijate en que va sin comillas el primer parametro
    cadena = cadena.replace(/á/gi,"a");
    cadena = cadena.replace(/é/gi,"e");
    cadena = cadena.replace(/í/gi,"i");
    cadena = cadena.replace(/ó/gi,"o");
    cadena = cadena.replace(/ú/gi,"u");
    cadena = cadena.replace(/ñ/gi,"n");
    return cadena;
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
    art = limpiaTildes(art);
    if (art.length > 1) {
        var row = tablaCoincidencias.insertRow(0);
        
      var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
       var cell4 = row.insertCell(3);
        cell1.innerHTML = "MUNICIPIO";
        cell2.innerHTML = "CÓDIGO";
        cell3.innerHTML = "LATITUD";
        cell4.innerHTML = "LONGITUD";
      //  for (var i = 1; i < datos.length; i++) { //for1
            for (var i = 0; i < datos.length; i+=4) { //for1

            var municipioNombre = datos[i];
            //var municipioNombre = datos[i][1];

           // municipioNombre = municipioNombre.toString();
            var patron = new RegExp(art, "i");//con la i como flag me ignora si es mayuscula o minúscula

            if (patron.test(municipioNombre)) { //if 2
           //     alert("Coincide: "+municipioNombre);
               var tr = document.createElement('tr');
                var td1 = document.createElement('td');
                var tdConte1 = document.createTextNode(datos[i]);

               // var tdConte1 = document.createTextNode(datos[i][0]);
              //  td1.setAttribute('onclick', 'cargaProducto(this)');
                td1.appendChild(tdConte1);

                var td2 = document.createElement('td');
               var tdConte2 = document.createTextNode(datos[(i+1)]);

              // var tdConte2 = document.createTextNode(datos[i][1]);
            

                td2.appendChild(tdConte2);
//alert(datos[i+2]);
                var td3 = document.createElement('td');
                var tdConte3 = document.createTextNode(datos[(i+2)]);

               // var tdConte3 = document.createTextNode(datos[i][2]);
                td3.appendChild(tdConte3);

                var td4 = document.createElement('td');
                var tdConte4 = document.createTextNode(datos[(i+3)]);
              //  var tdConte4 = document.createTextNode(datos[i][3]);

                td4.appendChild(tdConte4);

                tr.appendChild(td1);
                tr.appendChild(td2);
                tr.appendChild(td3);
                tr.appendChild(td4);
                tablaCoincidencias.appendChild(tr);

            } //end if 2          
        } //end for1

    } //end if1


} //end funcion busca