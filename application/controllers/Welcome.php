<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		
		$this->load->view('welcome_message');
	}
	public function get(){
		
		

		/*$keyword = $this->input->post('term');

     $data['response'] = 'false'; //Set default response

    $query = $this->my_model->search_country($keyword); //Model DB search

    if($query->num_rows() > 0){
       $data['response'] = 'true'; //Set response
       $data['message'] = array(); //Create array
       foreach($query->result() as $row){
          $data['message'][] = array('label'=> $row->skill, 'value'=> $row->skill); //Add a row to array
       }
    }
    echo json_encode($data);
*/





    $this->load->model('my_model');
		//if(isset($_GET['term'])){

		$result = $this->my_model->search_country($_GET['term']);

		if(count($result) > 0){
			foreach($result as $k)
					$arr[] =  $k->skill;

				echo json_encode($arr);
			
		}
			
		
		//}	
			
	}



	public function dataitem(){


		$d = $this->input->post('data');

		echo $d;


	}
}
