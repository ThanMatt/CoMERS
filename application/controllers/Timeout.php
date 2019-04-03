<?php

class Timeout extends CI_Controller {
  public function events($system_id) {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');

    } else {
      $data['generate'] = $this->templates_model->getMyTemplate($system_id);

      $this->load->view('templates/' . $data['generate']->Register_Name . '/logout', $data);
    }

  }

  public function logout() {
    $response = array();
    $student_id = $this->input->post('student-id', true);
    $system_id = $this->input->post('system-id', true);
    $time_out = date('h:i:s');

    if ($this->events_model->checkStudent($student_id, $system_id, $time_out)) {
    
      $response['success'] = true;
      $response['logged_out'] = false;
    
    } else {
      if ($this->events_model->checkIfLoggedOut($system_id, $student_id)) {
        
        $response['logged_out'] = true;
      } else {
        $response['success'] = false;
      }
    }

    echo json_encode($response);

  }
}

?>