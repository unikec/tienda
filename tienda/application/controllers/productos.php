<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos extends CI_Controller {

	public function index()
	{
       // $this->load->helper('url');
        $this->load->model('model_productos');
        $datos_h2['h2Inicial']='Productos destacados';
        $datos_vista['productos']= $this->model_productos-> productosDestacados();
        $datos_categorias['categorias']= $this->model_productos-> getCategorias();

       //cargo la vista pasando los datos de configuacion
        $this->load->view('plantilla', [
        'titulo'=>'productos destacados',
        'menu'=>  $this->load->view('menu', $datos_categorias, true),
        'h2Inicial'=>$this->load->view('listado_articulos',  $datos_h2, true),
        'cuerpo'=>$this->load->view('listado_articulos',  $datos_vista, true),
        ]);
	}
  
        public function mostrarCategorias($catId)
	{
        //$this->load->helper('url'); //ya lo tengo en el autoload
        $this->load->model('model_productos');//cargo el modelo
        
        $datos_h2['h2Inicial']= $this->model_productos->descripcionCategoria($catId);
        $datos_vista['productos']= $this->model_productos-> getProductosPorCategoria($catId);
        $datos_menu['categorias']= $this->model_productos-> getCategorias();
        $datos_titulo['titulo']= $this->model_productos->categoriaNombre($catId);
        
        $this->load->view('plantilla', [
        'titulo'=>$datos_titulo,
        'menu'=>  $this->load->view('menu', $datos_menu, true),
        'h2Inicial'=>$this->load->view('listado_articulos',  $datos_h2, true),
        'cuerpo'=>$this->load->view('listado_articulos',  $datos_vista, true),
         ]);
        }
        
        public function mostrarDetalle($prodId)
	{
        //$this->load->helper('url'); //ya lo tengo en el autoload
        $this->load->model('model_productos');//cargo el modelo
        
        $datos_h2['h2Inicial']= $this->model_productos->descripcionProducto($prodId);
        $datos_vista['productos']= $this->model_productos-> getProducto($prodId);
        $datos_menu['categorias']= $this->model_productos-> getCategorias();
        $datos_titulo['titulo']= $this->model_productos->productoNombre($prodId);
        
        $this->load->view('plantilla', [
        'titulo'=>$datos_titulo,
        'menu'=>  $this->load->view('menu', $datos_menu, true),
        'h2Inicial'=>$this->load->view('detalleProducto',  $datos_h2, true),
        'cuerpo'=>$this->load->view('detalleProducto',  $datos_vista, true),
         ]);
        }
}