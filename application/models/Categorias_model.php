<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

	/*
	* Author: Luis García
	* Modelo para categorias
	*/
	public function get_categorias()
	{
		$this->db->where('estado',"1");
		$resultados = $this->db->get('categorias');
		return $resultados->result();
	}

	public function save($data = '')
	{
		return $this->db->insert('categorias', $data);
	}

	public function get_categoria($id)
	{
		$this->db->where('id', $id);
		$resultado = $this->db->get('categorias');

		return $resultado->row();
	}

	public function update($id = '', $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('categorias', $data);
	}

}
