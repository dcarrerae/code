<?php
class Probar_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

		public function modelo_get()
		{
			// $this->load->helper('url');
		    $data = array(
		        'title' => "get",
		        'slug' => "get",
		        'text' => "get"
		    );
		    return $this->db->insert('news', $data);
		}

		public function modelo_post()
		{
		    $data = array(
		        'title' => "post1",
		        'slug' => "post1",
		        'text' => "post1"
		    );
		    return $this->db->insert('news', $data);
		}

		public function modelo_put()
		{
		    $data = array(
		        'title' => "put",
		        'slug' => "put",
		        'text' => "put"
		    );
		    return $this->db->insert('news', $data);
		}

		public function modelo_delete()
		{
		    $data = array(
		        'title' => "delete",
		        'slug' => "delete",
		        'text' => "delete"
		    );
		    return $this->db->insert('news', $data);
		}
}