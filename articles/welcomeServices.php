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
					<h3>Děkujeme za vyplnění objednávky</h3>
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