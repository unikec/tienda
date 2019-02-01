<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class provincias extends CI_Controller {

	public function index()
	{
        $this->load->helper('url');
        $this->load->model('model_provincias');
        $data['titulo']= 'provincias';
        $data['provincias']=$this->model_provincias->getProvincias();

        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('provincias_vista', $data);
        $this->load->view('footer');
	}
}