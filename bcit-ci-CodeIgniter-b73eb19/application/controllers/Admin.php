<?php
defined('BASEPATH')OR exit('NO DIRECT SCRIPT ALLOWED');

/**
 *
 */
class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function admin(){
		$this->load->view('admin/admin');
	}

	//admin login
	public	function admin_login_action(){
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');

		if($this->form_validation->run()==FALSE){
			$this->load->view('Admin/admin_login');
		}
		else{
			$email=$this->security->xss_clean($this->input->post('email'));
			$password=$this->security->xss_clean($this->input->post('password'));
			$admin=$this->AdminModel->admin_login($email,$password);

			if($admin){
				$admin=array(
					'ad_id'=>$admin->ad_id,
					'name'=>$admin->name,
					'authenticated'=>TRUE);
				$this->session->set_userdata($admin);
				// $show=$this->session->userdata();
				// print_r($show);
				redirect('Admin_dashboard/admin_page');

			}
			else{
				echo "Error";
			}
		}
	}

	private function admin_logged_in(){
		if(!$this->session->userdata('authenticated')){
			redirect('Admin/admin');
		}
	}

	public function discussion(){
		if(!$this->session->userdata('authenticated')){
			redirect('Admin/admin');
		}
		else{
		$this->load->view('admin/admin_header');
		$this->load->view('admin/admin_disc');
		}


	}
	public function disc_save(){
		$post_data=array(
				'Topic'=>$this->input->post('topic'),
				'Content'=>$this->input->post('content'),
				'ad_id'=>$this->session->userdata('ad_id')
			);
		// print_r($post_data);
		$datetime=date('Y-m-d h:i:sa',time());
			$this->AdminModel->post_save($post_data,$datetime);
			redirect('Admin/discussion');

	}

	public function records(){
		$result['data']=$this->AdminModel->records();
		// print_r($result['data']);
		$this->load->view('admin/admin_header');
		$this->load->view('admin/records',$result);
	}
	public function record_del($id){
		$this->AdminModel->record_del($id);
		redirect('Admin/records');
	}

	public function record_edit(){
		$id=$this->input->post('id');
		$result=$this->AdminModel->record_edit($id);

		echo json_encode($result);

		}
// public function record_update(){
// 	// $r=$this->AdminModel->record_update();
// 	// print_r($r);
// 	// echo json_encode($r);
// 	$id=$this->input->post('id');
// 	$f_name=$this->input->post('f_name');
// 	$l_name=$this->input->post('l_name');
// 	$password=md5($this->input->post('password'));
// 	$email=$this->input->post('email');
// 	$phone_number=$this->input->post('phone_number');
// 	$birth_date=$this->input->post('birth_date');
// print_r($id);
// 	$this->db->set('first_name', $f_name);
// 	$this->db->set('last_name', $l_name);
// 	$this->db->set('password', $password);
// 	$this->db->set('email', $email);
// 	$this->db->set('phone', $phone_number);
// 	$this->db->set('birth_date', $birth_date);
//
// $this->db->where('id', $id);
// $result=$this->db->update('table1');
// echo json_encode($result);
// }
public function record_update(){
	$id=$this->input->post('id');
	// print_r($id);
		$userdata=array(
			'first_name'=>$this->input->post('first_name',TRUE),
			'last_name'=>$this->input->post('last_name',TRUE),
			'password'=>md5($this->input->post('password',TRUE)),
			'email'=>$this->input->post('email',TRUE),

			'phone'=>$this->input->post('phone',TRUE),
			'birth_date'=>$this->input->post('birth_date',TRUE)
			// 'image'=>$this->input->post('img')
			// 'created_at'=>date('Y-m-d H:i:s',time()),
		);
		$this->AdminModel->record_update($id,$userdata);
		// $this->db->where('id',$id);
		// $this->db->update('table1',$data);
		redirect('Admin/records')
;}
	// public function record_update(){
	// 	if ($this->input->post('update')) {
	// 		$id=$this->input->post('id');
	// 		print_r($id);
	// 	$data=array(
	// 		'first_name'=>$this->input->post('first_name'),
	// 		'last_name'=>$this->input->post('last_name'),
	// 		'password'=>$this->input->post('password'),
	// 		'email'=>$this->input->post('email'),
	// 		'phone'=>$this->input->post('phone'),
	// 		'birth_date'=>$this->input->post('birth_date')
	// 	);
		// print_r($id);
		// print_r($data);


  //  $this->AdminModel>record_update($id,$data);
  //  redirect('Admin/records');
  // } else{
	// 	echo "something wrong";
  //  redirect('Admin/records');
  // }
 // }




	public function profile(){
		$ad_id=$this->session->userdata('ad_id');
		$result['data']=$this->AdminModel->profile($ad_id);
		// print_r($result);
		$this->load->view('admin/admin_header');
		$this->load->view('admin/admin_profile',$result);
}
	public function profile_update(){
		$ad_id=$this->session->userdata('ad_id');
		$data=array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'phone'=>$this->input->post('phone')
		);
		$this->AdminModel->profile_update($ad_id,$data);
		redirect('Admin/profile');
}



}

?>
