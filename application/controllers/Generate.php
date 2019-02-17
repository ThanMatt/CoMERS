<?php 

class Generate extends CI_Controller {

  public function index() {

    $response = array();

    $account_id = $this->session->userdata('account_id');
    $system_id = rand(100000,999999);
    $register_name = $this->input->post('register_name', true);
    $event_name = $this->input->post('event_name', true);

    $config = array(
      'upload_path' => 'assets/img/uploads/',
      'allowed_types' => 'jpg|jpeg|png',
    );

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('image_file')) {
      echo $this->upload->display_errors();
      exit;
    } else {
      $data = $this->upload->data();
      $logo = $data['file_name'];
    }

    if ($this->templates_model->generateContent($system_id, $register_name, $account_id, $event_name, $logo)) {
      $response['success'] = true;
      $response['id'] = $system_id;
      echo json_encode($response);
    } else {
      echo json_encode($response);
    }
  }

  public function edit() {
    $response = array();

    $account_id = $this->session->userdata('account_id');
    $event_name = $this->input->post('event_name', true);
    $system_id = $this->input->post('system_id', true);

    $config = array(
      'upload_path' => 'assets/img/uploads/',
      'allowed_types' => 'jpg|jpeg|png',
    );

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('image_file')) {
      $logo = '';
    } else {
      $data = $this->upload->data();
      $logo = $data['file_name'];
    }

    if ($this->templates_model->editContent($system_id, $account_id, $event_name, $logo)) {
      $response['success'] = true;
      echo json_encode($response);
    } else {
      echo json_encode($response);
    }
  }

  public function delete() {
    $response = array();

    $system_id = $this->input->post('system_id', true);

    if($this->templates_model->deleteContent($system_id, $this->session->userdata('account_id'))) {
      $response['success'] = true;
      echo json_encode($response);
    } else {
      $response['success'] = false;
      echo json_encode($response);
    }
  }

  public function deploy() {
    $response = array();

    $system_id = $this->input->post('system_id', true);

    if($this->templates_model->deployContent($system_id, $this->session->userdata('account_id'))) {
      $response['success'] = true;
    } else {
      $response['success'] = false;
    }
    echo json_encode($response);
  }


}


?>