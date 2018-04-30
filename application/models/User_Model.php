<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();		
	}

	public function login($data)
	{
		// $condition = "username =" . "'" . $data['username'] . "' AND " . "passw =" . "'" . $data['pass'] . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username',$data['username']);
		$this->db->where('password', $data['password']);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		}else{
			return false;
		}
	}

	public function user_info($username)
	{
		// $cond = "uname = " . "'" . $uname . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}
	}

	public function create_user($data)
	{
		$this->db->insert('user',$data);
	}

	public function user_id($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user',$id);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}
	}

}

/* End of file  */
/* Location: ./application/models/ */ ?>