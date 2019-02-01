<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_provincias extends CI_Model {
    
    public function __construct(){ // son 2 barras bajas _ _ juntitas
        $this->load->database();
     }

    public function getProvincias(){
       
        $provincias = $this->db->get('provincias');
        return $provincias;
    }

    
}