<?php  

defined('BASEPATH')OR exit('No direct script is allowed');

class ProtectController extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProtectModel');
	}
	public function protectors(){
		$data['title']='Add New Protector';

		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('phone','Phone Number','required|min-length[10]');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');

		// if($this->form_validation->run()==false){

		// 	// $this->load->view('header',$data);
		// 	// $this->load->view('protectors',$data);
		// 	// redirect('ProtectController/showrecord',$data);
		// 	echo "error";
		// }
		// else{
		// $createdby=$this->session->userdata('id');
			$p=array(
				
			'name'=>$this->input->post('name',TRUE),
			'phone'=>$this->input->post('phone',TRUE),
			
			// 'id'=>$this->input->post("'".$createdby."'",TRUE),
			'id'=>$this->session->userdata('id'),
			);
			// print_r($p);
			$this->ProtectModel->saverecord($p);
			// echo "success";
			redirect('ProtectController/showrecord');
		}

	
	public function add_new(){
		$this->load->view('add_protector');
	}
	public function showrecord(){
		// $result['data']=$this->ProtectModel->displayrecords();
		// $this->load->view('header',$result);
		// $this->load->view('protectors',$result);
		// $id=$this->session->userdata['id'];
		$result['data']=$this->ProtectModel->displayrecords();
		
		// print_r($result);
		$this->load->view('header');
		 $this->load->view('protectors',$result);
	}

	public function delete_record($ph){
		$this->ProtectModel->delete_record($ph);
		redirect('ProtectController/showrecord');
	}
}


?>