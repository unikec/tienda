$(document).ready(function(){
	
	//Parte 1.
	
	/*$('#buttoncarga').click(function(){
		
		$('#div1').load('http://localhost/ejerciciosDWEC/jQuery_getStudents.php');
		
	});*/
	
	//Parte 2.
	
	/*$('#div2').load('http://localhost/ejerciciosDWEC/getProvincias_jQuery.php');
	
	
	$('#div2').on("change",$('#sel1'),function(){
		
		$('#div3').load('http://localhost/ejerciciosDWEC/getMunicipios_jQuery.php?id='+$('#sel1').val());
		
	});*/
	
	//Parte 3.
	
	/*$('#inp1').change(function(){
		
		if(($('#inp1').val().length)>=2){
			
			$('#div4').load('http://localhost/ejerciciosDWEC/getProvinciasTable_jQuery.php?prov='+$('#inp1').val());
			
		}
		else
			$('#div4').html('<p style="color:red"> Escriba 2 letras como mínimo</p>');
		
	});*/
	
	//Parte 4.  JSON sin JSON
	
	/*$('#inp1').keyup(function(){
		
		$.ajax({
			url : 'http://localhost/ejerciciosDWEC/getProvinciasByCodejQuery.php',

			data : {
				prov : $('#inp1').val(),
			},
			
			type: 'get',

			success : function(response) {
				if(($('#inp1').val())!='')
					$('#div4').html(response);
				
				else
					$('#div4').html('<p style="color:red"> Escriba algo</p>');
			}
		
		});
		
	});*/
	
	
	//Parte 5	JSON
	
	$.ajax({
			url : 'http://localhost/ejerciciosDWEC/getMunicipiosjQuery.php',
			
			dataType:'json',

			success : function(response) {
				
				//alert('hola');
				
				$('#inp1').keyup(function(){
					
					$('#div4').append("<table border='1'><th>Nombre</th>");
					
					for(i=0;i<response.length;i++){
						//if($('#inp1').val()^=response[i])
							$('#div4').append("<tr><td>"+response[i]+"</td></tr>");
					}
					$('#div4').append("</table>");
					
				});
			}
		
	});
	
	/*$('#inp1').keyup(function(){
		
		$.ajax({
			url : 'http://localhost/ejerciciosDWEC/getMunicipiosjQuery.php',

			data : {
				mun : $('#inp1').val(),
			},
			
			dataType:'JSON',
		
			//type: 'get',

			success : function(response) {
				
				if(($('#inp1').val().length)>=2){
					$('#div4').html("<table border='1'><th>Nombre</th>");
					
					for(i=0;i<response.length;i++){
						if($('#inp1').val()^=response[i])
							$('#div4').html("<tr><td>"+response[i]+"</td></tr>");
					}
					$('#div4').html("</table>");
				}
				else
					$('#div4').html('<p style="color:red"> Escriba 2 letras como mínimo</p>');
			}
		
		});
		
	});*/
	
});	