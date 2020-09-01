<?php
/**
 * 

 */
class ProtectModel extends CI_Model
{
	public function saverecord($p){
		$this->db->insert('protect',$p);//INSERT INTO protect('','','','','','')VALUES('','','','','','');
		return $this->db->insert_id();
	}
	public function displayrecords()
	{
		$createdby=$this->session->userdata('id');
		// $this->db->select('p.num,p.name,p.phone')
		$qry=$this->db->query("select p.num,p.name,p.phone from table1 as a,protect as p where p.id='".$createdby."' AND p.id=a.id ");
		// $qry=$this->db->query("select p.num,p.name,p.phone from protect as p join table1 as a on p.id=a.id where id='".$createdby."'  ");
		// $qry="select * from protect where id='".$_SESSION['userdata']."'";
		// $qry=$this->db->get_where('protect');
		// $qry=$this->db->get_where('protect',$userdata['id']);
		// $qry=$this->db->get_where('protect',$this->session->userdata['id']);
	// $qry=$this->db->query("select `num`,`name`,`phone` from protect where id=('select id from table1 where 'id'='"$userdata['id']"'   ')");
	// 	$id=$session->get('id');
	// 	$qry=$this->get_where('protect',$qry);
		return $qry->result();
		// print_r($qry);
	 }

	 public function delete_record($ph){
	 	$this->db->query('DELETE FROM protect where phone="'.$ph.'" ');
	 	
	 }
}



?>