<?php   
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * 
 */
class Admin_dashboard extends CI_controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->admin_logged_in();
	}

	
	private function admin_logged_in(){
		if(!$this->session->userdata('authenticated')){
			redirect('Admin/admin');
		}
	}
	
	public function admin_page(){
		$this->load->view('admin/admin_header');
		$this->load->view('admin/admin_page');
	}

}


?>