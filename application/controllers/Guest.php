<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property CI_Form_validation $form_validation
 * @property Guest_model $Guest_model
 */

class Guest extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Guest_model');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
    }

    public function index() {
        $this->form_validation->set_rules('name','Nama','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('message','Pesan','required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('guest_form');
        } else {
            $this->Guest_model->insert_entry();
            $this->load->view('guest_success');
        }
    }
}
