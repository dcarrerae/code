<?php
class Probar extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('probar_model');
                $this->load->helper('url_helper');
        }       
        public function metodo_get(){
            $this->probar_model->modelo_get();
        }
        public function metodo_post(){
            $this->probar_model->modelo_post();
        }
        public function metodo_put(){
            $this->probar_model->modelo_put();
        }
        public function metodo_delete(){
            $this->probar_model->modelo_delete();
        }

}