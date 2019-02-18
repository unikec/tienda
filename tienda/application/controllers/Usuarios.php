<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios extends CI_Controller {

	public function index(){
        $this->load->model('model_productos');
        $datos['categorias']= $this->model_productos->getCategorias();
       // $datos['h2Inicial'] = 'Mi c';
		$this->load->view('plantilla', [
			'titulo' => 'Inicio de sesion',
			'menu'=>  $this->load->view('menu', $datos, true),
			'cuerpo' => $this->load->view('login',[],true)
 		]
	);
	}

	public function LogIn(){
		$this->load->model('model_productos');
		$this->load->model('model_usuarios');

		$this->form_validation->set_rules('usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('contrasena', 'Contraseña', 'required');
               // $=

		if ($this->model_Login->LogOK($this->input->post('usuario'), $this->input->post('contrasena'))& $this->form_validation->run() == TRUE) {			

			$this->session->set_userdata('usuario_id', $this->model_usuarios->getID($this->input->post('usuario')));
			$this->session->set_userdata('nombre', $this->model_usuarios->getNombre($this->input->post('usuario')));
			$this->session->set_userdata('administrador', $this->model_usuarios->getAdmin($this->input->post('usuario')));
			
			$datos_categorias['categorias']= $this->model_productos->getCategorias();
			$this->load->view('plantilla', [
				'titulo' => 'Iniciando de sesion',
				'menu'=>  $this->load->view('menu', $datos_categorias, true),
				'cuerpo' => $this->load->view('listado_articulos',[],true)
			 ]);

		} else {
			$errormsg= "";
			if ($this->form_validation->run() == TRUE) {
				$errormsg= "Error en usuario o contraseña";
			}
			$datos_categorias['categorias']= $this->model_productos->getCategorias();
			$this->load->view('plantilla', [
				'titulo' => 'Loging',
				'menu'=>  $this->load->view('menu', $datos_categorias, true),
				'cuerpo' => $this->load->view('login',['error'=> $errormsg],true)
			 ]);
		}
		

	}

	public function LogOut(){
		$this->load->model('model_productos');
		$this->session->unset_userdata('usuario_id');
		$this->session->unset_userdata('nombre');
		$this->session->unset_userdata('administrador');

        $datos_categorias['categorias']= $this->model_productos->getCategorias();
		$this->load->view('plantilla', [
			'titulo' => 'Inicio de sesion',
			'menu'=>  $this->load->view('menu', $datos_categorias, true),
			'cuerpo' => $this->load->view('listado_articulos',[],true)
		 ]);
	}

}