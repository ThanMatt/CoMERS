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

  public function getMyWorks($account_id) {
    $this->db->where('Account_ID', $account_id);
    $this->db->from('registration_systems');

    $result = $this->db->get();

    return $result->result();
  }

  public function checkName($register_name, $account_id) {
    $this->db->where('Account_ID', $account_id);
    $this->db->where('Register_Name', $register_name);
    $this->db->from('registration_systems');

    $result = $this->db->get();

    $rows = $result->row();
    $row = $rows->Register_Name;

    if ($row == 'Apricot') {
      return 'temp1.jpg'; 

    } else if ($row == 'Bamboo') {
      return 'temp2.jpg';

    } else if ($row == 'Chipotle') {
      return 'temp3.jpg';

    } else if ($row == 'Dog') {
      return 'temp4.jpg';

    } else if ($row == 'Ellie') {
      return 'temp5.jpg';
      
    } else {
      return 'sample.jpg';
    }
  }

  public function editContent($system_id, $account_id, $event_name, $logo) {

    if ($logo == '') {
      $data = array (
        'Title' => $event_name,
      );
    } else {
      $data = array (
        'Title' => $event_name,
        'Logo' => $logo
      );
    }
  
    $this->db->where('System_ID', $system_id);
    $this->db->where('Account_ID', $account_id);
    $result = $this->db->update('registration_systems', $data);

    return $result;
  }

  public function deleteContent($system_id, $account_id) {

    $this->db->where('System_ID', $system_id);
    $this->db->where('Account_ID', $account_id);
    $result = $this->db->delete('registration_systems');


    return $result;
  }


}


?>