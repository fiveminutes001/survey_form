<?php 
 
require_once('tcpdf/tcpdf.php');
// create new PDF document

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 006');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// add a page
$pdf->AddPage();

$content = '';
	$content .= '
	<h3 align="center">Exrecise Scheme</h3>
	<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th width ="20%">ID</th>
		<th width ="30%">Username</th>
		<th width ="20%">Password</th>
		<th width ="30%">Email</th>
	</tr>
	';
$pdf->writeHTML($content, true, false, true, true);

$pdf->lastPage();
$pdf->Output('example_002.pdf', 'I');


?>
