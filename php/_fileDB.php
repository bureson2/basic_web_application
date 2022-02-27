<?php
	define('DBFILE', '../php/db.json'); //nastaveni konstanty naseho "databazoveho" souboru
  
	$data = file_get_contents(DBFILE); //ziskani json obsahu
	
	//pokud data nejsou, zalozi se pomoci skriptu createDB.php
	if ($data == NULL) {
		include('../php/createDB.php');
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
			'object' => $_POST['object'],
            'question' => $_POST['question'],
			'phone' => $_POST['phone'],
			'email' => $_POST['email'],
			'comment' => $_POST['comment']
		);
		
		//pole newNote je pak volano spolu s nactenymi daty do funkce storeData
		storeData($data, $newNote);
	}
?>