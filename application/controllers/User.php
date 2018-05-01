<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('User_Model');
	}

	public function log()
	{
		$this->load->view('header');
		$this->load->view('login');

	}

	public function reg()
	{
		$this->load->view('header');
		$this->load->view('register');
	}

    public function adm()
    {
        $this->load->view('header');
        $this->load->view('admin');
    }

	public function login()
	{
		$data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')) 
                );
		// var_dump($data);
		// die();
            $result = $this->User_Model->login($data);
            // var_dump($result);
            // die();
            if ($result == TRUE) {
                $username = $this->input->post('username');
                $final = $this->User_Model->user_info($username);
                // echo "<pre>";
                // var_dump($data);
                // var_dump($result);
                // var_dump($final);
                // die();
                // echo "</pre>";
                if ($final != false) {
                    $session_data = array(
                    	'id_user'	=> $final[0]->id_user,
                        'username' => $final[0]->username,
                        );

                    // echo "<pre>";
                    // var_dump ($session_data);
                    // die();
                    // echo "</pre>";
                    // Add user data in session
                    $this->session->set_userdata($session_data);
                    if ($this->session->userdata('username')=='admin') {
                    	redirect('admin');
                    }
                    else{

                    	redirect('home');
                    }
                }   
                else {
                $data = array('message_display' => 'Nama Pengguna atau Password Salah');
                
                $this->session->set_userdata( $data );
                redirect('product/login');
            	}
        	}
	}

	public function register()
	{
		$data = array(
						'username' => $this->input->post('username'), 
						'password' => md5($this->input->post('password')),
						// 'name' => $this->input->post('name'),
						// 'email' => $this->input->post('email'),
						// 'phone' => $this->input->post('phone'),
					);
			$this->User_Model->create_user($data);
			redirect('login');
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }

}

/* End of file  */
/* Location: ./application/controllers/ */ ?>