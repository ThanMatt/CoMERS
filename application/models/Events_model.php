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
      'Date_In' => $date_in
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
}


?>