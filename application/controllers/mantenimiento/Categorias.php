<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	/**
	 * Controlador Categorias
	 * Author: Luis Alberto García Rodríguez
	*/

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Categorias_model');
	}

	public function index()
	{
		$data = array('categorias' => $this->Categorias_model->get_categorias(), );

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/list', $data);
		$this->load->view('layouts/footer');
	}
}
?>