<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author cgcri
 */
class oferta {
    //put your code here
    private $descripcion;
    private $estado;
    private $fechaCreacion;
    
    function __construct() {
       
   }
    
    public function listar($param) {
        
    }
    public function modificarDatos($param) {
        
    }
     
    public function __destruct() {
        //averiguar si sirve
    }
    public function setEstado($nuevoEst) {
        $this->estado=$nuevoEst;
    }
    public function buscarOferta($param) {
        
    }
}//end class oferta
/*•	Descripción: Texto descriptivo identificativo de la oferta
•	Persona de contacto: Nombre y apellidos de la persona a la que comuniquemos el candidato seleccionado.
•	Teléfono/s contacto: Nº de telefono de contacto de la persona de contacto.
•	Correo electrónico: Correo electrónico de la persona de contacto.
•	Dirección: Dirección de la empresa que encarga el empleo.
•	Población: Población
•	Código postal: C.P.
•	Provincia: Provincia de la empresa. Para este campo utilizaremos un <select>. Para este campo se almacenará un código numérico. Como el indicado en el INE
•	Estado: Estado en el que se encuentra la oferta (P=Pendiente de inciar selección, R=Realizando selección, S=Seleccionado candidato, C=Cancelada, ...)
•	Fecha de creación de la oferta: Fecha en la que se ha creado la oferta. Este campo se generará automáticamente. Se deberá usar un disparador de la base de datos.
•	Fecha comunicación: Fecha tope en la que hay que comunicar el resultado a la empresa.
•	Psicologo encargado: Nombre o identificación del psicologo encargado de la selección de personal.
•	Canditato seleccionado: Nombre del candidato seleccionado.
•	Otros datos candidato: Anotaciones realizadas sobre el candidato seleccionado. Campo grande de texto
*/