<?php
// require_once('tcpdf/tcpdf.php'); // Include TCPDF library
require_once 'vendor/autoload.php';

// Create new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetMargins(10, 10, 10);
$pdf->SetAutoPageBreak(true, 10);
$pdf->AddPage();

// Set ID card background
$background = 'assets/images/Sunrise-School.jpg'; // Path to ID card background
$pdf->Image($background, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);

// Retrieve form data
$name = isset($_POST['name']) ? $_POST['name'] : 'John Doe';
$class = isset($_POST['std']) ? $_POST['std'] : 'Preschool';
$mob1 = isset($_POST['mob-1']) ? $_POST['mob-1'] : '12345 67890';
$mob2 = isset($_POST['mob-2']) ? $_POST['mob-2'] : '98765 43210';
$address1 = isset($_POST['add-1']) ? $_POST['add-1'] : 'Flat No 101';
$address2 = isset($_POST['add-2']) ? $_POST['add-2'] : 'Near Landmark';
$address3 = isset($_POST['add-3']) ? $_POST['add-3'] : 'City, State';
$photo = isset($_POST['photo']) ? $_POST['photo'] : 'assets/images/Sunrise-Logo.png';

// Add Student Photo
$pdf->Image($photo, 30, 50, 40, 50, '', '', '', false, 300);

// Set Font
$pdf->SetFont('helvetica', 'B', 16);
$pdf->SetTextColor(3, 20, 182); // Dark blue color

// Name
$pdf->SetXY(80, 50);
$pdf->Cell(100, 10, $name, 0, 1, 'L');

// Mobile Numbers
$pdf->SetFont('helvetica', '', 14);
$pdf->SetTextColor(246, 3, 3); // Red color
$pdf->SetXY(80, 70);
$pdf->Cell(50, 10, "Mob: " . $mob1, 0, 1, 'L');
$pdf->SetXY(80, 80);
$pdf->Cell(50, 10, "Alt: " . $mob2, 0, 1, 'L');

// Address
$pdf->SetFont('helvetica', '', 12);
$pdf->SetTextColor(3, 20, 182); // Dark blue color
$pdf->SetXY(50, 100);
$pdf->MultiCell(110, 6, "Address: \n$address1\n$address2\n$address3", 0, 'L');

// Class
$pdf->SetXY(50, 130);
$pdf->Cell(50, 10, "Class: " . $class, 0, 1, 'L');

// Output PDF
$pdf->Output('Student_ID_Card.pdf', 'D');
?>
