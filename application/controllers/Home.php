<?php 

class Home extends CI_Controller  {
  
  public function index() {

    $this->load->view('main');

    // $this->load->view('users/login_view');
  }

  public function about() {
    $this->load->view('about');
  }
}

?>
