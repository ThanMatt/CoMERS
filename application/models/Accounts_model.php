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
    $org_logo = $result->row(3)->Logo;
    return array(
      'Organization' => $organization,
      'Org_Logo' => $org_logo, 
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

  public function getOrgLogo($system_id) {
    $this->db->where('System_ID', $system_id);
    $this->db->from('registration_systems');

    $result = $this->db->get();

    $row = $result->row();

    $account_id = $row->Account_ID;

    $this->db->where('Account_ID', $account_id);
    $this->db->from('accounts');

    $result = $this->db->get();
    $row = $result->row();

    return $row->Logo;
  }
}

?>