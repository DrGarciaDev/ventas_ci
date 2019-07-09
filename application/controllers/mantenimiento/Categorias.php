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

	public function add()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/add');
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$nombre = $this->input->post('nombre');
		$descripcion = $this->input->post('descripcion');

		$data = array(
			'nombre' => $nombre,
			'descripcion' => $descripcion,
			'estado' => "1" 
			);

		if ($this->Categorias_model->save($data)) {
			redirect(base_url()."mantenimiento/categorias");
		}
		else{
			$this->session->set_flashdata('error', 'No se pudo guardar la categoria');
			redirect(base_url()."mantenimiento/categoria/add");
		}
	}

	public function edit($id = '')
	{
		$data = array('categoria' => $this->Categorias_model->get_categoria($id) );

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/categorias/edit', $data);
		$this->load->view('layouts/footer');
	}

	public function update($value = '')
	{
		$id 			= $this->input->post('id_categoria');
		$nombre 		= $this->input->post('nombre');
		$descripcion 	= $this->input->post('descripcion');

		$data = array(
			'nombre' => $nombre, 
			'descripcion' => $descripcion,
			);

		if ($this->Categorias_model->update($id, $data)) {
			redirect(base_url()."mantenimiento/categorias");
		}
		else{
			$this->session->set_flashdata('error', 'No se pudo actualizar la categoria');
			redirect(base_url()."mantenimiento/categoria/edit/".$id_categoria);
		}
	}
}
?>