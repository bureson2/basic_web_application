<?php
	//Odkazy pro jednotlive CSS styly
	$style1 = '<link type="text/css" rel="stylesheet" href="css/style.css">';
	$style2 = '<link type="text/css" rel="stylesheet" href="css/style2.css">';

	// kontrola jiz prirazeneho skinu, pripadne prvotni prirazeni
	$style = isset($_COOKIE['skin']) ? $_COOKIE['skin'] : 1;
	
	//pri zmene skinu, prenastaveni cookie uchovavajici informaci o skinu
	if (isset($_POST['skinSelector']) && isset($_POST['skin'])) {
		$style = $_POST['skin'];
		setcookie('skin', $style, time()+3600+24*365, '/~bureson2', '.toad.cz');
	}
	
	$selectedSkin = $style == 1 ? $style1 : $style2;
?>