<?php
    include 'validate.php'; //obsahuje validacni funkce

    $isFormSent = count($_POST) > 0; //uklada pocet odeslani
	
	//definice promennych
	$objectValue = "";
	$questionValue = "";
	$phoneValue = "";
    $emailValue = "";
	$commentValue = "";	

    if ($isFormSent) { //pta se, zda opravdu doslo k odeslani
		//prirazovani pichozich hodnot do promennych
		$objectValue = $_POST["object"];
		$questionValue = $_POST["question"];
		$phoneValue = $_POST["phone"];
		$emailValue = $_POST["email"];
		$commentValue = $_POST["comment"];

		//overovani spravne validnosti hodnot jednotlivych inputu
		//spravne zapsane hodnoty vraci TRUE, spatne vyplnene FALSE
		//metody jsou obsazeny v souboru validate.php 
		$validObject = validateObject($objectValue);
		$validQuestion = validateQuestion($questionValue);
		$validPhone = validatePhone($phoneValue);
        $validEmail = validateEmail($emailValue);
		
		//uklada hodnotu, zda jsou vsechny povinne atributy vyplneny spravne
        $valid = $validObject && $validQuestion && $validPhone && $validEmail;

        if ($valid){
            //vse je povinne je ok, presmerujeme
            include '../php/_fileDB.php';
			header("Location: welcomeContact.php");// presmerovani na podekovani za odeslani formulare			
        }
    }
?>