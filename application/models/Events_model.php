<?php

class Events_Model extends CI_Model {
  public function register($student_id, $last_name, $first_name,
    $middle_initial, $year, $section, $course, $system_id, $time_in, $date_in) {

    $this->db->where('System_ID', $system_id);
    $this->db->from('registration_systems');
    $result = $this->db->get();

    $row = $result->row();

    $title = $row->Title;

    $data = array(
      'Student_ID' => $student_id,
      'Last_Name' => $last_name,
      'First_Name' => $first_name,
      'Middle_Initial' => $middle_initial,
      'Year' => $year,
      'Section' => $section,
      'Course' => $course,
      'System_ID' => $system_id,
      'Title' => $title,
      'Time_In' => $time_in,
      'Date_In' => $date_in,
    );

    $result = $this->db->insert('attendance', $data);

    if (!$result) {
      return false;
    } else {
      return true;
    }
  }

  public function fetchAttendance($system_id) {
    $this->db->where('System_ID', $system_id);
    $this->db->from('attendance');

    $result = $this->db->get();

    return $result->result();
  }

  public function checkStudent($student_id, $system_id, $time_out) {
    $this->db->where('Student_ID', $student_id);
    $this->db->where('System_ID', $system_id);
    $this->db->from('attendance');

    $result = $this->db->get();

    $rows = $result->num_rows();

    if ($rows == 1) {

      $row = $result->row();

      $check = $row->Time_Out;

      if ($check == '00:00:00') {

        $data = array(
          'Time_Out' => $time_out,
        );
        $this->db->where('Student_ID', $student_id);
        $this->db->where('System_ID', $system_id);

        $result = $this->db->update('attendance', $data);

        if ($result) {
          return true;
        } else {
          return false;
        }

      } else {
        return false;
      }

    } else {
      return false;
    }
  }

  public function checkIfLoggedOut($system_id, $student_id) {
    $this->db->where('System_ID', $system_id);
    $this->db->where('Student_ID', $student_id);

    $this->db->from('attendance');

    $result = $this->db->get();

    $rows = $result->num_rows();

    if ($rows != 0) {

      
      $row = $result->row();
      
      $time_out = $row->Time_Out;
      
      if ($time_out != '00:00:00') {
        return true;
      } else {
        return false;
      }

    } else {
      return false;
    }

  }

  public function getTotalAttendees($system_id) {
    $this->db->where('System_ID', $system_id);
    $this->db->from('attendance');

    return $this->db->count_all_results();
  }
}

?>