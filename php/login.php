<?php
//Soubor zajistujici prihlaseni pro administratora

    include('php/_users.php'); //Includovani kontrolniho souboru
	$isForm = ($_SERVER["REQUEST_METHOD"] == "POST"); // Kontrola formy odeslani (vraci TRUE/FALSE)
    if ($isForm) {
		//Otestovani spravneho prirazeni odeslanych hodnot
        $username = isset($_POST['username']) ? $_POST['username'] : false; 
        $password = isset($_POST['password']) ? $_POST['password'] : false;
		
		//Pokud nektera poslana hodnota nebyla uspesne asociovana pod 'username' a 'password',
		//tak se neprovede prihlaseni a vyhodi se error message.
		//V opacnem pripade zacnou probihat dalsi kontroly
        if ($username != FALSE && $password != FALSE) {
            $user = getUserByUsername($username, $users); //metoda z _users.php, vraci TRUE/FALSE na zaklade nalezeni uzivatele

			//Pokud je uzivatel nalezen dojde ke kontrole hesla 
			//zahaji se session a nastane presmerovani.
            //Pokud jakakoli podminka neni splnena dojde k vypisu error message
			if ($user) {
                if (password_verify($password, $user['passwordhash'])) { 
				if(!isset($_SESSION)){
						session_start();
					}		
                    $_SESSION['userId'] = $user['id'];
                } else {
                    $error = 'Byla zadana neplatná kombinace hesla a uživatelského jména';
                }
            } else {
                $error = 'Byla zadana neplatná kombinace hesla a uživatelského jména';
            }

        } else {
            $error = 'Byla zadana neplatná kombinace hesla a uživatelského jména';
        }
		
    }

?>