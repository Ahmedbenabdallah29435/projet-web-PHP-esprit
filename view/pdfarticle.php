<?php
require("fpdp/fpdf.php");
include "../controller/articleC.php";
	require_once ("composant/composant.php");

	$utilisateurC=new articleC();
	$listeUsers=$utilisateurC->afficherarticle();
     
    class mypdf extends FPDF
      {
         function header()
           {

               $this->Image('fpdp/logo2.png',10,10);
           
               $this->SetTextColor(30,144,255);

                // Arial bold 15
                $this->SetFont('Arial','B',35);
    $this->Cell(276,5,'Articles',0,0,'C');
    // Saut de ligne
    $this->Ln();
    $this->SetFont('Times','',20);
    $this->Cell(276,10,'Liste des Articles',0,0,'C');
    // Saut de ligne
    $this->Ln(20);
    
              
           }
            function Footer()
                {
                    
                    // Position at 1.5 cm from bottom
                    $this->SetY(-15);
                    // Arial italic 8
                    $this->SetFont('Arial','I',8);
                    // Page number
                    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
                }
      }

        $pdf = new mypdf('P','mm','A4');
        $title = 'article';
        $pdf->SetTitle($title);
        $pdf->AliasNbpages();
        $pdf->AddPage('L','A4',0);
        $pdf->Ln();
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(20,10,'ID',1,0,'C');
        $pdf->Cell(60,10,'Type',1,0,'C');
        $pdf->Cell(80,10,'Description',1,0,'C');
        $pdf->Cell(35,10,'nom',1,0,'C');
        $pdf->Cell(25,10,'date debut',1,0,'C');
        $pdf->Cell(25,10,'date fin',1,0,'C');
        $pdf->Cell(40,10,'Categorie',1,0,'C');
        
    
         
        foreach($listeUsers as $user)
            {              $pdf->Ln();
                         $pdf->Cell(20,10,$user['id'],1,0,'C');
                         $pdf->Cell(60,10,$user['type'],1,0,'C');
                         $pdf->Cell(80,10,"http://localhost/momo/front/article.php",1,0,'C');
                         $pdf->Cell(35,10,$user['nom'],1,0,'C');
                         $pdf->Cell(25,10,$user['date'],1,0,'C');
                         $pdf->Cell(25,10,$user['datef'],1,0,'C');
                         $pdf->Cell(40,10,$user['categorie'],1,0,'C');



                     }
               
        $pdf->Output(); 
                  
?>