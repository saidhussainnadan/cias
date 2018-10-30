<?php

/**
 * 
 */
class my_model extends CI_model
{
	
	
	 
	public function search_country($keyword)
    {




    	$this->db->like('skill', $keyword , 'both');
        $this->db->order_by('skill', 'ASC');
        $this->db->limit(10);
         $Q = $this->db->get('skills');

        if($Q->num_rows() > 0){
        	
    	return $Q->result();
	     }
       




        /*$this->db->select('skill');
        $this->db->from('skills');
        
        $this->db->like('skill', $keyword);
        $this->db->order_by("skill", "asc");

        $query = $this->db->get();
        foreach($query->result_array() as $row){
            //$data[$row['friendly_name']];
            $data[] = $row;
        }
        //return $data;
        return $query;*/
    }
}