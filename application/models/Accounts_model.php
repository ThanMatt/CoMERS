<?php

class Accounts_Model extends CI_Model {

  //:: Validates user credentials
  public function validate($account_id, $password) {
    $this->db->where('Account_ID', $account_id);
    $result = $this->db->get('accounts');

    $db_password = $result->row(1)->Pass;

    return password_verify($password, $db_password);
  }

  public function getMyRecords($account_id) {
    $this->db->from('accounts');
    $this->db->where('Account_ID', $account_id);
    $result = $this->db->get();

    $organization = $result->row(2)->Organization;

    return array(
      'Organization' => $organization,
    );
  }

  //:: Password hasher
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