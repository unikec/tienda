<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Incluimos el archivo PHPExcel.php
    require_once APPPATH."/third_party/phpexcel/PHPExcel.php";
 
	class Excel extends PHPExcel{
	  public function __construct()
	  {
		parent::__construct();
	  }
	}

?>