<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TestView extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('form_validation');
		// $this->load->library('session');
		$this->load->helper('url');
		// $this->load->helper('form');
		// $this->load->helper('date');
		// $this->load->model('Barang_Model');
	}

	public function home()
	{
		$this->load->view('home');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */
 ?>