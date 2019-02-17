<?php

class Registration extends CI_Controller {
  public function apricot($id) {
    if ($this->templates_model->checkStatus($id, $this->session->userdata('account_id'))) {
      $data['generate'] = $this->templates_model->getMyTemplate($id);
      $data['status'] = true;
    } else {
      $data['status'] = false;
    }
    $this->load->view('templates/apricot/generate', $data);
  }

  public function bamboo($id) {
    if ($this->templates_model->checkStatus($id, $this->session->userdata('account_id'))) {
      $data['generate'] = $this->templates_model->getMyTemplate($id);
      $data['status'] = true;

    } else {
      $data['status'] = false;
    }

    $this->load->view('templates/bamboo/generate', $data);
  }

  public function chipotle($id) {
    if ($this->templates_model->checkStatus($id, $this->session->userdata('account_id'))) {
      $data['generate'] = $this->templates_model->getMyTemplate($id);
      $data['status'] = true;
    } else {
      $data['status'] = false;
    }

    $this->load->view('templates/chipotle/generate', $data);
  }

  public function dog($id) {
    if ($this->templates_model->checkStatus($id, $this->session->userdata('account_id'))) {
      $data['status'] = false;
    } else {
      $data['generate'] = $this->templates_model->getMyTemplate($id);
      $data['status'] = true;
    }
    $this->load->view('templates/dog/generate', $data);
  }

  public function ellie($id) {
    $data['generate'] = $this->templates_model->getMyTemplate($id);
    $this->load->view('templates/ellie/generate', $data);
  }

  public function flap($id) {
    $data['generate'] = $this->templates_model->getMyTemplate($id);
    $this->load->view('templates/flap/generate', $data);
  }
}

?>