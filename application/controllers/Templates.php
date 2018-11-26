<?php 
class Templates extends CI_Controller {
  public function apricot() {
    $this->load->view('templates/apricot/sample');
  }

  public function bamboo() {
    $this->load->view('templates/bamboo/sample');
  }

  public function chipotle() {
    $this->load->view('templates/chipotle/sample');
  }

  public function dandelion() {
    $this->load->view('templates/dandelion/sample');
  }

  public function ellie() {
    $this->load->view('templates/ellie/sample');
  }
}

?>