var productos = [];
window.onload = function aaa() {

    // Obtener la instancia del objeto XMLHttpRequest
    if (window.XMLHttpRequest) {
        peticion_http = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        peticion_http = new ActiveXObject("Microsoft.XMLHTTP");
    }

    // Preparar la funcion de respuesta
    peticion_http.onreadystatechange = muestraContenido;

    // Realizar peticion HTTP

    peticion_http.open('GET', 'sacaProductos.php', true);
    peticion_http.send(null);

    function muestraContenido() {

        if (peticion_http.readyState == 4) {
            if (peticion_http.status == 200) {
                productos = (peticion_http.responseText).split(',');
                var dest = document.getElementById("destino");
               //dest.innerHTML=productos;// es para comprobar que llegan bien los datos
            } //end if200
        } //end if4
        // return datos;
    } //end muestraContenido
} //end funciton aaa

function cargaProducto(e) {
    if (e.innerHTML == "") {
        var codigo = document.getElementById('cod').value;
    } else
        var codigo = e.innerHTML;
        for (var i = 0; i < productos.length; i+=3) {
           // alert(productos[4]);
           if(codigo==productos[i]){
            document.getElementById('cod').value = productos[i];
            document.getElementById('descrip').value = productos[(i+1)];
           // document.getElementById('descrip1').value = productos[codigo][1];
            document.getElementById('precio').value = productos[(i+2)];
            document.getElementById('canti').value = 1;
            var precio = productos[i+2]; 
           }
                 
        }
    if (codigo < 1 || codigo > productos.length) { //así evito que pongan otros codigos if2
        document.getElementById('descrip').value = "El codigo erroneo";
        document.getElementById('precio').value = "";
        document.getElementById('canti').value = "";
    } //end if2
    var canti = document.getElementById('canti').value;
    document.getElementById('subtotal').value = precio * canti;
   // document.getElementById('iva').value = precio * canti*1.21;
    
}
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
        cell1.innerHTML = "CÓDIGO";
        cell2.innerHTML = "DESCRIPCIÓN";
        for (var j = 0; j < productos.length; j+=3) { //for1
        //for (var i = 0; i < datos.length; i += 2) { //for1
            var descripcion = productos[(j+1)];
          //  var codigo = datos[i];

            if (descripcion.substring(0, art.length) == art) { 
   /*         var produDescrip = productos[i+1];
           // produDescrip = produDescrip.toString();
            var patron = new RegExp(art, "i");//con la i como flag me ignora si es mayuscula o minúscula

            if (patron.test(produDescrip)) { //if 2*/
                // alert("Coincide: "+produDescrip);
                var tr = document.createElement('tr');
                var td1 = document.createElement('td');
                var tdConte1 = document.createTextNode(productos[j]);
                td1.setAttribute('onclick', 'cargaProducto(this)');
                td1.appendChild(tdConte1);

                var td2 = document.createElement('td');
                var tdConte2 = document.createTextNode(productos[(j+1)]);
                td2.appendChild(tdConte2);

                tr.appendChild(td1);
                tr.appendChild(td2);
                tablaCoincidencias.appendChild(tr);

            } //end if 2          
        } //end for1

    } //end if1


} //end funcion busca
function actualizaSubtotal(e) {
    var canti = e.value;
    var precio = document.getElementById('precio').value;
    var x = canti * precio
    return document.getElementById('subtotal').value = x.toFixed(2);
}


function sumaFila() {

    var hilera = document.createElement('tr');

    var celdaCod = document.createElement('td');
    var conteTDCod = document.getElementById('cod').value;
    var celdaConte = document.createTextNode(conteTDCod);
    celdaCod.appendChild(celdaConte);

    var celdaDes = document.createElement('td');
    var conteTDDes = document.getElementById('descrip').value;
    var celdaConteDes = document.createTextNode(conteTDDes);
    celdaDes.appendChild(celdaConteDes);

    var celdaCan = document.createElement('td');
    var conteTDCan = document.getElementById('canti').value;
    var celdaConteCan = document.createTextNode(conteTDCan);
    celdaCan.appendChild(celdaConteCan);

    var celdaPre = document.createElement('td');
    var conteTDPre = document.getElementById('precio').value;
    var celdaContePre = document.createTextNode(conteTDPre);
    celdaPre.appendChild(celdaContePre);

    var celdaSub = document.createElement('td');
    var conteTDSub = document.getElementById('subtotal').value;
    var celdaConteSub = document.createTextNode(conteTDSub);
    celdaSub.classList.add('sub'); // para crear una clase en subtotal y así tener todos su valores almacenados en un array
    celdaSub.appendChild(celdaConteSub);

    hilera.appendChild(celdaCod);
    hilera.appendChild(celdaDes);
    hilera.appendChild(celdaCan);
    hilera.appendChild(celdaPre);
    hilera.appendChild(celdaSub);

    var destino = document.getElementById('tablita');

    destino.appendChild(hilera);

    var tclass = document.getElementsByClassName('sub');
    var count = 0;
    for (var i = 0; i < tclass.length; i++) {
        if (!Number.isNaN(parseFloat(tclass[i].innerHTML))) { //asi evito que se me cuelen datos que no sean numeros y me estropeen la cuenta
            count += parseFloat(tclass[i].innerHTML); //viene en texto, así que lo parseo para
        }

    } //es inner
    count.toFixed(2);
    document.getElementById('total').value = count;
    document.getElementById('iva').value = count*1.21;
}