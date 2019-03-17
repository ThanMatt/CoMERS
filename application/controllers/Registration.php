<?php 

class Registration extends CI_Controller {
  public function events($system_id) {
    $data['generate'] = $this->templates_model->getMyTemplate($system_id);
    $data['status'] = $data['generate']->Status;

    $this->load->view('templates/'. $data['generate']->Register_Name . '/generate', $data);
  }
}

?>