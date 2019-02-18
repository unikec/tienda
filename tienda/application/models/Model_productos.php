<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_productos extends CI_Model {

    public function __construct() { // son 2 barras bajas _ _ juntitas
        $this->load->database();
    }

    public function getProductos() {

        $productos = $this->db->get('producto');
        return $productos;
    }

    /**
     * Devuelve los productos detacados siempre y cuando las fechas coincidan
     * @return type
     */
    public function productosDestacados() { //importate PAGINAR//$desde, $por_pagina pendientes de pasar por parametros a la función para cuando pagine
        // $query  = ("select * from producto where destacado=1 and visible=1 and finicio_dest<=CURDATE() and ffin_dest>=CURDATE() LIMIT $desde,$por_pagina");
        $query = ("select * from producto where destacado=1 and visible=1 and finicio_dest<=CURDATE() and ffin_dest>=CURDATE()");

        $prodes = $this->db->query($query);
        return $prodes->result(); //No usar result array, si en la vista quiero usar un foreach normalito
        //return $prodes->result_array();
    }

//
    /**
     * Devuelve toda la información de un producto dado su ID
     * @param type $prodId
     * @return type
     */
    public function getProducto($prodId) {
        $produ = $this->db
                ->from('producto')
                ->where('producto_id', $prodId)
                ->get();
        //$produ =$this->db->get('producto');
        return $produ->row();
    }

    /**
     * Devuelve la descrición del producto seleccionado
     * @param type $prodId
     * @return type
     */
    public function descripcionProducto($prodId) {
        $rs = $this->db //rs=resultado
                ->select('descripcion')
                ->from('producto')
                ->where('producto_id', $prodId)
                ->get();
        $reg = $rs->row(); //reg = registro de resultado
        if ($reg) { //en el caso de obtener dato a la consulta
            return $reg->descripcion;
        } else { //en el caso de no obtener ningun resultado a la consulta
            return '';
        }
    }

    /**
     * Devuelve el Nombre del producto seleccionado
     * @param type $prodId
     * @return type
     */
    public function productoNombre($prodId) {
        $rs = $this->db //rs=resultado
                ->select('nombre')
                ->from('producto')
                ->where('producto_id', $prodId)
                ->get();
        $reg = $rs->row(); //reg = registro de resultado
        if ($reg) { //en el caso de obtener dato a la consulta
            return $reg->nombre;
        } else { //en el caso de no obtener ningun resultado a la consulta
            return '';
        }
    }

    public function productoPrecio($prodId) {
        $rs = $this->db //rs=resultado
                ->select('precio')
                ->from('producto')
                ->where('producto_id', $prodId)
                ->get();
        $reg = $rs->row(); //reg = registro de resultado
        if ($reg) { //en el caso de obtener dato a la consulta
            return $reg->precio;
        } else { //en el caso de no obtener ningun resultado a la consulta
            return '';
        }
    }

    /**
     * Saca los nombres de todas las categorias
     * @return type
     * visible=1 --> visible ok
     * visible =0 --> no visible 
     */
    public function getCategorias() {
        $query = $this->db->query('select * from categorias where visible=1');
        return $query->result();
    }

//saca productos por categorias
    public function getProductosPorCategoria($catId) {

        $query = $this->db->query("select * from producto where categoria_id='$catId' and visible=1");
        $productos = $query->result();
        return $productos;
    }

    public function categoriaNombre($id) {
        $rs = $this->db //rs=resultado
                ->select('nombre')
                ->from('categorias')
                ->where('categoria_id', $id)
                ->get();
        $reg = $rs->row(); //reg = registro de resultado
        if ($reg) { //en el caso de obtener dato a la consulta
            return $reg->nombre;
        } else { //en el caso de no obtener ningun resultado a la consulta
            return '';
        }
    }

    /**
     * Función que me devuelva la descripción del contenido de una categoria
     * 
     */
    public function descripcionCategoria($id) {
        $rs = $this->db //rs=resultado
                ->select('descripcion')
                ->from('categorias')
                ->where('categoria_id', $id)
                ->get();
        $reg = $rs->row(); //reg = registro de resultado
        if ($reg) { //en el caso de obtener dato a la consulta
            return $reg->descripcion;
        } else { //en el caso de no obtener ningun resultado a la consulta
            return '';
        }
    }

    /**
     * Crea una nueva categoria
     * @param type $id
     * @param type $nombre
     * @param type $descripcion
     * @param type $anuncio
     * @param type $visible
     */
    public function insertCategoria($id, $nombre, $descripcion, $anuncio, $visible) {
        $datos = array(//
            'categoria_id' => $id,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'anuncio' => $anuncio,
            'visible' => $visible
        );
        $this->db->insert('categoria', $datos);
    }

    /**
     * Calcula el precio final del producto, tras la aplicación del descuento correspondiente
     * @param type $id
     * @return string
     */
    public function aplicaDescuento($id) { //si funciona
        $producto = $this->getProducto($id);
        if ($producto) {
            //print_r($producto);
            $des = $producto->descuento;
            $pre = $producto->precio;

            $porcentajeDescuento = $des / 100;
            $precioFin = $pre - ($pre * $porcentajeDescuento);
            return $precioFin;
        } else { //en el caso de no obtener ningun resultado a la consulta
            return '';
        }
    }
    
    /**
     * Calcula el total a pagar por producto introducido
     * teniendo en cuenta su posible descuento y cantidad seleccionada
     * @param type $precioPostDescuento
     * @param type $cantidad
     * @return type
     */
    public function subTotal($precioPostDescuento, $cantidad) {//si funciona
        $subT = $precioPostDescuento * $cantidad;
        return $subT;
    }
    
    /**
     * 
     * @param type $id
     * @param type $subTotal
     * @return string
     */
    public function ivaProductoSubTotal($id, $subTotal) { //si funciona
        $rs = $this->db //rs=resultado
                ->select('iva')
                ->from('producto')
                ->where('producto_id', $id)
                ->get();
        $reg = $rs->row(); //reg = registro de resultado
        if ($reg) { //en el caso de obtener dato a la consulta
            //para saber la base pillo el iva/100 y luego le sumo 1= 1*21 que será el divisor
            $divisor= 1+($reg->iva/100);                    //redondeo de dos digitos al alza
            $baseImponible = round(($subTotal / $divisor), 2,PHP_ROUND_HALF_DOWN) ;
           // $baseImponible = $precioPostDescuento / (1 * $reg->iva) ;//sin el redondeo
            return ($subTotal - $baseImponible) ;
        } else { //en el caso de no obtener ningun resultado a la consulta
            return '';
        }
    }

   /**
    * Calcula el total de la compra y el toda del iva desglosado
    * @param type $productosCarrito
    * @return type
    */
     public function totalCompra($productosCarrito) { //SI  funciona
        $info=[];
        $sumaCompra=0;
        $sumaIVA=0;
        foreach ($productosCarrito as $producto) {
            $precioConDescuento= $this->aplicaDescuento($producto['id']);
            $subT= $this->subTotal($precioConDescuento, $producto['qty']);
            $subTIVA= $this->ivaProductoSubTotal($producto['id'], $subT);
            $sumaCompra += $subT;
            $sumaIVA += $subTIVA;

        }
        return $info=array('aPagar'=>$sumaCompra, 'desgloseIVA'=>$sumaIVA);
    }
    
    
   

}
