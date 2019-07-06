<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

	/*
	* Author: Luis García
	* Controlador para autenticación
	*/
	public function get_categorias()
	{
		$this->db->where('estado',"1");
		$resultados = $this->db->get('categorias');
		return $resultados->result();
	}
}
