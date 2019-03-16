<?php 
class Templates extends CI_Controller {
  public function apricot() {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
    }
    $this->load->view('templates/apricot/sample');
  }

  public function bamboo() {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
    }
    $this->load->view('templates/bamboo/sample');
  }

  public function chipotle() {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
    }
    $this->load->view('templates/chipotle/sample');
  }

  public function dog() {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
    }
    $this->load->view('templates/dog/sample');
  }

  public function ellie() {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
    }
    $this->load->view('templates/ellie/sample');
  }

  public function flap() {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
    }
    $this->load->view('templates/flap/sample');
  }

  public function edit($system_id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {
      $data['records'] = $this->templates_model->getMyTemplate($system_id);
      $this->load->view('edit_regis', $data);
    }
  }


}

?>
