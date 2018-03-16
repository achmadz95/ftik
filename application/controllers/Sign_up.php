<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
                //$this->load->library('encryption');
	}

	public function index()
	{
		$this->load->view('Sign_up');

	}

	public function create() {
		$this->load->library('form_validation');
        $this->form_validation->set_rules('nama_user', '', 'required');
        $this->form_validation->set_rules('email', '', 'required');
        $this->form_validation->set_rules('username', '', 'required');
        $this->form_validation->set_rules('password', '', 'required');

		$nama = $this->input->post('nama_user');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
      	$password  = $this->input->post('password');
      	$sha1 = sha1($password);

	    $data = array(
	    	'deskripsi_user'=> 'Mahasiswa',
	    	'nama_user'=> $nama,
	    	'email'=> $email,
            'username' => $username,
            'password'  => $sha1,        
	        );
        	
        	if($this->form_validation->run()){
                $this->My_Model->addDataUser($data);
            	echo "<script>alert('Anda berhasil mendaftar') ; window.location.href = '../'</script>";
//          		echo "gagal";
            }else{
           		echo "Format input salah!";
            }
    
    }
  
}
?>