<?php
	session_start();// zahajeni session

	include 'php/selectStyleIndex.php'; //includovani stlu podle cookies
	include 'php/login.php'; //includovani skriptu pro prihlaseni
?>


<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="device-width, initial-scale=1.0">
		<!-- nastavit stridani skinu podle casu -->
		<link type="text/css" rel="stylesheet" href="css/style-print.css" media="print">
		<?php
			echo ($selectedSkin);
		?>
        <title>Salón-výšivky</title>
    </head>

    <body>
        <header>
            <nav class="mainNav">
                <ul>
                    <li><img class="horizontal-align" src="images/logo.png" alt="logo salónu"></li>
                    <li><a class="active horizontal-align" href="index.php">O nás</a></li>
                    <li><a class="horizontal-align" href="articles/services.php">Služby a ceník</a></li>
                    <li><a class="horizontal-align" href="articles/galery.php">Galerie</a></li>
                    <li><a class="horizontal-align" href="articles/contact.php">Kontakt</a></li>
                    <li><a class="horizontal-align" href="articles/reference.php">Reference</a></li>
                </ul>
            </nav>
        </header>
		
		<main>
			<section class="moveBar">
					<div class="moveBarInside">
						<h1>Galerie</h1>
						<p>
						Navštivte naší galerii a podívejte se na naši práci.					
						</p>
					</div>
					<div class="moveBarInside">
						<a href="articles/galery.php">Více...</a>
					</div>
            </section>
			
			<div class="topic">
			<section>
				<h1>O nás</h1>
                <p class="inside">
                    Naše firma byla založena v roce 2003 Počas doby svého úspěšného působení 
                    si Salón výšivky a zakázkové šití vybudoval poměrně silnou pozici a do budoucna si stanovil jasné priority své obchodní činnosti. Je naším cílem získávat další nové klienty a nabízet jim atraktivní služby.
                </p>
                <p class="inside">
                    Nacházíme se v Libiši při Neratovicích, ul. Mělnická 73 a zabýváme se strojovým vyšíváním, vyšíváním předloh - firemní loga, monogramy, bytové doplňky (ubrusy, polštáře), reklamní textil a zakázkovým šitím s možností výšivky.
                </p>
                <p>
                    Naše společnost získala řadu spokojených zákazníků, kteří oceňují především kvalitu práce, rychlé dodací lhůty, profesionalitu a individuální přístup ke každé zakázce.
                </p>
                <p>
                    Vyšíváme na profesionálních a kvalitních počítačem řízených strojích špičkové kvality značky TAJIMA a BROTHER spolu se základním softwarem pro vytvoření vyšívacích návrhů. 
                    Vlastníme programovací studio pro rychlé a kvalitní zpracování předloh.
                </p>   
            </section>
			
			<section>
				<h2>Osobní nastavení</h2>
				<form method="post">
					<fieldset>
						<legend>Výběr vzhledu</legend>
						<div  class="center-align inside">
							<label><input type="radio" name="skin" value="1">Klasický režim</label>
							<label><input type="radio" name="skin" value="2">Noční režim</label>
							<div>
								<input class="submit" type="submit" value="Vybrat vzhled" title="Potvrzení volby vzhledu" name="skinSelector">
							</div>
						</div>
					</fieldset>
					<fieldset>
                        <legend>Přihlášení</legend>
							<?php
								//zkontroluje jestli uz je uzivatel prihlasen
								$signedIn = isset($_SESSION['userId']) ? $_SESSION['userId'] : false;
								if($signedIn){
									//pokud ano, tak se nacte privitani administratora
									include 'welcome.php';
								} else {
									//pokud ne zavola se vypis loginu
									include 'showLogin.php';
								}
							?>             
                    </fieldset>				
				</form>
			</section>
			</div>
			
			<aside>
				<h2 class="strong">Navštivte také</h2>
				<a href="http://www.okstavby.cz/" target="_blank"><img src="images/okstavby.png" alt="logo společnosti ok stavby"></a>
				<a href="https://www.facebook.com/darekjakovysity/" target="_blank"><img src="images/darekjakovysity.png" alt="logo společnosti dárek jako vyšitý"></a>
				<a href="https://www.penzion-berany.cz/" target="_blank"><img src="images/berany.jpg" alt="náhledový obrazek nezionu Berany"></a>
				<a href="https://praguecycleboat.com/" target="_blank"><img src="images/cycleboat.jpg" alt="logo společnosti Prague cycle boat"></a>
				<a href="http://okdlazby.cz/" target="_blank"><img src="images/okdlazby.png" alt="logo společnosti OK Dlažby"></a>
			</aside>
		</main>
		
        <footer>
            <nav class="footNav">
                <ul>
                    <li><a href="index.php">O nás</a></li>
                    <li><a href="articles/services.php">Služby a ceník</a></li>
                    <li><a href="articles/galery.php">Galerie</a></li>
                    <li><a href="articles/contact.php">Kontakt</a></li>
                    <li><a href="articles/reference.php">Reference</a></li>
                </ul>
				<a href="https://www.instagram.com/darek_jako_vysity/?hl=cs"><img class="social" src="images/ig.png" alt="instagram logo"></a>
				<a href="https://www.facebook.com/darekjakovysity/"><img class="social" src="images/fb.png" alt="facebook logo"></a>	
            </nav>
        </footer>

    </body>
</html>