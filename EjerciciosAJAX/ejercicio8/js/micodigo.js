var alumnos=[];
var resp="";

window.onload = function(){
  cargarProvincias();
  recogerTodosAlumnos();
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

function recogerTodosAlumnos(){


    var ajax = objetoAjax();

    ajax.open("GET","recogerAlumnos.php",true);

   ajax.onreadystatechange = function(){
      if (ajax.readyState==4) {
        alumnos=ajax.responseText.split(" ");
      }
  }   
    ajax.send(null);
}

function estaAlumno(){
  var resultado = document.getElementById("resultadoNombre");
  var texto = document.getElementById("textoAlumno").value;
  if(texto!=""){
    for(var i = 0;i<alumnos.length;i++){
      if(alumnos[i].search(texto)>-1){
        resp+="<p onclick='introducirPalabra(this)'>"+alumnos[i]+"</p>";
      }
    }
    resultado.innerHTML = resp;
    resp="";
  }
}
function introducirPalabra(parrafo){
  var texto = document.getElementById("textoAlumno");
  palabra = parrafo.innerHTML;

  texto.value=palabra;
  document.getElementById("resultadoNombre").innerHTML="";

}

function verNotas(alumnotabla){
    document.getElementById("not_con").style.display='block';

   var alumnoId= alumnotabla.id

    var ajax = objetoAjax();

    ajax.open("GET","recogerNotas.php?id="+alumnoId,true);

   ajax.onreadystatechange = function(){
      if (ajax.readyState==4) {
       document.getElementById("notas").innerHTML=ajax.responseText;
      }
  }   
    ajax.send(null);

}

 
function cargarProvincias(){

  var provinciaSelect = document.getElementById("provinciaDiv");
  ajax = objetoAjax();

  ajax.open('GET','cargarProvincias.php',true);
  ajax.onreadystatechange = function(){
    if (ajax.readyState==4) {
      provinciaSelect.innerHTML = ajax.responseText;
    }
  }
  ajax.send(null);
}

function generarMunicipios(){

  var municipioSelect = document.getElementById("municipioDiv");
  var select = document.getElementById("provinciaSelect");
  var id = select.options[select.selectedIndex].value;

  ajax = objetoAjax();

  ajax.open('POST','cargarMunicipios.php',true);
  ajax.onreadystatechange = function(){
    if (ajax.readyState==4) {
      municipioSelect.innerHTML = ajax.responseText;
    }
  }
  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  ajax.send("id="+id);

}

function realizarInsercion(){
  var orden = document.getElementById("select");

  var nombre = document.getElementById("nombre").value;
  var direccion = document.getElementById("direccion").value;
  var provincia = document.getElementById("provinciaSelect").options[document.getElementById("provinciaSelect").selectedIndex].text;
  var poblacion = document.getElementById("MunicipioSelect").options[document.getElementById("MunicipioSelect").selectedIndex].value;
  var telefono = document.getElementById("telefono").value;
  orden = orden.options[orden.selectedIndex].text;


  ajax = objetoAjax();
 
 
  // Realizar peticion HTTP
  ajax.open('POST','insertarAlumno.php',true);
  ajax.onreadystatechange=function() {
      if (ajax.readyState==4) {
        document.getElementById("alumnos").innerHTML = ajax.responseText
    }
   }
  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  ajax.send("nombre="+nombre+"&direccion="+direccion+"&provincia="+provincia+"&poblacion="+poblacion+"&telefono="+telefono+"&orden="+orden);

}

function descargarContenido() {

  var select = document.getElementById("select");
  var select = select.options[select.selectedIndex].text;

  peticion_http = objetoAjax();

  // Preparar la funcion de respuesta
  peticion_http.onreadystatechange = mostrarAlumnos;
  
  // Realizar peticion HTTP
  peticion_http.open('GET', 'alumnos.php?orden='+select, true);
  peticion_http.send(null);
  
}
function mostrarAlumnos(){
   if(peticion_http.readyState == 4) {
      if(peticion_http.status == 200) {
        alumnos = peticion_http.responseText;
        var div = document.getElementById("alumnos");
        div.innerHTML = alumnos;
          
      }

    }

}

function eliminarAlumno(btnEliminar){
  var id = btnEliminar.id;

  var objAjax = objetoAjax();

  // Preparar la funcion de respuesta
  objAjax.onreadystatechange = function() {
      if (objAjax.readyState==4) {
        alumnos = objAjax.responseText;
        var div = document.getElementById("alumnos");
        div.innerHTML = alumnos;
    }
   }
  
  // Realizar peticion HTTP
  objAjax.open('GET', 'eliminar.php?id='+id, true);
  objAjax.send(null);

}

function editarAlumno(btn){
  document.getElementById("insert").style.display="none";
  document.getElementById("editarForm").style.display="block";

  ajax = objetoAjax();
 
 
  // Realizar peticion HTTP
  ajax.open('POST','editar.php',true);
  ajax.onreadystatechange=function() {
      if (ajax.readyState==4) {
        document.getElementById("editarForm").innerHTML = ajax.responseText
    }
   }
  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  ajax.send("codigo="+btn.id);


}

function realizarEdit(cod){

  var codigo = cod;
  var nombre = document.getElementById("nombreEdit").value;
  var direccion = document.getElementById("direccionEdit").value;
  var provincia = document.getElementById("provinciaEdit").value;
  var poblacion = document.getElementById("poblacionEdit").value;
  var telefono = document.getElementById("telefonoEdit").value;

  ajax = objetoAjax();
 
 
  // Realizar peticion HTTP
  ajax.open('POST','realizarEdit.php',true);
  ajax.onreadystatechange=function() {
      if (ajax.readyState==4) {
        document.getElementById("alumnos").innerHTML = ajax.responseText
    }
   }
  ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  ajax.send("codigo="+codigo+"&nombre="+nombre+"&direccion="+direccion+"&provincia="+provincia+"&poblacion="+poblacion+"&telefono="+telefono);
  
  document.getElementById("insert").style.display="block";
  document.getElementById("editarForm").style.display="none";
}

    
