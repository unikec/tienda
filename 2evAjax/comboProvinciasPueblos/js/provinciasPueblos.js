$(document).ready(function(){
  $('#provincias').load('http://localhost/2evAjax/comboProvinciasPueblos/php/cargaProvincias.php');
  $('#provincias').on("change",$('#sel1'),function () {
    $('#pueblos').load('http://localhost/2evAjax/comboProvinciasPueblos/php/cargaPueblos.php?id='+$('#sel1').val());
  })     
 
  });