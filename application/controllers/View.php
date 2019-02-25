<?php

class View extends CI_Controller {
  public function apricot($id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {

      if ($this->templates_model->checkStatus($id, $this->session->userdata('account_id'))) {
        $data['status'] = false;
        $data['generate'] = $this->templates_model->getMyTemplate($id);

      } else {
        $data['generate'] = $this->templates_model->getMyTemplate($id);
        $data['status'] = true;
      }

      $this->load->view('templates/apricot/generate', $data);
    }
  }

  public function bamboo($id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {

      if ($this->templates_model->checkStatus($id, $this->session->userdata('account_id'))) {
        $data['status'] = false;
        $data['generate'] = $this->templates_model->getMyTemplate($id);

      } else {
        $data['generate'] = $this->templates_model->getMyTemplate($id);
        $data['status'] = true;
      }

      $this->load->view('templates/bamboo/generate', $data);
    }
  }

  public function chipotle($id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {

      if ($this->templates_model->checkStatus($id, $this->session->userdata('account_id'))) {
        $data['status'] = false;
        $data['generate'] = $this->templates_model->getMyTemplate($id);

      } else {
        $data['generate'] = $this->templates_model->getMyTemplate($id);
        $data['status'] = true;
      }

      $this->load->view('templates/chipotle/generate', $data);
    }
  }

  public function dog($id) {

    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {

      if ($this->templates_model->checkStatus($id, $this->session->userdata('account_id'))) {
        $data['status'] = false;
        $data['generate'] = $this->templates_model->getMyTemplate($id);

      } else {
        $data['generate'] = $this->templates_model->getMyTemplate($id);
        $data['status'] = true;
      }

      $this->load->view('templates/dog/generate', $data);
    }
  }

  public function ellie($id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {

      if ($this->templates_model->checkStatus($id, $this->session->userdata('account_id'))) {
        $data['status'] = false;
        $data['generate'] = $this->templates_model->getMyTemplate($id);

      } else {
        $data['generate'] = $this->templates_model->getMyTemplate($id);
        $data['status'] = true;
      }

      $this->load->view('templates/ellie/generate', $data);
    }
  }

  public function flap($id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {

      if ($this->templates_model->checkStatus($id, $this->session->userdata('account_id'))) {
        $data['status'] = false;
        $data['generate'] = $this->templates_model->getMyTemplate($id);

      } else {
        $data['generate'] = $this->templates_model->getMyTemplate($id);
        $data['status'] = true;
      }

      $this->load->view('templates/flap/generate', $data);
    }
  }
}

?>