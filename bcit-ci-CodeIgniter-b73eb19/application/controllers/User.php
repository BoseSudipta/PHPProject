<?php
error_reporting(E_ALL);
header("Access-Control-Allow-Origin: *");
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		// $this->load->database();
		// $this->load->model('FormModel');
		// $this->load->helper('url','form');
		// $this->load->library('form_validation');
		// $this->load->library('session');

		//User login status
		 // $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');

	}
	// public function viewload(){
	// 	$this->load->view('reg');
	// }
	public function reg(){
		// $data['title']="Sign up";

		$this->form_validation->set_rules('first_name','first name','trim|required');
		$this->form_validation->set_rules('last_name','last name','trim|required');
		$this->form_validation->set_rules('password','password','trim|required|min_length[8]');
		$this->form_validation->set_rules('email','email','trim|required');

		$this->form_validation->set_rules('phone','phone number','required');
		$this->form_validation->set_rules('birth_date','birth date','required');

		$this->form_validation->set_error_delimiters('<div class="error">','</div>');

		if($this->form_validation->run() == false){

			$this->load->view('header');
			$this->load->view('reg');
			$this->load->view('footer');
		}
		else{
			$userdata=array(
				'first_name'=>$this->input->post('first_name',TRUE),
				'last_name'=>$this->input->post('last_name',TRUE),
				'password'=>md5($this->input->post('password',TRUE)),
				'email'=>$this->input->post('email',TRUE),

				'phone'=>$this->input->post('phone',TRUE),
				'birth_date'=>$this->input->post('birth_date',TRUE),
				// 'image'=>$this->input->post('img')
				// 'created_at'=>date('Y-m-d H:i:s',time()),
			);
			$this->FormModel->save($userdata);

			$this->session->set_flashdata('message','Registration successfully.');
			redirect('User/login');
		}

	}


	public function login(){
		// $data['title']="Login";
		 // if( $this->session->userdata('authenticated')) {
   //          redirect('dashboard');
   //      }

		$this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');

		if($this->form_validation->run() == false){
			// $this->load->view('header',$data);
			$this->load->view('User/login');
			// $this->load->view('footer',$data);
		}
		else{
			$email=$this->security->xss_clean($this->input->post('email'));
			$password=$this->security->xss_clean($this->input->post('password'));
			$user=$this->FormModel->login($email,$password);

			// print_r($user);
			// echo $user;
			// if($user=null){
			// 	$email=$this->security->xss_clean($this->input->post('email'));
			// 	$password=$this->security->xss_clean($this->input->post('password'));
			// 	$admin=$this->FormModel->admin_login($email,$password);

			// 	if ($admin) {
			// 		echo "HI";
			// 	}
			// 	else{
			// 	echo "BOO";
			// 	// redirect('User/login');
			// }
			// }

			 if($user){ /* add else for the admin login*/
				$userdata=array(
					'id'=>$user->id,
					'first_name'=>$user->first_name,
					// 'last_name'=>$user->last_name,
					// 'email'=>$user->email,
					// // // 'password'=>$user->password,
					// 'phone'=>$user->phone,
					// 'birth_date'=>$user->birth_date,
					// 'image'=>$user->image,
					'authenticated'=>TRUE);
				$this->session->set_userdata($userdata);
				// $createdby=$this->session->userdata('id');

				redirect('Dashboard/index');
				// header('location:index111');
			}
			else{
				$this->session->set_flashdata('message','Invalid email address');
				redirect('User/login');
			}
		}

	}

	// public function index111()
 //    {
 //        $data['title'] = "Dashboard";

 //        $this->load->view('header', $data);
 //        $this->load->view('dashboard/index', $data);
 //        // $this->load->view('footer', $data);
 //    }

	 public function logout()
    {
        $this->session->sess_destroy();
        redirect('User/home');
    }



	private function logged_in(){
		if(! $this->session->userdata('authenticated')){
			redirect('User/login');
		}

}

	public function profile(){
		$id=$this->session->userdata('id');

		$pd['data']=$this->FormModel->profile_data($id);
		// print_r($pd);
		$this->load->view('header');
		$this->load->view('profile',$pd);
	}
	public function update(){
			$id=$this->session->userdata('id');
			$data=array(
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('last_name'),
			'password'=>md5($this->input->post('password')),
			'email'=>$this->input->post('email'),
			'phone'=>$this->input->post('phone'),
			'birth_date'=>$this->input->post('birth_date')
			);



			 print_r($data);
			$this->FormModel->update_data($id,$data);

			// $userdata=array(
			// 	$s=$this->session->userdata($id,$first_name),
			// 	'authenticated'=>TRUE

			// );
			// $this->session->userdata($userdata);
			redirect('User/profile');
		}

	// public function update(){

	// 	$data=array(
	// 		'first_name'=>$this->input->post('first_name'),
	// 		'last_name'=>$this->input->post('last_name'),
	// 		'password'=>md5($this->input->post('password')),
	// 		'email'=>$this->input->post('email'),
	// 		'phone'=>$this->input->post('phone'),
	// 		'birth_date'=>$this->input->post('birth_date'),
	// 		'image'=>$this->input->post('image'),
	// 	);
	// 	// print_r($data);
	// 	$id=$this->session->userdata('id');
	// 	$this->FormModel->update_data($id,$data);
	// 	// $this->session->set_userdata($id,$data);
	// 	//
	// 	//
	// 	redirect('dashboard');
	// }
	public function delete_data(){
		$id=$this->session->userdata('id');
		$this->FormModel->profile_delete($id);
		 $this->session->sess_destroy();
		redirect('User/home');
	}



	public function home(){
		$this->load->view('header');
		$this->load->view('dashboard/index');
		// $this->load->view('footer');
	}
	public function prevention(){
		$this->load->view('prevention');
	}
	public function news_events(){
		$this->load->view('news_events');
	}
	public function disc(){
		$result['data']=$this->FormModel->showdisc();
		$this->load->view('header');
		$this->load->view('discussion',$result);
	}

	public function post_page($p_id){

		// echo $id;
		$result['d']=$this->FormModel->showpost($p_id);

		$this->load->view('header');
		$this->load->view('post',$result);

	}
	public function comment(){
		$post_id=$_POST['post_id'];
		$comm=$_POST['comment_content'];
		// echo $post_id;
		$data=array(
			'comm'=>$comm,
			'post_id'=>$post_id,
			'id'=>$this->session->userdata('id')
		);
		// 	$data=array(
		// 	'comm'=>'1',
		// 	'post_id'=>8,
		// 	'id'=>3
		// );
		$result=$this->FormModel->comment_post($data);
		if($result){
			echo 1;
		}
		else{
			echo 0;
		}
	}
//
	// public function show_comment(){
	// 	// $post_id=$_POST['post_id'];
	// 	$post_id=$this->input->post('post_id');
	// 	$result=$this->FormModel->show_comment($post_id);
	// 	print_r($result);
	// // echo	json_encode($result);
	// }
	function show_comment()
	 {$post_id=$this->input->post('post_id');
			 // load table library
			 $this->load->library('table');

			 // set heading
			 $this->table->set_heading('comment');

			 // set template
			 $style = array('table_open'  => '<table class="table table-striped table-hover">');
			 $this->table->set_template($style);

			 echo $this->table->generate($this->db->query("select comm from comments where post_id='".$post_id."' "));
	 }
// public function show_comment(){
//       // $limit = $this->input->get('limit');
//       // $offset = $this->input->get('offset');
//       // $this->load->model('yourmodel');
//       $result  = $this->FormModel->get_comments($post_id);
//       // $data['view'] = $result;
//       // // $data['offset'] =$offset +10;
//       // // $data['limit'] =$limit;
//       // echo json_encode($data);
//
// 			$record_set = array();
// 			while ($row = mysqli_fetch_assoc($result)) {
//     	array_push($record_set, $row);
// 		}
// 		mysqli_free_result($result);
//
// 		mysqli_close($conn);
// 		echo json_encode($record_set);
//
//     }
	// public function profile(){
	// 	// $user=$this->session->userdata($userdata);
	// 	$this->load->view('header');
	// 	$this->load->view('profile');
	// }
	public function contact(){
		$this->load->view('contact');
	}

 // $id=$this->session->userdata('id');
	public function send(){
		$loc=$_POST['location'];
		 // echo gettype($loc);
		echo $loc;
		 $id=$this->session->userdata('id');

		$phone_result['data']=$this->FormModel->get_phone_numbers($id);
		// $s=new array{};
		$s=[];
		$i=0;
		foreach ($phone_result['data'] as $d) {
			$s[$i] = $d->phone;
			$i++;
		}
		// $phone_num=implode(" ", $phone_result);
		 $phone_no = implode(',',$s);
		 echo $phone_no;//to show the phone no

			// return $phone_no;
		 if($phone_no){

	// // public function send(){

    	// Account details
    	$apiKey = urlencode('d1jb07ftqHg-JpnjtBDnObvvxmixgPlZpmJ0I6Yzkf');

    	$messageData = "Help me ".$loc;
    	// Message details
    	$numbers =$phone_no;
    	$sender = urlencode('TXTLCL');
    	$message = rawurlencode($messageData);
    	// $message=$loc;

    	// $numbers = implode(',', $numbers);

    	// Prepare data for POST request
    	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

    	// Send the POST request with cURL
    	$ch = curl_init('https://api.textlocal.in/send/');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
    	curl_close($ch);


    	echo $response;

	}
}

}

?>
