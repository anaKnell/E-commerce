<?php

class pdf extends FPDF{
	// En-tête
	function Header()
	{
    // Logo/titre
		$this->SetFont('helvetica','I',15);
		$this->SetTextColor(189, 115, 68);
		$this->Cell(190,30,utf8_decode('Umà Coffee'),0,'L');
		 // Saut de ligne
		$this->Ln(20);
		$this->SetFont('helvetica','I',10);
		$this->SetTextColor(105, 105, 105);
		$this->MultiCell(190,5,utf8_decode("Rue du Café pas Crème\n06000 Nice"),0,'L');
		$this->Image("./public/img/logoPDF.png",160,15,30,30);
		$this->Ln(20);
	}

	function content(){

		$this->SetFont('helvetica','I',10);
		$this->SetTextColor(105, 105, 105);

		//Facture adressé
		$this->MultiCell(100,5,utf8_decode("Facture adressé à:\n{Nom_user} {Prenom_user}\n{adresse_user}"),0,'L');


		//N° de commande et données
		$this->MultiCell(180,5,utf8_decode("N° de commande :{commande}\nDate: {date_commande}\nN° de Facture: {facture_commande}"), 0,'R');

		//Commande		
	}

	function headerTable(){
		$this->Ln(20);
		$this->Cell(40,10,'Quantité',1,0,'C');
		$this->Cell(40,10,'Désignation',1,0,'C');
		$this->Cell(40,10,'Prix Unit HT',1,0,'C');
		$this->Cell(40,10,'Montant HT',1,0,'C');
		$this->Ln();
	}

/*	function viewTable(){
		$this->SetFont();
		while ($data = $stmt->fetch()){
		$this->Cell(40,10,'Quantité',1,0,'C');
		$this->Cell(40,10,'Désignation',1,0,'C');
		$this->Cell(40,10,'Prix Unit HT',1,0,'C');
		$this->Cell(40,10,'Montant HT',1,0,'C');
		$this->Ln();
	}
	}*/

	function Footer()
	{
    // Positionnement à 1,5 cm du bas
		$this->SetY(-15);
    // Police Arial italique 8
		$this->SetFont('helvetica','I',10);
		$this->SetTextColor(105, 105, 105);
    // Numéro de page
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

	/*$html='<table border="1">
				<tr>
				<td width="200" height="30">cell 1</td><td width="200" height="30" bgcolor="#D0D0FF">cell 2</td>
				</tr>
				<tr>
				<td width="200" height="30">cell 3</td><td width="200" height="30">cell 4</td>
				</tr>
				</table>';
    	$txt = file_get_contents($fichier);*/