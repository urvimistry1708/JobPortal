
<?php
 require_once("fpdf/fpdf.php");
 $pdf=new FPDF();
 $pdf->AddPage();
 $pdf->SetFont("Arial","B",14);
   
  foreach($getUser as $userr)
  {
  	$pdf->Cell(0,10,"I am {$userr['user_name']} !!",0,1);
   $pdf->Cell(0,10,"",0,1);
    $pdf->Cell(0,10,"",0,1);
     $pdf->Cell(0,10,"",0,1);
    $pdf->Cell(0,10,"",0,1);
     $pdf->Cell(0,10,"",0,1);
   


 $img =$userr['user_image'];

 $pdf->Image(base_url().'uploads/user_profile/'.$img, 25, 45, 41 ,'jpeg');

$pdf->Cell(0,10,"",0,1);
$pdf->Cell(0,10,"",0,1);
   $pdf->Cell(0,10,"",0,1);
    $pdf->Cell(0,10,"",0,1);
     $pdf->Cell(0,10,"",0,1);
      $pdf->Cell(0,10,"",0,1);

   $pdf->Cell(0,10,"Personal Details",0,1);
    $pdf->Cell(30,10,"Name:",1,0);
   $pdf->Cell(160,10,"{$userr['user_name']}",1,1);
    $pdf->Cell(30,10,"Gender:",1,0);
   $pdf->Cell(160,10,"{$userr['gender']}",1,1);
   $pdf->Cell(30,10,"Born in:",1,0);
   $pdf->Cell(160,10,"{$userr['date_of_birth']}",1,1);
   $pdf->Cell(30,10,"Address:",1,0);
   $pdf->Cell(160,10,"{$userr['street']}",1,1);
}
 $pdf->Cell(0,10,"",0,1);
foreach($getEdu as $edu)
{
    $pdf->Cell(0,10,"Education Details:",0,1);
    $pdf->Cell(60,10,"School/University Name:",1,0);
   $pdf->Cell(130,10,"{$edu['university_name']}",1,1);
    $pdf->Cell(60,10,"Qalification:",1,0);
   $pdf->Cell(130,10,"{$edu['degree_name']}",1,1);
   $pdf->Cell(60,10,"Specialization:",1,0);
   $pdf->Cell(130,10,"{$edu['specialization']}",1,1);
   $pdf->Cell(60,10,"Course Type:",1,0);
   $pdf->Cell(130,10,"{$edu['course_type']}",1,1);
   $pdf->Cell(60,10,"Percentage/CGPA:",1,0);
   $pdf->Cell(130,10,"{$edu['per_cgpa']}",1,1);
    $pdf->Cell(60,10,"Starting Date:",1,0);
   $pdf->Cell(130,10,"{$edu['starting_date']}",1,1);
    $pdf->Cell(60,10,"Completion Date:",1,0);
   $pdf->Cell(130,10,"{$edu['completion_date']}",1,1);
   

  }
   $pdf->Cell(0,10,"",0,1);
foreach($getExp as $exp)
{
    $pdf->Cell(0,10,"Experience Details:",0,1);
    $pdf->Cell(60,10,"Job Title:",1,0);
   $pdf->Cell(130,10,"{$exp['job_title']}",1,1);
    $pdf->Cell(60,10,"Designation:",1,0);
   $pdf->Cell(130,10,"{$exp['designation']}",1,1);
   $pdf->Cell(60,10,"Company Name:",1,0);
   $pdf->Cell(130,10,"{$exp['company_name']}",1,1);
   $pdf->Cell(60,10,"Current Salary:",1,0);
   $pdf->Cell(130,10,"{$exp['current_salary']}",1,1);
   $pdf->Cell(60,10,"Job Location:",1,0);
   $pdf->Cell(130,10,"{$exp['job_location']}",1,1);
    $pdf->Cell(60,10,"Starting Date:",1,0);
   $pdf->Cell(130,10,"{$exp['start_date']}",1,1);
    $pdf->Cell(60,10,"Completion Date:",1,0);
   $pdf->Cell(130,10,"{$exp['end_date']}",1,1);
  

  }
   $pdf->Cell(0,10,"",0,1);
foreach($getSkill as $skill)
{
    $pdf->Cell(0,10,"Skills:",0,1);
    $pdf->Cell(60,10,"Skills:",1,0);
   $pdf->Cell(130,10,"{$skill['skill_name']}",1,1);
  }
   $pdf->output();
  
?>