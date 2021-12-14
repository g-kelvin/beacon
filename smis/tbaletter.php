<?php include "config.php"; ini_set('display_errors', 1);
require('fpdf/fpdf.php'); 

      $studid = $_GET['GetID'];                   
      $feedback="SELECT * from students WHERE studentid = '$studid' ";
      $rest= mysqli_query($con,$feedback);
      while($rows= mysqli_fetch_assoc($rest)){
                                
        
                    
$pdf = new FPDF('P','mm','A4');                        
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(2,8, $pdf->Image('img/admin-01.png',80,2,40,35),0,0,'L');
$pdf->Ln(16,100);
$pdf->Cell(60,10,'',0);
$pdf->Cell(62,10,'STUDENT ADMISSION LETTER. ',0,1,'C');
$pdf->Cell(60,5,'',0);
$pdf->Cell(62,2,'Embu - Siakago Road, Embu - Kenya.',0,1,'C');
$pdf->Cell(60,10,'',0);
$pdf->Cell(62,8,'+254 720 616 843 | info@thebeaconacademy.sc.ke',0,1,'C');
$pdf->Ln(8,0);

$pdf->Cell(10,8, "Dear ");
$pdf->Cell(0,8, " {$rows['fname']} {$rows['lname']} ," ,0,0,'L');
// $pdf->Cell(70,8, "  {$rows['fname']}");
$pdf->Ln(8,0);
$pdf->Cell(0,8, "We are happy to inform you that you have been successfully admitted to The Beacon Academy   ",0,0,'L');
$pdf->Ln(8,0);
$pdf->Cell(58,8, 'for the application which you did on   ',0,0,'L');
$pdf->Cell(0,8, "{$rows['dateofadmin']}.  ",0,0,'L');
$pdf->Ln(8,0);
$pdf->Cell(65,8, "Below is the Pupil Details:  ",0,0,'L');
$pdf->Ln(8,0);
$pdf->Cell(55,8,"Admission No: {$rows['adminno']}"   ,1,0,'L');
$pdf->Cell(78,8,"Religion: {$rows['religion']}"   ,1,0,'L');
$pdf->Cell(55,8,"Admission No: {$rows['grade']}"   ,1,0,'L');
$pdf->Ln(8,0);
$pdf->Cell(55,8,"DOB: {$rows['dob']}"   ,1,0,'L');
$pdf->Cell(78,8,"residence: {$rows['residence']}"   ,1,0,'L');
$pdf->Cell(55,8,"Talent: {$rows['talent']}"   ,1,0,'L');
$pdf->Ln(8,0);
$pdf->Cell(55,8,"Birth Cert No: {$rows['cert']}"   ,1,0,'L');
$pdf->Cell(78,8,"Disability: {$rows['disability']}"   ,1,0,'L');
$pdf->Cell(55,8,"Nemis - upi No: {$rows['nemis']}"   ,1,0,'L');
$pdf->Ln(8,0);
$pdf->Cell(55,8,"Form School   : {$rows['fschool']}"   ,1,0,'L');
$pdf->Cell(78,8,"Disability: {$rows['disability']}"   ,1,0,'L');
$pdf->Cell(55,8,"Campus: {$rows['campus']}"   ,1,0,'L');

$pdf->Ln(8,0);
$pdf->Cell(55,8,"Gender   : {$rows['gender']}"   ,1,0,'L');
$pdf->Cell(78,8,"Assessment: {$rows['assessment']}"   ,1,0,'L');
$pdf->Cell(55,8,"Class.: {$rows['class']}"   ,1,0,'L');


$pdf->Ln(16,0);
$pdf->Cell(65,8, "Below is the Parent Details:  ",0,0,'L');
$pdf->Ln(8,100);

$pdf->Cell(6,10,"Parent Name: {$rows['pfname']} {$rows['plname']}  ",0,1,'L');

$pdf->Cell(6,2,'Occupation:  '."{$rows['occupation']}",0,1,'L');

$pdf->Cell(6,8,"ID No:             {$rows['idno']} ",0,1,'L');
$pdf->Cell(6,8,"Tel No:            {$rows['active1']} | {$rows['active2']} | {$rows['active3']} ",0,1,'L');
$pdf->Cell(6,8,"Email:            {$rows['email1']} | {$rows['email2']}  ",0,1,'L');
$pdf->Ln(16,0);
$pdf->Cell(60,10,'',0);
$pdf->Cell(62,10,'OUR VISION',0,1,'C');
$pdf->Cell(60,5,'',0);
$pdf->Cell(62,2,'Is to be the most competent change agent and to be the most transformative learning ',0,1,'C');
$pdf->Cell(60,10,'',0);

$pdf->Cell(62,8,'institution for academic excellence.',0,1,'C');

$pdf->Cell(60,10,'',0);
$pdf->Cell(62,10,'OUR MISSION',0,1,'C');
$pdf->Cell(60,5,'',0);
$pdf->Cell(62,2,'Is to raise a generation of Highly effective Humanitarian not just average not just madiocre  ',0,1,'C');
$pdf->Cell(60,10,'',0);

$pdf->Cell(62,8,'but Great Men And Women in the region and beyond.',0,1,'C');


$pdf->Cell(6,8,"Parent | Guardian Signature:............................................. ",0,1,'L');
$pdf->Cell(6,8,"Manage Director Signature:............................................... ",0,1,'L');
$pdf->Cell(6,8,"School Additional  Comments:.............................................................................................................................. ",0,1,'L');





$pdf->Output();              


 }
                                                                                
    
  ?>