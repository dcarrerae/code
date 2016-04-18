<?php
class User_model extends CI_Model {

        public function __construct()
        {
        	$this->load->database();
        }

		public function readUsers()
		{
		    $query = $this->db->query('select * from user');

			// $obj = $query->result_array();
			// print_r($obj[0]['id']);
			// print_r("-----");
			//------->bueno--------
			// $objj = json_encode($query->result_array());
			// $objj = json_decode($objj);
			// echo $objj[1]->name;
			// echo "</br>";
			// foreach ($objj as $product) {
			//     print_r($product->id);
			//     echo ("</br>");
			// }
			//-------->bueno-----------
		    return json_encode($query->result_array());   
		}

		public function readUser($id = FALSE)
		{ 
            $query = $this->db->query('select * from user where id = "'.$id.'" ');
            return $query->result_array();
		}

		public function createUser()
		{
		    $this->load->helper('url');
		    $data = array(
		        'name' => $this->input->post('name'),
		        'surname'  => $this->input->post('surname'),
		        'email'  => $this->input->post('email')
		    );
		    return $this->db->insert('user', $data);
		}

		public function deleteUser($id = FALSE)
		{
		    $this->load->helper('url');
		    return $this->db->delete('user', array('id' => $id)); 
		}

		public function updateUser($id = FALSE)
		{
			$this->db->set('name', 'Diego');
			$this->db->where('id', $id);
			$this->db->update('user');
		}
}












