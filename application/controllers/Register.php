<?php

class Register extends CI_Controller {
  public function index() {
    $response = array();

    $time_in = date('h:i:s');
    $date_in = date('Y-m-d');

    $student_id = $this->input->post('student-id', true);
    $last_name = $this->input->post('last-name', true);
    $first_name = $this->input->post('first-name', true);
    $middle_initial = $this->input->post('middle-initial', true);
    $year = $this->input->post('year-level', true);
    $section = $this->input->post('section', true);
    $course = $this->input->post('course', true);
    $system_id = $this->input->post('system-id', true);

    if ($this->events_model->checkIfLoggedIn($student_id, $system_id)) {

      $response['logged_in'] = true;
    } else {

      if ($this->events_model->register($student_id, $last_name, $first_name,
        $middle_initial, $year, $section, $course, $system_id, $time_in, $date_in)) {

        $response['success'] = true;

      } else {

        $response['success'] = false;

      }
    }

    echo json_encode($response);

  }
  public function id() {
    $response = array();

    $student_id = $this->input->post('student-id', true);
    $system_id = $this->input->post('system-id', true);

    if ($this->events_model->checkIfLoggedIn($student_id, $system_id)) {

      $response['logged_in'] = true;
    } else {

      if ($this->events_model->registerByID($student_id, $system_id)) {
        $response['success'] = true;
      } else {
        $response['id'] = $system_id;
        $response['success'] = false;
      }
    }

    echo json_encode($response);
  }

}

?>