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
		$this->load->view('Statistik');
	}
  
}
?>