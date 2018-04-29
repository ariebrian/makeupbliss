<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('form_validation');
		// $this->load->library('session');
		$this->load->helper('url');
		// $this->load->helper('form');
		// $this->load->helper('date');
		$this->load->model('Barang_Model');
	}

	public function get_new()
	{
		$data['barang'] = $this->Barang_Model->get_new_barang();
		$front_data = array('barang' => $this->Barang_Model->get_new_barang(), 
							'category' => $this->Barang_Model->get_kategori(),
						);
		// echo "<pre>";
		// var_dump($front_data);
		// die();
		// echo "</pre>";
		$this->load->view('header');
		$this->load->view('front',$front_data);
	}

	public function get_one($id)
	{
		if ($id === NULL) {
			return false;
		} else {
			$data = array('barang' => $this->Barang_Model->get_one($id) , );
		}
		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";
		// die();
		$this->load->view('header');
		$this->load->view('detail',$data);
	}

}

/* End of file  */
/* Location: ./application/controllers/ */ ?>