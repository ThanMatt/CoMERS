<?php 

class Generate extends CI_Controller {


  public function index() {
    $this->load->view('edit');
  }

  public function template($system_name) {
    $account_id = $this->session->userdata('account_id');
    $title = $this->input->post('title');
  }

}


?>