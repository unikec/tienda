<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios extends CI_Controller {

	public function index(){
        $this->load->model('Model_productos');
        $datos['categorias']= $this->Model_productos->getCategorias();
       // $datos['h2Inicial'] = 'Mi c';
		$this->load->view('plantilla', [
			'titulo' => 'Inicio de sesion',
			'menu'=>  $this->load->view('Menu', $datos, true),
			'cuerpo' => $this->load->view('Login',[],true)
 		]
	);
	}

	public function logIn(){
            /*hacer loginOk($usuario, $clave)
//hay q usar password verify
$rs= $this->bd->where('username', 'user')->get('usuarios');
 //vuelve si no existe---hacer
 $datosUsuarios=$rs->row();
 if(password_verify($password, $datosUsuario->clave))*/ 
		$this->load->model('Model_productos');
		$this->load->model('Model_usuarios');

		$this->form_validation->set_rules('usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('contrasena', 'Contraseña', 'required');
               // $=

		if ($this->model_Login->LogOK($this->input->post('usuario'), $this->input->post('contrasena'))& $this->form_validation->run() == TRUE) {			

			$this->session->set_userdata('usuario_id', $this->Model_usuarios->getID($this->input->post('usuario')));
			$this->session->set_userdata('nombre', $this->Model_usuarios->getNombre($this->input->post('usuario')));
			$this->session->set_userdata('administrador', $this->Model_usuarios->getAdmin($this->input->post('usuario')));
			
			$datos_categorias['categorias']= $this->Model_productos->getCategorias();
			$this->load->view('Plantilla', [
				'titulo' => 'Iniciando de sesion',
				'menu'=>  $this->load->view('Menu', $datos_categorias, true),
				'cuerpo' => $this->load->view('Listado_articulos',[],true)
			 ]);

		} else {
			$errormsg= "";
			if ($this->form_validation->run() == TRUE) {
				$errormsg= "Error en usuario o contraseña";
			}
			$datos_categorias['categorias']= $this->Model_productos->getCategorias();
			$this->load->view('Plantilla', [
				'titulo' => 'Loging',
				'menu'=>  $this->load->view('Menu', $datos_categorias, true),
				'cuerpo' => $this->load->view('Login',['error'=> $errormsg],true)
			 ]);
		}
		

	}

	public function logOut(){
		$this->load->model('Model_productos');
		$this->session->unset_userdata('usuario_id');
		$this->session->unset_userdata('nombre');
		$this->session->unset_userdata('administrador');

        $datos_categorias['categorias']= $this->Model_productos->getCategorias();
		$this->load->view('Plantilla', [
			'titulo' => 'Inicio de sesion',
			'menu'=>  $this->load->view('Menu', $datos_categorias, true),
			'cuerpo' => $this->load->view('Listado_articulos',[],true)
		 ]);
	}


/*hacer estaDentro()
return $this->session->userdata('dentro');
*/ 
/**hacer cierraSession() 
 * $this->session->get_userdata('dentro', false);
*/

}