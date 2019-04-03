<?php

class Accounts extends CI_Controller {
  public function login() {

    $response = array();

    $account_id = $this->input->post('account_id', true);
    $password = $this->input->post('password', true);

    if ($this->accounts_model->validate($account_id, $password)) {

      $records = $this->accounts_model->getMyRecords($account_id);

      //:: Initializes account data for creating a session
      $account_data = array(
        'account_id' => $account_id,
        'organization' => $records['Organization'],
        'org_logo' => $records['Org_Logo'],
        'logged_in' => true,
      );

      //:: Creates session using the account data
      $this->session->set_userdata($account_data);

      $response['success'] = true;

      if ($this->session->userdata('referred_from')) {
        $response['referred'] = $this->session->userdata('referred_from');
        $this->session->unset_userdata('referred_from');
      }
      echo json_encode($response);
    } else {
      $response['success'] = false;
      echo json_encode($response);
    }

  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('login');
  }
}

?>
