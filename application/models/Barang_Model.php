<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang_Model extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function add_barang($data)
	{
		$this->db->insert('barang',$data);
	}

	public function get_new_barang()
	{
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('kategori', 'barang.kategori = kategori.id_kategori');
		$this->db->order_by('id_brg', 'desc');
		$this->db->limit(6);
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

	public function get_kategori()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		// $this->db->join('kategori', 'barang.kategori = kategori.id_kategori');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_based_category($id)
	{
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('kategori','barang.kategori = kategori.id_kategori');
		$this->db->where('kategori.id_kategori', $id);
		// $query = $this->db->get();
		$query = $this->db->get();
		
			return $query->result();
			
	}

	public function add_cart($data)
	{
		$this->db->insert('cart',$data);
	}
	public function get_cart($id_user)
	{
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->join('barang', 'barang.id_brg = cart.id_barang');
		$this->db->join('user', 'user.id_user = cart.id_user');
		$this->db->where('cart.id_user',$id_user);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_all()
	{
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('kategori', 'kategori.id_kategori = barang.kategori');
		$query = $this->db->get();
		return $query->result();
	}



}

/* End of file  */
/* Location: ./application/models/ */ ?>