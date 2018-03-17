<?php

class Profile extends CI_Controller{

    function __construct(){	
		parent::__construct();	
		$this->load->model('My_Model');
	}

    public function index(){
		$id=$this->session->userdata('id_user');
		
	}

    public function edit_data(){
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
            
            $this->My_Model->edit_user('user',$data,'id_user ='.$id);

            redirect('My_Controller/readDataUser');
        
    }
}

?>