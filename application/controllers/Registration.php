<?php

class Registration extends CI_Controller {
  public function events($system_id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');

    } else {
      $data['generate'] = $this->templates_model->getMyTemplate($system_id);

      $this->load->view('templates/' . $data['generate']->Register_Name . '/generate', $data);
    }
  }

  public function attendance($system_id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');

    } else {
      $data['attendance'] = $this->events_model->fetchAttendance($system_id);
      $data['system'] = $this->templates_model->getMyTemplate($system_id);
      $data['system_id'] = $system_id;

      $data['check'] = $this->templates_model->isThisMyWork($system_id, $this->session->userdata('account_id'));

      $this->load->view('attendance', $data);
    }
  }

  public function print($system_id) {

    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');

    } else {
      $data['attendance'] = $this->events_model->fetchAttendance($system_id);
      
      $data['count'] = $this->events_model->getTotalAttendees($system_id);

      $data['check'] = $this->templates_model->isThisMyWork($system_id, $this->session->userdata('account_id'));

      $data['system'] = $this->templates_model->getMyTemplate($system_id);

      $data['org_logo'] = $this->accounts_model->getOrgLogo($system_id);
      $this->load->view('print/attendance_sheet', $data);
    }
  }
}

?>