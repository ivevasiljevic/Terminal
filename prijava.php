<?php 
	$ptitle = "Terminal | "; 
	$ppage = "Prijava";
	$profileImg = "images/person/personImg.png";//default je "images/person/personDefault.png"
	$productImg = "images/product/productImg.png";//default je "images/product/productDefault.png"
	$searchImg = "images/searchIcon.png"; 
	

	
	//u superglobalnoj varijabli _server pod kljucen document_root, vrati mi C:\wamp64\www//
	require $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/head.php'; 
	require $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/contentPrijava.php'; 
	require $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/prefooter.php'; 
	require $_SERVER["DOCUMENT_ROOT"] . '/terminal/includes/footer.php'; 

?>



