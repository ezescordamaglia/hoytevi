<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class User extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'USER')
		{
			redirect(base_url().'login');
		}
		$data['titulo'] = 'Bienvenido Usuario';
		$this->load->view('header');
		$this->load->view('user_view', $data);
		$this->load->view('footer');
	}
}
