<?php
if(!empty($_POST['submit']))
{
    $name=$_POST['fullname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phonenumber'];
    $problem=$_POST['problem'];
    $doctorname=$_POST['doctorname'];
    $date=$_POST['dateofappointment'];
    require("fpdf/fpdf.php");
    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","",16);
    $pdf->Cell(0,10,"Patient Details",1,1,'C');
    $pdf->Cell(0,10,"Full Name:-  $name",1,1);
    $pdf->Cell(0,10,"Age:-$age",1,1);
    $pdf->Cell(0,10,"Email:-$email",1,1);
    $pdf->Cell(0,10,"Phone Number:-$phone",1,1);
    $pdf->Cell(0,10,"Problem:-$problem",1,1);
    $pdf->Cell(0,10,"Doctor Name:-$doctorname",1,1);
    $pdf->Cell(0,10,"Date of appointment:-$date",1,1);
    $pdf->output();
}
?>