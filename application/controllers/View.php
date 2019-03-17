<?php

class View extends CI_Controller {
  public function apricot($id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {

      $data['generate'] = $this->templates_model->getMyTemplate($id);

      $this->load->view('templates/apricot/view', $data);
    }
  }

  public function bamboo($id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {
      $data['generate'] = $this->templates_model->getMyTemplate($id);

      $this->load->view('templates/bamboo/view', $data);
    }
  }

  public function chipotle($id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {

      $data['generate'] = $this->templates_model->getMyTemplate($id);
      $this->load->view('templates/chipotle/view', $data);
    }
  }

  public function dog($id) {

    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {
      $data['generate'] = $this->templates_model->getMyTemplate($id);

      $this->load->view('templates/dog/view', $data);
    }
  }

  public function ellie($id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {
      $data['generate'] = $this->templates_model->getMyTemplate($id);

      $this->load->view('templates/ellie/view', $data);
    }
  }

  public function flap($id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {
      $data['generate'] = $this->templates_model->getMyTemplate($id);

      $this->load->view('templates/flap/view', $data);
    }
  }
}

?>