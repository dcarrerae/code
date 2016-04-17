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
            $data['user_item'] = $this->user_model->readUsers();
            if (empty($data['user_item'])) {
               show_404();
            }
            $this->load->view('templates/header', $data);
            $this->load->view('user/view_users', $data);
        }

        public function readUser($id = NULL)
        {
            $data['user_item'] = $this->user_model->readUser($id);
            if (empty($data['user_item'])) {
                show_404();
            }
            $data['title'] = "This is the user";
            $this->load->view('templates/header', $data);
            $this->load->view('user/view_user', $data);
        }       

        public function createUser()
        {
            $this->load->helper('form');
            $this->user_model->createUser();
            $data['user_item'] = $this->user_model->readUsers(); 
            $data['title']     = "éxito en la inserción";
            $this->load->view('templates/header', $data);
            $this->load->view('user/view_users', $data);
        } 

        public function deleteUser($id = NULL)
        {
            $this->user_model->deleteUser($id);
        }    
}











