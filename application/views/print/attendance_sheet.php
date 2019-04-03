
<?php if ($this->session->userdata('account_id') == $system->Account_ID): ?>

<?php

$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'Letter', 0);
//$pdf->headerTable();

//!! Header
$pdf->Image(base_url() . 'uploads/org_logos/' . $org_logo, 10, 3, 20);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(276, 5, $system->Title, 0, 0, 'C');
$pdf->Ln(20);

//!! Table
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(10, 10, '#', 1, 0, 'C');
$pdf->Cell(25, 10, 'Student ID', 1, 0, 'C');
$pdf->Cell(40, 10, 'Last Name', 1, 0, 'C');
$pdf->Cell(40, 10, 'First Name', 1, 0, 'C');
$pdf->Cell(20, 10, 'MI', 1, 0, 'C');
$pdf->Cell(15, 10, 'Year', 1, 0, 'C');
$pdf->Cell(20, 10, 'Section', 1, 0, 'C');
$pdf->Cell(50, 10, 'Course', 1, 0, 'C');
$pdf->Cell(20, 10, 'Time In', 1, 0, 'C');
$pdf->Cell(20, 10, 'Time Out', 1, 0, 'C');
$pdf->ln();

$counter = 0;

foreach ($attendance as $student) {
  $counter++;
  $pdf->SetFont('Arial', '', 9);
  $pdf->Cell(10, 10, $counter, 1, 0, 'C');
  $pdf->Cell(25, 10, $student->Student_ID, 1, 0, 'C');
  $pdf->Cell(40, 10, $student->Last_Name, 1, 0, 'C');
  $pdf->Cell(40, 10, $student->First_Name, 1, 0, 'C');
  $pdf->Cell(20, 10, $student->Middle_Initial, 1, 0, 'C');
  $pdf->Cell(15, 10, $student->Year, 1, 0, 'C');
  $pdf->Cell(20, 10, $student->Section, 1, 0, 'C');
  $pdf->Cell(50, 10, $student->Course, 1, 0, 'C');
  $pdf->Cell(20, 10, $student->Time_In, 1, 0, 'C');
  $pdf->Cell(20, 10, $student->Time_Out, 1, 0, 'C');
  $pdf->ln();

}

//!! Footer
$pdf->SetY(-15);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 10, 'Page ' . $pdf->PageNo() . '/{nb}', 0, 0, 'C');

$pdf->Output('', $system->Title . ' Attendance.pdf');
?>

<?php else: ?>
  <head>
    <title>404 Not Found </title>
  </head>
  <?="<h1>404 ERROR: The registration might have been removed or closed by the moderator</h1>"?>
<?php endif?>