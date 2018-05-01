<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		// $this->load->helper('date');
		$this->load->model('Barang_Model');
	}

	public function ins()
	{
		$this->load->view('header');
		$this->load->view('insert');
	}

	public function insert_barang()
	{
		$data = array(
                'nama_barang' => $this->input->post('nama') ,
                // 'sem_date' => $date_formatted,
                'harga' =>$this->input->post('harga'),           
                'deskripsi' => $this->input->post('deskripsi'),
                'kategori' => $this->input->post('kategori'),
                // 'sem_img' => $image_path,
                );

		// var_dump($data);
		// die();

		$this->Barang_Model->add_barang($data);
		redirect('home'); 
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

	public function get_based_category($id)
	{
		// die();
		
		// $data = array('barang' => $this->Barang_Model->get_based_category($id) , );
		$data['cat'] = $this->Barang_Model->get_based_category($id);
		// echo "<pre>";
		// var_dump($id);
		// var_dump($data);
		// echo "</pre>";
		// die();
		$this->load->view('header');
		$this->load->view('category',$data);
	}

	public function get_cart($id)
	{
		$data['cart'] = $this->Barang_Model->get_cart($id);
		// echo "<pre>";
		// print_r ($data);
		// die();
		// echo "</pre>";
		$this->load->view('header');
		$this->load->view('cart', $data);
	}

	public function add_cart($id)
	{
		// $id = $this->input->post('id');
		$cart_data = $this->Barang_Model->get_one($id);
		// echo "<pre>";
		// var_dump ($cart_data);
		// die();
		// echo "</pre>";
		$cart = array('id_user' => $this->session->userdata('id_user'),
						'id_barang' => $cart_data[0]->id_brg,
						'qty' => 1,
				);
		// echo "<pre>";
		// print_r ($cart);
		// die();
		// echo "</pre>";
		$data = array('barang' => $this->Barang_Model->get_one($id) , );
		// var_dump($data);
		// die();
		$this->Barang_Model->add_cart($cart);
		// redirect('detail',$data);
		$this->load->view('header');
		$this->load->view('detail', $data);
	}

	public function get_all()
	{
		$data['all'] = $this->Barang_Model->get_all();
		// echo "<pre>";
		// print_r ($data);
		// die();
		// echo "</pre>";
		$this->load->view('header');
		$this->load->view('list', $data);
	}

	public function delete_cart($id)
	{
		$this->Barang_Model->delete_cart($id);
		$uid = $this->session->userdata('id_user');
		$data['cart'] = $this->Barang_Model->get_cart($uid);
		$this->load->view('header');
		$this->load->view('cart', $data);
	}

	public function delete_barang($id)
	{
		$this->Barang_Model->delete_barang($id);
		$data['all'] = $this->Barang_Model->get_all();
		$this->load->view('header');
		$this->load->view('list', $data);
	}

	

}

/* End of file  */
/* Location: ./application/controllers/ */ ?>