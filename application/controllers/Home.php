<?php 

class Home extends CI_Controller  {
  
  public function index() {
    $this->load->view('main');
  }

  public function about() {
    $this->load->view('about');
  }

  public function works() {
    if (!$this->session->userdata('logged_in')) {
      $this->session->set_userdata('referred_from', current_url());
      $this->load->view('users/login_view');
    } else {
      $data['works'] = null;

      $records = $this->templates_model->getMyWorks($this->session->userdata('account_id'));


      if ($records) {
        $data['works'] = $records;
      }

      $this->load->view('works', $data);
    }
  }
}

?>
