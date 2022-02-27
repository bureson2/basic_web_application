<?php
//Pokud se nenactou pri volani data z db.json je volan tento skript
//ten vytvari prvni json zaznam

	//promenna note znaci jeden cely zaznam
    $note = array(
        'name1' => $_POST['name1'],
        'surname1' => $_POST['surname1'],
		'company' => $_POST['company'],
		'ic' => $_POST['ic'],
		'dic' => $_POST['dic'],
		'street1' => $_POST['street1'],
		'city1' => $_POST['city1'],
		'psc1' => $_POST['psc1'],
		'country1' => $_POST['country1'],
		'name2' => $_POST['name2'],
		'surname2' => $_POST['surname2'],
		'phone' => $_POST['phone'],
		'street2' => $_POST['street2'],
		'city2' => $_POST['city2'],
		'psc2' => $_POST['psc2'],
		'country2' => $_POST['country2']
        );

	//data jsou pole vsech zaznamu
    $data = array(
        'notes' => array($note)
    );

	//pouziti funkce pro zakodovani do formatu json
    $encoded = json_encode($data);

	
    file_put_contents(DBFILE, $encoded); //pridani do naseho "databazoveho" souboru
	$data = file_get_contents(DBFILE); //Zajisteni, ze pri prazdne databazi nevyskoci error, pri naslednem provadeni programu u funkce json_decode
?>