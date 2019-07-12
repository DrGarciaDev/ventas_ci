<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/*
	* Author: Luis García
	* Controlador para autenticación
	*/

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuarios_model');
	}

	public function index()
	{
		if ($this->session->userdata('login')) {
			redirect(base_url().'dashboard');
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->security->xss_clean( $this->db->escape_str($username) );
		$this->security->xss_clean( $this->db->escape_str($password) );

		$res = $this->Usuarios_model->login($username, sha1($password));

		if ($res && $res->estado) {
			$data = array (
				'id' => $res->id,
				'nombres' => $res->nombres,
				'rol' => $res->rol_id,
				'login' => TRUE
				);
			$this->session->set_userdata($data);
			redirect(base_url().'dashboard');
		}
		else{
			$this->session->set_flashdata('error', 'Usuario inactivo y/o usuario y/o contraseña son erroneos');
			redirect(base_url());
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
