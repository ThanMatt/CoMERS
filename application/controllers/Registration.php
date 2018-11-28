<?php 

class Registration extends CI_Controller {
  public function apricot($id) {
    $data['generate'] = $this->templates_model->getMyTemplate($id);
    $this->load->view('templates/apricot/generate', $data);
  }

  public function bamboo($id) {
    $data['generate'] = $this->templates_model->getMyTemplate($id);
    $this->load->view('templates/bamboo/generate', $data);
  }

  public function chipotle($id) {
    $data['generate'] = $this->templates_model->getMyTemplate($id);
    $this->load->view('templates/chipotle/generate', $data);
  }

  public function dog($id) {
    $data['generate'] = $this->templates_model->getMyTemplate($id);
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