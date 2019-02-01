<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos extends CI_Controller {

	public function index()
	{
        $this->load->helper('url');
        $this->load->model('model_productos');

        $datos_vista['productos']= $this->model_productos-> getProductos();
        $datos_categorias['categorias']= $this->model_productos-> getCategorias();

       //cargo la vista pasando los datos de configuacion
        $datos_plantilla["titulo"] = "Productos";
        $datos_plantilla["menu"] = $this->load->view('menu', $datos_categorias, true);
        $datos_plantilla["cuerpo"] = $this->load->view('listado_articulos',  $datos_vista, true);
     
      
      $this->load->view('plantilla', $datos_plantilla);

   /*   $this->load->view('plantilla', [
        'titulo'=>'productos',
        'menu'=>  $this->load->view('menu', $datos_categorias, true),
        'cuerpo'=>$this->load->view('listado_articulos',  $datos_vista, true),
      ]);*/
	}
}