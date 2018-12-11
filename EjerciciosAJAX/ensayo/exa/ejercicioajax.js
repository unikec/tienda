function cargacombo1(cod) {
	var xmlhttp;

	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var resultado = xmlhttp.responseText.split(",");
			document.getElementById("descripcion1").value = resultado[0];
			document.getElementById("precio1").value = resultado[1];
			document.getElementById("subt1").value = resultado[1];
		}
	};
	xmlhttp.open("GET", "cargadatos.php?cod="+cod, true);
	xmlhttp.send();
}

function cargacombo2(cod) {
	var xmlhttp;

	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var resultado = xmlhttp.responseText.split(",");
			document.getElementById("descripcion2").value = resultado[0];
			document.getElementById("precio2").value = resultado[1];
			document.getElementById("subt2").value = resultado[1];
		}
	};
	xmlhttp.open("GET", "cargadatos.php?cod="+cod, true);
	xmlhttp.send();
}

function cargacombo3(cod) {
	var xmlhttp;

	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var resultado = xmlhttp.responseText.split(",");
			document.getElementById("descripcion3").value = resultado[0];
			document.getElementById("precio3").value = resultado[1];
			document.getElementById("subt3").value = resultado[1];
		}
	};
	xmlhttp.open("GET", "cargadatos.php?cod="+cod, true);
	xmlhttp.send();
}

function cargacombo4(cod) {
	var xmlhttp;

	if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var resultado = xmlhttp.responseText.split(",");
			document.getElementById("descripcion4").value = resultado[0];
			document.getElementById("precio4").value = resultado[1];
			document.getElementById("subt4").value = resultado[1];
		}
	};
	xmlhttp.open("GET", "cargadatos.php?cod="+cod, true);
	xmlhttp.send();
}