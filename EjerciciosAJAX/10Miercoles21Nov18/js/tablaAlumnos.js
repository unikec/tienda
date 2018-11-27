 
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