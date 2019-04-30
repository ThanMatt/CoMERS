
<?php if ($this->session->userdata('account_id') == $system->Account_ID): ?>

<?php

$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'Letter', 0);
//$pdf->headerTable();

//!! Header
$pdf->Image(base_url() . 'uploads/org_logos/' . $org_logo, 30, 3, 20);
$pdf->Image(base_url() . 'assets/img/sbulogo.png', 10, 3, 20);
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(350 - ($pdf->GetStringWidth($system->Title)), 5, strtoupper($system->Title) . " ATTENDANCE", 0, 0, 'C');
$pdf->Ln(15);

//!! Table
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(12, 10, '#', 1, 0, 'C');
$pdf->Cell(27, 10, 'Student ID', 1, 0, 'C');
$pdf->Cell(42, 10, 'Last Name', 1, 0, 'C');
$pdf->Cell(42, 10, 'First Name', 1, 0, 'C');
$pdf->Cell(22, 10, 'MI', 1, 0, 'C');
$pdf->Cell(17, 10, 'Year', 1, 0, 'C');
$pdf->Cell(52, 10, 'Course', 1, 0, 'C');
$pdf->Cell(22, 10, 'Time In', 1, 0, 'C');
$pdf->Cell(22, 10, 'Time Out', 1, 0, 'C');
$pdf->ln();

$counter = 0;

foreach ($attendance as $student) {
  $counter++;
  $pdf->SetFont('Arial', '', 9);
  $pdf->Cell(12, 10, $counter, 1, 0, 'C');
  $pdf->Cell(27, 10, $student->Student_ID, 1, 0, 'C');
  $pdf->Cell(42, 10, $student->Last_Name, 1, 0, 'C');
  $pdf->Cell(42, 10, $student->First_Name, 1, 0, 'C');
  $pdf->Cell(22, 10, $student->Middle_Initial, 1, 0, 'C');
  $pdf->Cell(17, 10, $student->Year, 1, 0, 'C');
  $pdf->Cell(52, 10, $student->Course, 1, 0, 'C');
  $pdf->Cell(22, 10, $student->Time_In, 1, 0, 'C');
  if ($student->Time_Out == '00:00:00') {

    $pdf->Cell(22, 10, '', 1, 0, 'C');
    
  } else {
    $pdf->Cell(22, 10, $student->Time_Out, 1, 0, 'C');
  }
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
    <title>Unauthorized</title>
  </head>
  <?="<h1>You are not authorized to view this page</h1>"?>
<?php endif?>