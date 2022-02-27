<?php
	define('DBFILE', '../php/db2.json'); //nastaveni konstanty naseho "databazoveho" souboru
  
	$data = file_get_contents(DBFILE); //ziskani json obsahu
	
	//pokud data nejsou, zalozi se pomoci skriptu createDB.php
	if ($data == NULL) {
		include('../php/createDBServices.php');
	} 
	
	//Dekodovani dat z formatu json, do puvodniho formatu pole zaznamu
	$data = json_decode($data, JSON_OBJECT_AS_ARRAY);
	
	//Funkce pro ulozeni zaznamu
	//Prijima jiz zapsana data a nove zadana data
    function storeData($data, $newNote) {
        array_push($data['notes'], $newNote); //na konec dat jsou pridana nova data
		$encoded = json_encode($data); //ty jsou nasledne zakodovana do formatu json
        file_put_contents(DBFILE, $encoded); //a nahrany na do "databazoveho" souboru;
    }
	
	//Zkontrolujeme jestli doslo k odeslani dat
	//Prakticky duplicitni cast kodu, uz je jednou testovano v redirectu.
	//Nasleduje vytvoreni pole newNote
	if (isset($_POST['send'])) { 
        $newNote = array(
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
		
		//pole newNote je pak volano spolu s nactenymi daty do funkce storeData
		storeData($data, $newNote);
	}
?>