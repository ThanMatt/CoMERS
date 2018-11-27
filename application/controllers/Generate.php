<?php 

class Generate extends CI_Controller {

  public function index() {

    $response = array();

    $account_id = $this->session->userdata('account_id');
    $system_id = rand(100000,999999);
    $register_name = $this->input->post('register_name', true);
    $event_name = $this->input->post('event_name', true);


    if ($this->templates_model->generateContent($system_id, $register_name, $account_id, $event_name)) {
      $response['success'] = true;
      $response['id'] = $system_id;
      echo json_encode($response);
    } else {
      echo json_encode($response);
    }



  }

}


?>