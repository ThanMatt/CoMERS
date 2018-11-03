<?php 

class Accounts_Model extends CI_Model {

  public function validate($account_id, $password) {
    $this->db->where('Account_ID', $account_id);
    $result = $this->db->get('accounts');
    
    $db_password = $result->row(1)->Pass;
    // $account_id = $result->row(0);

    return password_verify($password, $db_password);
  }

  public function hashMyPass($password) {
    $options = [
      'cost' => 12,
    ];
  
    $hashedPassword = password_hash($password, 
      PASSWORD_DEFAULT, $options);
  
    return $hashedPassword;
  }
}


?>