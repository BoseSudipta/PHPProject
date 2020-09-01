<?php
class EmailController extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
	}
	public function contact(){
		$data['title']='title';

		$this->load->view('header');
		$this->load->view('contact');
	}
	function send(){
		$this->load->library('email');
		$config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'smtp.gmail.com',
        'smtp_port' => 587,
        'smtp_user' => 'sudiptabose96@gmail.com',
        'smtp_pass' => 'AC9b8121995',
        'smtp_crypto' => 'tls',
        'mailtype'  => 'text', 
        // 'charset'   => 'iso-8859-1',
        // 'wordwrap'  => TRUE
        );
		
		// $to=$this->config->item('smtp_user');
		$from=$this->input->post('email');
		$msg=$this->input->post('message');
		$phn=$this->input->post('phn');
		$name=$this->input->post('User_name');

		 $this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from($from);
        $this->email->to('sudiptabose96@gmail.com','sudipta');
        $this->email->message($msg);
        
        if($this->email->send()){

        	redirect('EmailController/contact');
        }
        else{
        	show_error($this->email->print_debugger());
        }
	}
}


?>