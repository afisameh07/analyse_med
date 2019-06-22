<?php 

require('connexion.php'); 
require('fpdf.php'); 
//init
$pat = "indefinit";
$titre = "indefinit";
$date_aj = "indefinit";
$uree = "indefinit";
$glycemie = "indefinit";
$createnine = "indefinit";
$cholestirol = "indefinit";
$triglyceride = "indefinit";
$calcuim = "indefinit";
$diagnostique = "indefinit";

$sql = "SELECT * FROM analyses where id='".$_GET['id_a']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $sql2 = "SELECT np FROM utilisateurs where id='".$row['id_u']."'";

        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
            $row2 = $result2->fetch_assoc();
            $pat = $row2["np"];
            $titre =  $row["titre"] ;
            $date_aj = $row["date_ajout"];
            $uree = $row["uree"];
            $glycemie = $row["glycemie"] ;
            $createnine = $row["createnine"] ;
            $cholestirol = $row["cholestirol"] ;
            $triglyceride = $row["triglyceride"];
            $calcuim = $row["calcuim"] ;
            if($row['diag'] != ""){
                $diagnostique = $row['diag'];
            }else{
                $diagnostique = "Pas encore traiter par un medecin";
            }
        }
    }
}


class PDF extends FPDF 
{ 

    // Page header 
	function Header() 
	{ 
		$this->Image('geeks.png', 30, 8, 20); 
		
		// GFG logo image 
		$this->Image('geeks.png', 160, 8, 20); 
		
		// Set font-family and font-size 
		$this->SetFont('Times','B',20); 
		
		// Move to the right 
		$this->Cell(80); 
		
		// Set the title of pages. 
		$this->Cell(30, 20, 'Analyse', 0, 2, 'C'); 
		
		// Break line with given space 
		$this->Ln(5); 
	} 
	
	// Page footer 
	function Footer() 
	{ 
		// Position at 1.5 cm from bottom 
		$this->SetY(-15); 
		
		// Set font-family and font-size of footer. 
		$this->SetFont('Arial', 'I', 8); 
		
		// set page number 
		$this->Cell(0, 10, 'Page / {nb}', 0, 0, 'C'); 
	} 
} 

// Create new object. 
$pdf = new PDF(); 
$pdf->AliasNbPages(); 

// Add new pages 
$pdf->AddPage(); 

// Set font-family and font-size. 
$pdf->SetFont('Times','',12); 

    $pdf->Cell(30, 10, 'Nom & Prenom :  '.$pat, 0, 2, 'L'); 
    $pdf->Cell(30, 10, 'Titre :  '.$titre, 0, 2, 'L'); 
    $pdf->Cell(30, 10, 'Date analyse :  '.$date_aj , 0, 2, 'L'); 
    $pdf->Cell(30, 10, 'uree :  '.$uree, 0, 2, 'L'); 
    $pdf->Cell(30, 10, 'glycemie :  '.$glycemie, 0, 2, 'L'); 
    $pdf->Cell(30, 10, 'createnine :  '.$cholestirol, 0, 2, 'L'); 
    $pdf->Cell(30, 10, 'triglyceride :  '.$triglyceride, 0, 2, 'L'); 
    $pdf->Cell(30, 10, 'calcuim :  '.$calcuim, 0, 2, 'L'); 
    $pdf->Cell(30, 10, 'Analyse :  '.$diagnostique, 0, 2, 'L'); 
    
// Loop to display line number content 
$pdf->Output(); 

?> 
