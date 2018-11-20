<?php
class AdminModel extends CI_Model
{
	public function __construct()
    {
         parent::__construct();
         $this->load->database();
       
    }

   function saveData($data,$tablename)
   {
	  $this->db->insert($tablename, $data); 
	   //$this->db->last_query();
	   $insert_id = $this->db->insert_id();
	   return $insert_id;
   }
   
	
   function updateData($where,$data,$table){
	   
		$update = $this->db->update($table,$data,$where);
		return $update;
   }
		   
   	function getData($table,$where){
	   $this->db->select('*');
	   $this->db->from($table);				   
	   
	   if(!empty($where) || $where != false){
			$this->db->where($where);
	   }			
	   $query = $this->db->get();
	   //echo $this->db->last_query();
	   $result=$query->result();
	   if($query->num_rows()>0) {
		   $result=$query->result_array();
		   return  $result;
	   }
	   else
	   {
		   return array(); 
	   }	
	}
		
					
}
