<?php 

class Templates_Model extends CI_Model {

  public function generateContent($system_id, $register_name, $account_id, $title, $logo) {
    $data = array(
      'System_ID' => $system_id,
      'Register_Name' => $register_name,
      'Account_ID' => $account_id,
      'Title' => $title,
      'Logo' => $logo
    );

    $result = $this->db->insert('registration_systems', $data);

    if ($result) {
      return true;
    } else {
      return false;
    }
  }

  public function getMyTemplate($id) {
    $this->db->where('System_ID', $id);
    $this->db->from('registration_systems');

    $result = $this->db->get();

    return $result->row();
  }


}


?>