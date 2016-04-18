<?php
class User extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('user_model');
            $this->load->helper('url_helper');
        }       

        public function index()
        {
            $this->load->helper('form');
            $data['json'] = $this->user_model->readUsers();

            // echo $data;
            // $obj = json_decode($data['hola']);
            // print($obj[0]);

            // print($data);
            // print($data['hola']);
            // $data['title']     = "This is the users";
            // if (empty($data['user_item'])) {
            //    show_404();
            // }
            $this->load->view('user/view_users', $data);
        }

        public function readUsers()
        {
            $this->load->helper('form');
            $data['json'] = $this->user_model->readUsers();
            echo $data['json'];
        }       

        public function createUser()
        {

            $this->load->helper('form');
            $this->user_model->createUser();
            $data['user_item'] = $this->user_model->readUsers(); //voy a buscar los datos de la BD
            $data['title']     = "exito en la inserción";
            $this->load->view('user/view_users', $data);
        } 

        public function deleteUser($id = NULL)
        {
            $this->user_model->deleteUser($id);
        } 

        public function updateUser($id = NULL)
        {
            $this->user_model->updateUser($id);
        }    
}











