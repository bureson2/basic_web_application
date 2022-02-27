<?php
	include '../php/selectStyleArticles.php';
	include '../php/successRedirect.php';
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="device-width, initial-scale=1.0">
        <?php
			echo ($selectedSkin);
		?>
		<link type="text/css" rel="stylesheet" href="../css/style-print.css" media="print">
        <title>Salón-výšivky</title>
    </head>

    <body>
        <header>
            <nav class="mainNav">
                <ul>
					<li><img class="horizontal-align" src="../images/logo.png" alt="logo salónu"></li>
                    <li><a class="horizontal-align" href="../index.php">O nás</a></li>
                    <li><a class="horizontal-align" href="services.php">Služby a ceník</a></li>
                    <li><a class="horizontal-align" href="galery.php">Galerie</a></li>
                    <li><a class="active horizontal-align" href="contact.php">Kontakt</a></li>
                    <li><a class="horizontal-align" href="reference.php">Reference</a></li>
                </ul>
            </nav>
        </header>

        <main class="topic">
            <section>
			<h1>Kde nás najdete?</h1>
				<div class="nextTo map">					
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.7029585794335!2d14.498003015609251!3d50.27880467945211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470be7d2da2747b5%3A0x5ff931c339dcc365!2zU2Fsw7NuIFbDvcWhaXZreQ!5e0!3m2!1scs!2scz!4v1606863826539!5m2!1scs!2scz" width="600" height="450" allowfullscreen="" aria-hidden="false"></iframe>
				</div>
				<div class="nextTo adress">
					<address>
						<div class="inside">
							<strong>Salón-výšivky</strong>
							Mělnická 73, Libiš<br />
							277 11
						</div>
					</address>
					<div class="inside">
						<p>Otevírací doba:</p>
						<ul>
							<li><span class="strong">PO:</span> 7:00 -16:00</li>
							<li><span class="strong">ÚT:</span> 7:00 -16:00</li>
							<li><span class="strong">ST:</span> 7:00 -16:00</li>
							<li><span class="strong">ČT:</span> 7:00 -16:00</li>
							<li><span class="strong">PÁ:</span> 7:00 -16:00</li>
							<li><span class="strong">SO:</span> 7:00 -16:00</li>
							<li><span class="strong">NE:</span> 7:00 -16:00</li>
						</ul>
					</div>
					<div class="inside ">
						<p>Telefon: <a href="tel:602-539-858">602 539 858</a></p>
						<p>Email: <a href="mailto:salon.vysivky@seznam.cz">salon.vysivky@seznam.cz</a></p>
					</div>
					<br /><br /><br /><br /><br /><br />
				</div>
            </section>

            <section>
			<h2>Kontaktujte nás.</h2>
                <form method="post">
                    <fieldset>				
					<div>	
                        <label>
                            <span class="red">*</span>Předmět dotazu:<br />
								<input type="text" name="object" size="65" title="Předmět dotazu, 2-20 znaků" value="<?php echo(htmlspecialchars($objectValue));?>" pattern="[A-Za-z0-9ěĚšŠčČřŘžŽýÝáÁíÍéÉÓó,. ]{2,20}" required>
								<?php
									if(isset($validObject) && $validObject == FALSE){
										echo('<br />!Špatné déka předmětu!<br />');
									}
								?>
						</label>
					</div>
                    <div>
                        <label>
                            S čím potřebujete pomoct?<br />
								<select name="question" title="Zvolte do které kategorie Vašeho dotazu">    
									<option value="others">Jiné</option>
									<option value="price">Cena</option>  
									<option value="job">Nabídky práce</option>
									<option value="return">Reklamace</option>
									<option value="transport">Způsob dopravy</option>
								</select>
                        </label>
					</div>
					<div>
                        <label>
                            <span class="red">*</span>Vaše telefonní číslo:<br />
                            <input type="text" name="phone" title="Telefonní číslo, bez předvolby" size="65" value="<?php echo(htmlspecialchars($phoneValue));?>" pattern="[0-9]{9}" required>
								<?php
									if(isset($validPhone) && $validPhone == FALSE){
										echo('<br />!Špatný formát telefonního čísla!<br />');
									}
								?>
                        </label>
					</div>
					<div>
                        <label>
                            <span class="red">*</span>Váš Email:<br />
								<input type="text" name="email" size="65" title="Emailová adresa v klasickém formátu" value="<?php echo(htmlspecialchars($emailValue));?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,20}$" required>
								<?php
									if(isset($validEmail) && $validEmail == FALSE){
										echo('<br />!Špatný formát emailu!<br />');
									}
								?>
						</label>
					</div>
					<div>
                        <label>
                            Text dotazu:<br />
								<textarea name="comment" rows="12" cols="60" title="Napište nám zde o Vašem problému"><?php echo(htmlspecialchars($commentValue));?></textarea>
						</label>
                    </div>
					<div>
                        <label>
                            Přílohy:
                            <input type="file" name="file" title="Obrázky, schémata, fotky, ..." size="65" multiple>
                        </label>
					</div>				
						<input class="submit" type="submit" name="send" value="Odeslat">
                    </fieldset>
                </form>
            </section>
			<script src="../js/validateContact.js"></script>
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