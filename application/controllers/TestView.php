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
		$this->load->view('header');
		$this->load->view('front');
	}

	public function detail()
	{
		$this->load->view('header');
		$this->load->view('detail');
	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
	}

	public function cat()
	{
		$this->load->view('header');
		$this->load->view('category');
	}

	public function cart()
	{
		$this->load->view('header');
		$this->load->view('cart');
	}

	public function admin()
	{
		$this->load->view('header');
		$this->load->view('admin');
	}

	public function insert()
	{
		$this->load->view('header');
		$this->load->view('insert');
	}

	public function list()
	{
		$this->load->view('header');
		$this->load->view('list');
	}

	public function lala()
	{
		echo base_url();
	}

}

/* End of file  */
/* Location: ./application/controllers/ */
 ?>