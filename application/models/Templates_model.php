<?php 

class Templates_Model extends CI_Model {

  public function generateContent($system_id, $account_id, $logo, $logo2, $title) {
    $config = [
      'allowed_types' => 'png|jpg|jppeg'
    ];

    $this->load->library('upload', $config);


  }


}


?>