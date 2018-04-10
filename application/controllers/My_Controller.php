<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

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
		$id=$this->session->userdata('id_user');
		$data['err_message'] = "";
		$data['data1'] = $this->My_Model->getDataSlider(); //['data1'] sesuaikan sama view
		$data['data2'] = $this->My_Model->getDataUser('user','','')->result_array();
		$this->load->view('Home', $data);
	}

	public function statistik()
	{
		$id=$this->session->userdata('id_user');
		$data['err_message'] = "";
		$data['data1'] = $this->My_Model->getDataSlider(); //['data1'] sesuaikan sama view
		$data['data2'] = $this->My_Model->getDataUser('user','','')->result_array();
		$this->load->view('Statistik', $data);
	}

	public function login()
	{
		if($this->session->userdata('username')){
			redirect('My_Controller/admin');
		}else{
			$this->load->view('Login');
		}
	}
	
	public function logout()
	{
//		if($this->session->userdata('username'))
		{
			$this->session->sess_destroy();
                redirect('login');}}
        
	

	public function user()
	{
		if($this->session->userdata('username'))
		{
			redirect('My_Controller/readDataUser');
		}else{
			redirect('My_Controller/login');}}
        
        
            

	public function admin()
	{
		if($this->session->userdata('username'))
		{
                    redirect('My_Controller/user');
		}else{
                    redirect('My_Controller/login');}}
        
	

	public function login_admin(){
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');
        $sha1 = sha1($password);
	    $isLogin = $this->My_Model->loginadmin($username, $sha1);
	    $userpass = array(
	    	'username' => $username,
	    	'password' => $sha1
	    	);    

	    if($isLogin==true){
	    	$this->session->set_userdata('isLogin', TRUE);
	    	if($_SESSION['isLogin']==true){
	    		// $this->session->set_userdata('akses',TRUE);
	    		$this->session->set_userdata('id_user',$data['id_user']);
        		$this->session->set_userdata('nama_user',$data['nama_user']);
		    	$this->session->set_userdata('username', $username);
		    	$this->session->set_userdata('isAdmin',$data['isAdmin']);

		    	redirect('My_Controller/user');
	    	}
    	
        }else{
            // echo "<script> alert('Username atau Password yang anda masukkan salah!') </script>";
            $message = "Username atau Password yang anda masukkan salah!";
            echo "<script type='text/javascript'>alert('$message');window.location.href='".site_url('login')."';</script>";
	  	
	  		$this->load->view('Login');
		}
	}
	
	public function readDataUser() {
        $data=$this->My_Model->getDatauser('user','','')->result_array();
        $kirim['data']  = $data;
        $this->load->view('User', $kirim);
  	}

  	public function download() { // Download File report to excel
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ftik";
		//mysql and db connection

		$con = new mysqli($servername, $username, $password, $dbname);

		if ($con->connect_error) {  //error check
    		die("Connection failed: " . $con->connect_error);
		}
		else
		{

		}


		$DB_TBLName = "user"; 
		$filename = "DataMahasiswa_ftik";  //your_file_name
		$file_ending = "xls";   //file_extention

		header("Content-Type: application/xls");    
		header("Content-Disposition: attachment; filename=$filename.xls");  
		header("Pragma: no-cache"); 
		header("Expires: 0");

		$sep = "\t";

		$sql="SELECT id_user,nama_user,email,username,deskripsi_user  FROM $DB_TBLName"; 
		$resultt = $con->query($sql);
		while ($property = mysqli_fetch_field($resultt)) { //fetch table field name
    		echo $property->name."\t";
		}

		print("\n");    

		while($row = mysqli_fetch_row($resultt))  //fetch_table_data
		{
    		$schema_insert = "";
    		for($j=0; $j< mysqli_num_fields($resultt);$j++)
    		{
        		if(!isset($row[$j]))
            	$schema_insert .= "NULL".$sep;
        	elseif ($row[$j] != "")
            	$schema_insert .= "$row[$j]".$sep;
        	else
            	$schema_insert .= "".$sep;
    	}
    		$schema_insert = str_replace($sep."$", "", $schema_insert);
    		$schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
    		$schema_insert .= "\t";
    		print(trim($schema_insert));
    		print "\n";
		}
  	}

    public function edit($ID){
		$where = array('id_user' => $ID);
		$data['user'] = $this->My_Model->edit_user($where,'user')->result();
		$this->load->view('Edit_user', $data);
	}

	public function update(){
		$id = $this->input->post('id_user');
		$nama = $this->input->post('nama_user');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$sha1 = sha1($password);

       	$data = array(
       		'nama_user' => $nama,
			'email' => $email,
			'username' => $username,
			'password' => $sha1,
		);

       	$this->session->set_userdata('username', $username);

       	$where = array(
			'id_user' => $id
		);

        $this->My_Model->UpdateUser($where,$data,'user');
		redirect('My_Controller/readDataUser');
		
	}

  	public function deleteuser($ID){ //delete 1 user
    	$res = $this->My_Model->delete_item_user($ID);
    	redirect('My_Controller/readDataUser');}
  
}
?>