<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_productos extends CI_Model {
    
    public function __construct(){ // son 2 barras bajas _ _ juntitas
        $this->load->database();
     }

    public function getProductos(){
       
        $productos = $this->db->get('producto');
        return $productos;
    }
//busca producto en función de su nombre
    public function buscaProducto($producto){
        $this->db ->like('nombre',$producto);
        $producto = $this->db->get('producto');
        return $producto;
    }
//saca productos por categorias
    public function buscaProductoPorCategoria($producto){
        $this->db ->like('nombre',$producto);
        $producto = $this->db->get('producto');
        return $producto;
    }
//crea una nueva categoria
    public function insertCategoria($id,$nombre,$descripcion, $anuncio, $visible){
        $datos= array(
            'categoria_id'=> $id,
            'nombre'=> $nombre,
            'descripcion'=> $descripcion,
            'anuncio'=> $anuncio,
            'visible'=> $visible
        );
        $this->db->insert('categoria', $datos);
    }
     /**
     * Saca los nombres de todas las categorias
     * @return type
      * visible=1 --> visible ok
      * visible =0 --> no visible 
     */
    public function getCategorias()
    {
        $query = $this->db->query('select * from categorias where visible=1');
        return $query->result();
    }
}