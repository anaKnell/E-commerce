<?php



if(isset($_GET['pdf'])){

	$pdf = new pdf();

	$pdf->AddPage();
	$pdf->content();
	$pdf->headerTable();
	$pdf->Output();

}

?>