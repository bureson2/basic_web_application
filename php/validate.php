<?php
//Soubor z funkcemi pro validace. Je na nej odkazovano z redirectu

	//Kontrola neprazdneho jmena a jeho rozumne delky
    function validateName($nameValue){
        if (strlen($nameValue) > 1 and strlen($nameValue) < 17) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
	
	//Kontrola neprazdneho jmena spolecnosti a jeho rozumne delky
	function validateCompany($companyValue){
        if (strlen($companyValue) > 3 and strlen($companyValue) < 30) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
	
	//Kontrola ze IC je opravdu bez znaku a ma spravnou delku
	function validateIC($icValue){
		if(strlen($icValue) == 8 and is_numeric($icValue)){
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	//Kontrola ze DIC ma spravnou delku
	function validateDIC($dicValue){
		if(strlen($dicValue) == 9){
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	//Kontrola vyplneni a rozumne delky
	function validateStreet($stretValue){
		if(strlen($stretValue) > 5 and strlen($stretValue) < 30){
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	//Kontrola vyplneni a rozumne delky
	function validateCity($cityValue){
		if(strlen($cityValue) > 1 and strlen($cityValue) < 21){
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	//Kontrola vyplneni a rozumne delky
	function validateCountry($countryValue){
		if(strlen($countryValue) > 1 and strlen($countryValue) < 21){
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	//Kontrola ze PSC neobashuje znaky a ma spravnou delku
	function validatePSC($pscValue){
		if(strlen($pscValue) == 5 and is_numeric($pscValue)){
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	//Kontrola vyplneni a spravne delky predmetu dotazu
	function validateObject($objectValue){
		if(strlen($objectValue) > 1 and strlen($objectValue) < 21){
			return TRUE;
		} else {
			return FALSE;
		}
	}		
	
	//Kontrola vyplneni a spravne delky otazky dotazu
	function validateQuestion($questionValue){
		if(strlen($questionValue) > 3 and strlen($questionValue) < 21){
			return TRUE;
		} else {
			return FALSE;
		}	
	}
	
	//Kontrola spravne delky telefonniho cisla a absence jinych znaku
	function validatePhone($phoneValue){
		if(strlen($phoneValue) == 9 and is_numeric($phoneValue)){
			return TRUE;
		} else {
			return FALSE;
		}
	}	
	
	//Kontrola, ze email obsahuje @ a .
    function validateEmail($emailValue){
        if (strpos($emailValue, "@") and strpos($emailValue, ".")) {
            return TRUE;
        }   else {
            return FALSE;
        }       
    }
?>