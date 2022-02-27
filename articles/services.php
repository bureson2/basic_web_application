<?php
	include '../php/selectStyleArticles.php';
	include '../php/successRedirectServices.php';
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="device-width, initial-scale=1.0">
        <title>Salón-výšivky</title>
        <?php
			echo ($selectedSkin);
		?>
		<link type="text/css" rel="stylesheet" href="../css/style-print.css" media="print">
    </head>

    <body>
        <header>
            <nav class="mainNav">
                <ul>
					<li><img class="horizontal-align" src="../images/logo.png" alt="logo salónu"></li>
                    <li><a class="horizontal-align" href="../index.php">O nás</a></li>
                    <li><a class="active horizontal-align" href="services.php">Služby a ceník</a></li>
                    <li><a class="horizontal-align" href="galery.php">Galerie</a></li>
                    <li><a class="horizontal-align" href="contact.php">Kontakt</a></li>
                    <li><a class="horizontal-align" href="reference.php">Reference</a></li>
                </ul>
            </nav>
        </header>

        <main class="topic">
            <section>
                <h1>Služby</h1>
                <div class="inside">
					<p class="strong">Vyšijeme Vám dle přání: </p>
					<ul>
						<li>Na bytové doplňky (ubrusy, závěsy, polštáře, ručníky)</li>
						<li>Na oděvy (šaty, halenky)</li>
						<li>Firemní loga</li>
					</ul>
                </div>
				<div class="inside">
					<p class="strong">Ušijeme Vám na míru: </p>
					<ul>
						<li>Kalhoty</li>
						<li>Košile</li>
						<li>Šaty</li>
						<li>Halenky</li>
						<li>Sukně</li>
						<li>Saka</li>
					</ul>
                </div>
                <p class="strong">Nabízíme: </p>
                <ul>
                    <li>Ušití modelů s výšivkou</li>
                    <li>Expresní služby (tentýž den, do druhého dne)</li>
                </ul>
            </section>

            <section>
				<div class="moveDown">
					<h1>Objednávka</h1>
                </div>
				<form method="post">
                        <fieldset>
                            <legend>Fakturační údaje</legend>
                            <p>
                                <label>Jméno:
                                    <input type="text" name="name1" title="Vyplňte křestní jméno" value="<?php echo(htmlspecialchars($name1Value));?>" pattern="[A-Za-zěĚšŠčČřŘžŽýÝáÁíÍéÉÓó ]{2,15}">
                                </label>
                
                                <label>Příjmení:
                                    <input type="text" name="surname1" title="Vyplňtě příjmení" value="<?php echo(htmlspecialchars($surname1Value));?>" pattern="[A-Za-zěĚšŠčČřŘžŽýÝáÁíÍéÉÓó ]{2,15}">
                                </label>
								<?php
									if(isset($validName1) && $validName1 == FALSE && $name1Value != ""){
										echo('<br />!Špatná délka jména!<br />');
									}
									if(isset($validSurname1) && $validSurname1 == FALSE && $surname1Value != ""){
										echo('<br />!Špatná délka příjmení!<br />');
									}
								?>
                            </p>
                            <p>
                                <label>Společnost:
                                    <input type="text" name="company" size="50" title="Celý název společnosti" value="<?php echo(htmlspecialchars($companyValue));?>" pattern="[A-Za-zěĚšŠčČřŘžŽýÝáÁíÍéÉÓó,. ]{2,15}">
									<?php
										if(isset($validCompany) && $validCompany == FALSE && $companyValue != ""){
											echo('<br />!Špatná délka názvu společnosti!<br />');
										}
									?>										
                                </label>
                            </p>
                            <p>
                                <label>IČ:
                                    <input type="text" name="ic" title="Identifikační číslo" value="<?php echo(htmlspecialchars($icValue));?>" pattern="[0-9]{8}">
                                </label>
                
                                <label>DIČ:
                                    <input type="text" name="dic" title="Daňové identifikační číslo" value="<?php echo(htmlspecialchars($dicValue));?>" pattern="[0-9]{9}">
									
                                </label>
								<?php
									if(isset($validIC) && $validIC == FALSE && $icValue != ""){
										echo('<br />!Špatný formát IČ!<br />');
									}
									if(isset($validDIC) && $validDIC == FALSE && $dicValue != ""){
										echo('<br />!Špatný formát DIČ!<br />');
									}
								?>
                            </p>
                            <p>
                                <label>Ulice a č.p.:
                                    <input type="text" name="street1" title="Adresa společnosti, formát: U bídníků, 130" value="<?php echo(htmlspecialchars($street1Value));?>" pattern="[A-Za-z0-9ěĚšŠčČřŘžŽýÝáÁíÍéÉÓó,]{5, 25}">
                                </label>
                
                                <label>Město / Obec:
                                    <input type="text" name="city1" title="Název sídla společnosti" value="<?php echo(htmlspecialchars($city1Value));?>" pattern="[A-Za-zěĚšŠčČřŘžŽýÝáÁíÍéÉÓó ]{2,20}">
                                </label>
								<?php
									if(isset($validStreet1) && $validStreet1 == FALSE && $street1Value != ""){
										echo('<br />!Špatná délka adresy!<br />');
									}
									if(isset($validCity1) && $validCity1 == FALSE && $city1Value != ""){
										echo('<br />!Špatná délka názvu města!<br />');
									}
								?>
                            </p>
                            <p>
                                <label>PSČ:
                                    <input type="text" name="psc1" title="Poštovní směrovací číslo, formát 12345" value="<?php echo(htmlspecialchars($psc1Value));?>" pattern="[0-9]{5}">
                                </label>
                
                                <label>Země:
                                    <input type="text" name="country1" title="Země společnostni, stačí zkratka" value="<?php echo(htmlspecialchars($country1Value));?>" pattern="[A-Za-zěĚšŠčČřŘžŽýÝáÁíÍéÉÓó ]{2,20}">
                                </label>
								<?php
									if(isset($validPSC1) && $validPSC1 == FALSE && $psc1Value != ""){
										echo('<br />!Špatný formát PSČ!<br />');
									}
									if(isset($validCountry1) && $validCountry1 == FALSE && $country1Value != ""){
										echo('<br />!Špatná délka názvu země!<br />');
									}
									?>
                            </p> 
                        </fieldset>
                        <fieldset>
                            <legend>Adresa pro doručení</legend> 
                            <p>
                                <label><span class="red">*</span>Jméno:
                                    <input type="text" name="name2" title="Vyplňte křestní jméno" value="<?php echo(htmlspecialchars($name2Value));?>" required>			
                                </label>
                
                                <label><span class="red">*</span>Příjmení:
                                    <input type="text" name="surname2" title="Vyplňtě Příjmení" value="<?php echo(htmlspecialchars($surname2Value));?>" required>							
                                </label>
								<?php
									if(isset($validName2) && $validName2 == FALSE){
										echo('<br />!Špatná délka jménau!<br />');
									}
									if(isset($validSurname2) && $validSurname2 == FALSE){
										echo('<br />!Špatná délka příjmení!<br />');
									}
								?>
                            </p>
                            <p>
                                <label><span class="red">*</span>Email:
                                    <input type="text" name="email" title="Emailová adresa v klasickém formátu" value="<?php echo(htmlspecialchars($emailValue));?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,20}$" required>
                                </label>
                
                                <label><span class="red">*</span>Telefon:
                                    <input type="text" name="phone" title="Telefonní číslo, bez předvolby" value="<?php echo(htmlspecialchars($phoneValue));?>" pattern="[0-9]{9}" required>
                                </label>
								<?php
									if(isset($validEmail) && $validEmail == FALSE){
										echo('<br />!Špatný formát emailu!<br />');
									}
									if(isset($validPhone) && $validPhone == FALSE){
										echo('<br />!Špatný formát telefonního čísla!<br />');
									}
								?>
                            </p>
                            <p>
                                <label><span class="red">*</span>Ulice a č.p.:
                                    <input type="text" name="street2" title="Adresa doručení, formát: U bídníků, 130" value="<?php echo(htmlspecialchars($street2Value));?>" pattern="[A-Za-z0-9ěĚšŠčČřŘžŽýÝáÁíÍéÉÓó,]{5, 25}" required>
                                </label>
                
                                <label><span class="red">*</span>Město / Obec:
                                    <input type="text" name="city2" title="Název města doručení" value="<?php echo(htmlspecialchars($city2Value));?>" pattern="[A-Za-zěĚšŠčČřŘžŽýÝáÁíÍéÉÓó ]{2,20}" required>
                                </label>
								<?php
									if(isset($validStreet2) && $validStreet2 == FALSE){
										echo('<br />!Špatná délka adresy!<br />');
									}
									if(isset($validCity2) && $validCity2 == FALSE){
										echo('<br />!Špatná délka názvu města!<br />');
									}
								?>
                            </p>
                            <p>
                                <label><span class="red">*</span>PSČ:
                                    <input type="text" name="psc2" title="Poštovní směrovací číslo, formát 12345" value="<?php echo(htmlspecialchars($psc2Value));?>" pattern="[A-Za-zěĚšŠčČřŘžŽýÝáÁíÍéÉÓó ]{8, 25}" required>
                                </label>
                
                                <label><span class="red">*</span>Země:
                                    <input type="text" name="country2" title="Země objednávky, stačí zkratka" value="<?php echo(htmlspecialchars($country2Value));?>" pattern="[A-Za-zěĚšŠčČřŘžŽýÝáÁíÍéÉÓó ]{2,20}" required>
                                </label>
								<?php
									if(isset($validPSC2) && $validPSC2 == FALSE){
										echo('<br />!Špatný formát PSČ!<br />');
									}
									if(isset($validCountry2) && $validCountry2 == FALSE){
										echo('<br />!Špatná délka názvu země!<br />');
									}
								?>
                            </p> 
                        </fieldset>
                        <input class="submit" type="submit" name="send" value="Odeslat">
                </form>
            </section>
			<script src="../js/validateService.js"></script>
            
        </main>

        <aside>
            <h2>Navštivte také</h2>
            <a href="http://www.okstavby.cz/" target="_blank"><img src="../images/okstavby.png" alt="logo společnosti ok stavby"></a>
            <a href="https://www.facebook.com/darekjakovysity/" target="_blank"><img src="../images/darekjakovysity.png" alt="logo společnosti dárek jako vyšitý"></a>
            <a href="https://www.penzion-berany.cz/" target="_blank"><img src="../images/berany.jpg" alt="náhledový obrazek nezionu Berany"></a>
			<a href="https://praguecycleboat.com/" target="_blank"><img src="../images/cycleboat.jpg" alt="logo společnosti Prague cycle boat"></a>
			<a href="http://okdlazby.cz/" target="_blank"><img src="../images/okdlazby.png" alt="logo společnosti OK Dlažby"></a>
		</aside>

        <footer>
            <nav class="footNav">
                <ul>
                    <li><a href="../index.php">O nás</a></li>
                    <li><a href="services.php">Služby a ceník</a></li>
                    <li><a href="galery.php">Galerie</a></li>
                    <li><a href="contact.php">Kontakt</a></li>
                    <li><a href="reference.php">Reference</a></li>
                </ul>
				<a href="https://www.instagram.com/darek_jako_vysity/?hl=cs"><img class="social" src="../images/ig.png" alt="instagram logo"></a>
				<a href="https://www.facebook.com/darekjakovysity/"><img class="social" src="../images/fb.png" alt="facebook logo"></a>	
            </nav>
        </footer>

    </body>
</html>