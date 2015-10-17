<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Offers_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get($keyword=null,$id=null,$price=null,$place_id=null)
	{
		if(empty($keyword) && empty($id) && empty($price) && empty($place_id)) return array();
		
		$this->db->select('`Offers`.`id`,
						   `Offers`.`name` as `offer_name` ,
						   `Business`.`name` as  `business_name`,
						   `Offers`.`price`,
						   `Offers`.`description`,
						   `Places`.`id` as `place_id`,
						   `Places`.`name` as `place_name`,
						   `Business`.`long`,
						   `Business`.`lat`' )
				 ->from('`Offers`')
				 ->join('`Business`','`Business`.`id`=`Offers`.`business_id`')
				 ->join('`Keywords`','`Keywords`.`offer_id`=`Offers`.`id`')
				 ->join('`Places`','`Places`.`id`=`Business`.`place_id`')
				 ->order_by('`Offers`.`price`','ASC');

		if(!empty($keyword))$this->db->like('`Keywords`.`name`',$keyword);				 
		if(!empty($price)) $this->db->where('`Offers`.`price`<=',$price);
		if(!empty($id)) $this->db->where('`Offers`.`id`',$id);
		if(!empty($pplade_id)) $this->db->where('`Places`.`id`',$place_id);
		
		$q=$this->db->get();

		return $q->result_array();		
	}
	
}
