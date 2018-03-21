<?php

require __DIR__ . '/vendor/autoload.php';

class PDF extends FPDF {
    // Page header
    function Header()
    {
        // Logo
        $this->Image('logo.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'Complaint',0,0,'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
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

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(0,10,'From',0,1);
$pdf->setX(25);
$pdf->Cell(0,10,'Name of Applicant',0,1);
$pdf->setX(25);
$pdf->Cell(0,10,'Address',0,1);
$pdf->Cell(0,10,'To',0,1);
$pdf->setX(25);
$pdf->Cell(0,10,'Correspondent',0,1);
$pdf->setX(25);
$pdf->Cell(0,10,'Address',0,1);
$pdf->Cell(0,10,'Sir',0,1);
$pdf->setX(25);
$pdf->Write(6, "this is the complaint text: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at feugiat leo. Etiam sollicitudin dolor odio, eu lacinia erat tincidunt at. Suspendisse non diam sed dui convallis varius. Etiam eget tincidunt lectus. Aliquam ullamcorper leo eget libero mattis, in tempor augue sagittis. Nulla et ligula a lorem euismod tincidunt. Donec sed dolor elit. Praesent quis lacus urna. Fusce molestie aliquam risus, sed molestie elit porttitor in.

Fusce scelerisque facilisis cursus. Praesent tempor congue aliquet. Proin euismod nisi suscipit mi euismod, eu condimentum quam volutpat. Phasellus tempor finibus rhoncus. Aenean orci velit, vulputate nec odio sit amet, suscipit laoreet mi. Maecenas sem diam, laoreet ac odio at, blandit maximus lacus. Curabitur eget tempor quam, et aliquam sem. Etiam rutrum maximus dolor, at luctus ex tempor id. Curabitur sodales lobortis massa quis pulvinar.

Nunc ac turpis mattis, mollis leo vitae, convallis mi. Duis varius, mauris sed vulputate fringilla, ipsum nunc tristique lacus, ut ullamcorper enim est et enim. Vivamus a justo id velit varius tincidunt. Etiam vel placerat nunc. Quisque id orci eget mauris rhoncus molestie. Suspendisse nec augue ut lacus viverra vulputate sit amet id velit. Sed euismod arcu eget leo volutpat, ac hendrerit lectus tincidunt. Praesent iaculis ex id quam sagittis, a dignissim nunc commodo. Fusce interdum leo a urna pulvinar, et efficitur turpis auctor. Duis euismod felis nec velit efficitur, eu pretium urna fringilla. Aliquam nulla leo, tempor a mi nec, vestibulum pretium ex. Curabitur sit amet ante mattis, facilisis ex in, dapibus nulla. Maecenas sodales risus pellentesque, fermentum dui nec, gravida ante. Vivamus interdum tincidunt metus, vel lobortis tellus porttitor eu. Vivamus scelerisque ornare neque eu venenatis.  ");


$pdf->Ln();
$pdf->Ln();
$pdf->setX(130);
$pdf->Cell(0,10,'Yours faithfully,',0,1);
$pdf->setX(140);
$pdf->Cell(0,10,'Name of Applicant',0,1);
$pdf->setX(145);
$pdf->Cell(0,10,'(Signature)',0,1);
$pdf->Output();
