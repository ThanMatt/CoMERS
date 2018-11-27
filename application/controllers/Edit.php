<?php 

class Edit extends CI_Controller {
  public function apricot() {
    $data['name'] = 'Apricot';

    $this->load->view('edit_temp', $data);
  }

  public function bamboo() {
    $data['name'] = 'Bamboo';

    $this->load->view('edit_temp', $data);
  }

  public function chipotle() {
    $data['name'] = 'Chipotle';

    $this->load->view('edit_temp', $data);
  }

  public function dog() {
    $data['name'] = 'Dog';

    $this->load->view('edit_temp', $data);
  }

  public function ellie() {
    $data['name'] = 'Ellie';

    $this->load->view('edit_temp', $data);
  }
}

?>