<?php
error_reporting(E_ALL);
class FormModel extends CI_Model
{
	//  function saverecord($fn,$ln,$password,$email,$phn,$b,$img){
	// 	$qry="INSERT INTO table1 VALUES('','$fn','$ln','$password','$email','$phn','$b','$img')";
	// 	$this->db->query($qry);
	// }
    // $d=$this->session->userdata('id');
    public function save($userdata){
        $this->db->insert('table1',$userdata);//INSERT INTO table1('','','','','','')VALUES('','','','','','');
        return $this->db->insert_id();
        // return $qry->result();
    }

    public function login($email,$password)
        {
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get('table1');

        if($query->num_rows() == 1) {
            $q = $query->row();
            return $q;
        }

        // return false;

        return false;

    }



	 // public function login($email,$password)
  //   {
        // $this->db->where('email', $email);
        // $this->db->where('password', md5($password));
        // $query = $this->db->get('table1');
        // $query=$this->db->query('SELECT * FROM table1' );
 // $password=md5($password);

        // $sql=$this->db->query("SELECT * FROM table1 WHERE email='$email' AND password='$password' ");
        // if($sql->num_rows()){
        //     $arr=array('id'=>$sql->row()->id);
        //     return $arr;

        // if($query->num_rows() == 1) {
        //     // echo "Hi";
        // //   $this->db->where('email', $email);
        // // $this->db->where('password', md5($password));

        //     return $query->result();

        // }
        // return $query->num_rows();''
        // return false;


    public function profile_data($id){
       $q=$this->db->query("SELECT * FROM table1 where id= '".$id."' ");//profile data
        return $q->row();
            }
    public function update_data($id,$data){

        $this->db->where('id',$id);
        $this->db->update('table1',$data);

        // $this->db->update('table1', $data, 'id="'.$id.'"');

    }
    // $id=$this->session->userdata('id');
    public function profile_delete($id){
        $this->db->query('delete from table1 where id="'.$id.'"');
    }
     // $id=$this->session->userdata('id');

    public function get_phone_numbers($id){

        $qry=$this->db->query('select phone from protect where id="'.$id.'" ');
        return $qry->result();
    }

    public function showdisc(){
        $qry=$this->db->query('select post_id,Topic,Content,Datetime FROM post');
        return $qry->result();
    }

    public function showpost($p_id){
        $qry=$this->db->query('select Topic,Content,post_id from post where post_id="'.$p_id.'" ');
        return $qry->result();
    }
    public function comment_post($data){
        // $qry=$this->db->query("INSERT INTO comments VALUES('','$comm','$post_id','$id')");
       if($this->db->insert('comments',$data)) {
        return 1;
       }
       else{
        return 0;
       }
       // $this->db->query($qry);
}

    // public function user_id(){
    //     $qry=$this->db->query('select i')
    // }
    // public function get_comment($post_id){
    // $query=$this->db->get_where('comments',$post_id);
    //    // $results=$query->result();
    //    if ($query->num_rows() > 0) {
    //         $items = array();
    //         foreach ($query->result() as $row) {
    //             $items[] = $row;
    //         }
    //         //return $items;
    //         $comments = $this->format_comments($items);
    //         return $comments;
    //     }
    //     return '<ul class="comment"></ul>';
    // }
//     public function get_comments($post_id){
//       $result=$this->db->get_where('comments',$post_id);
//       return $result;
// }
public function show_comment($post_id){
  $result=$this->db->query("select * from comments where post_id='".$post_id."' ");
  return $result;
}

}
?>
