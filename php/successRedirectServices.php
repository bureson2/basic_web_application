<?php
    include 'validate.php'; //obsahuje validacni funkce

    $isFormSent = count($_POST) > 0; //uklada pocet odeslani
	
	//definice promennych
	$name1Value = "";
	$surname1Value = "";
	$companyValue = "";
	$icValue = "";
	$dicValue = "";
	$street1Value = "";
	$city1Value = "";
	$psc1Value = "";
	$country1Value = "";
	$name2Value = "";
	$surname2Value = "";
	$emailValue = "";
	$phoneValue = "";
	$street2Value = "";
	$city2Value = "";
	$psc2Value = "";
	$country2Value = "";	

    if ($isFormSent) { //pta se, zda opravdu doslo k odeslani
        //zpracovani data - form byl poslan
	
		//prirazovani pichozich hodnot do promennych
		$name1Value = $_POST["name1"];
		$surname1Value = $_POST["surname1"];
		$companyValue = $_POST["company"];
		$icValue = $_POST["ic"];
		$dicValue = $_POST["dic"];
		$street1Value = $_POST["street1"];
		$city1Value = $_POST["city1"];
		$psc1Value = $_POST["psc1"];
		$country1Value = $_POST["country1"];
		$name2Value = $_POST["name2"];
		$surname2Value = $_POST["surname2"];
		$phoneValue = $_POST["phone"];
		$emailValue = $_POST["email"];
		$street2Value = $_POST["street2"];
		$city2Value = $_POST["city2"];
		$psc2Value = $_POST["psc2"];
		$country2Value = $_POST["country2"];

		//overovani spravne validnosti hodnot jednotlivych inputu
		//spravne zapsane hodnoty vraci TRUE, spatne vyplnene FALSE
		//metody jsou obsazeny v souboru validate.php 
		$validName1 = validateName($name1Value);
		$validSurname1 = validateName($surname1Value);
		$validName2 = validateName($name2Value);
		$validSurname2 = validateName($surname2Value);
		$validCompany = validateCompany($companyValue);
		$validIC = validateIC($icValue);
		$validDIC = validateDIC($dicValue);
		$validStreet1 = validateStreet($street1Value);
		$validStreet2 = validateStreet($street2Value);
		$validCity1 = validateCity($city1Value);
		$validCity2 = validateCity($city2Value);
		$validPSC1 = validatePSC($psc1Value);
		$validPSC2 = validatePSC($psc2Value);
		$validCountry1 = validateCountry($country1Value);
		$validCountry2 = validateCountry($country2Value);
		$validPhone = validatePhone($phoneValue);
        $validEmail = validateEmail($emailValue);
		
		//uklada hodnotu, zda jsou vsechny povinne atributy vyplneny spravne
        $valid = $validName2 && $validSurname2 && $validStreet2 && $validCity2 && $validPSC2 && $validCountry2 && $validPhone && $validEmail;

        if ($valid){
            //vse je povnne je ok, presmerujeme
			include '../php/_fileDBServices.php';
            header("Location: ../articles/welcomeServices.php"); // presmerovani na podekovani za odeslani formulare	
        }
    }
?>