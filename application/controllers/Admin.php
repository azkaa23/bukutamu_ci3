<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @property CI_Input $input
 * @property Guest_model $Guest_model
 */
class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Guest_model');
    }

    public function index() {
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        $data['guests'] = $this->Guest_model->get_entries($from, $to);
        $this->load->view('admin_list', $data);
    }

    public function export_csv(){
        $from = $this->input->get('from');
        $to = $this->input->get('to');
        $data['guests'] = $this->Guest_model->get_entries($from, $to);
        $this->load->view('csv_export', $data);
    }
}
