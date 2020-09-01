<?php
/**
 *
 */
class AdminModel extends CI_Model
{
	  public function admin_login($email,$password){

            $this->db->where('email',$email);
            $this->db->where('password',$password);
            $result=$this->db->get('admin');

            if($result->num_rows()==1){
                $q=$result->row();
                return $q;

        }
        return false;
    }

    // public function timestamp(){

    // }

    public function post_save($post_data,$datetime){
    	$this->db->insert('post',$post_data,$datetime);
    	// $this->db->insert('post',$datetime);
    	return $this->db->insert_id();

    }

    public function records(){
        $qry=$this->db->query('select * from table1');
        return $qry->result();
    }

    public function record_edit($id){
        $qry=$this->db->query('select * from table1 where id="'.$id.'"');
        // print_r($qry);
        return $qry->row();
    }
		public function record_update($id,$userdata){
			$this->db->where('id',$id);
			$this->db->update('table1',$userdata);
		}
    // // public function record_update(){
		// 	$id=$this->input->post('id');
		// 	$f_name=$this->input->post('f_name');
		// 	$l_name=$this->input->post('l_name');
		// 	$password=md5($this->input->post('password'));
		// 	$email=$this->input->post('email');
		// 	$phone_number=$this->input->post('phone_number');
		// 	$birth_date=$this->input->post('birth_date');
		// 	$this->db->set('first_name', $f_name);
		// 	$this->db->set('last_name', $l_name);
		// 	$this->db->set('password', $password);
		// 	$this->db->set('email', $email);
		// 	$this->db->set('phone', $phone_number);
		// 	$this->db->set('birth_date', $birth_date);
		//
		// $this->db->where('id', $id);
		// $result=$this->db->update('table1');
		// return $result;
    // }

    public function record_del($id){
        $qry=$this->db->query('DELETE FROM table1 where id="'.$id.'" ');
    }
    public function profile($ad_id){
        $qry=$this->db->query('SELECT * FROM admin where ad_id="'.$ad_id.'" ');
        return $qry->row();
    }

    public function profile_update($ad_id,$data){
        $this->db->where('ad_id',$ad_id);
        $this->db->update('admin',$data);
    }


}

?>
