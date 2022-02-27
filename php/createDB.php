<?php
//Pokud se nenactou pri volani data z db.json je volan tento skript
//ten vytvari prvni json zaznam

	//promenna note znaci jeden cely zaznam
    $note = array(
        'object' => $_POST['object'],
        'question' => $_POST['question'],
		'phone' => $_POST['phone'],
		'email' => $_POST['email'],
		'comment' => $_POST['comment']
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