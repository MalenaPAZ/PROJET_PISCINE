<?php
	/*$xml = new DomDocument('1.0','utf-8');
	$xml->formatOutput=true;
	$xml->preserveWhiteSpace=false;
	//create element using createElement()
	//append child to parent using appendChild()*/
	$proc = new XSLTProcessor;
	$xml = new DOMDocument;
	$xml->load('malenapaz.xml');
	$xsl = new DOMDocument;
	$xsl->load('cv.xsl');
	$proc->importStyleSheet($xsl); 
	if($html= $proc->transformToXML($xml)){
		echo $html;
	}else{
		trigger_error('La transformation XSL à échouée.', E_USER_ERROR);
	}

?>
