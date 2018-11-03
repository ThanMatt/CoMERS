<?php 

class Accounts extends CI_Controller {
  public function login() {

    $response = array();

    $account_id = $this->input->post('account_id');
    $password = $this->input->post('password');

    if ($this->accounts_model->validate($account_id, $password)) {
      $response['success'] = true;
      echo json_encode($response);
    } else {
      $response['success'] = false;
      echo json_encode($response);
    }

  }
}

?>