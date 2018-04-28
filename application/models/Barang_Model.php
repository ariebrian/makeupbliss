<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang_Model extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function get_new_barang()
	{
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('kategori', 'barang.kategori = kategori.id_kategori');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_one($id)
	{
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('kategori', 'kategori.id_kategori = barang.kategori');
		$this->db->where('barang.id_brg', $id);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

}

/* End of file  */
/* Location: ./application/models/ */ ?>