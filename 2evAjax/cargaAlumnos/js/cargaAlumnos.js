$(document).ready(function(){
  $('#botonCargar').click(function () {
    $('#contenido').load('http://localhost/2evAjax/cargaAlumnos/php/cargaAlumnos.php');
  })

  });