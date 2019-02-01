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

    public function buscaProvincias($provincia){
        $this->db ->like('provincia',$provincia);
        $provincias = $this->db->get('provincias');
        return $provincias;
    }

    public function insertProvincia($provincias){
        $datos= array(
            'slug'=> $provincia,
            'provincia'=> $provincia,
            'comunidad'=> -1
        );
        $this->db->insert('provincias', $datos);
    }
}