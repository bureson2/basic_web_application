<?php
	session_start();

	include '../php/selectStyleArticles.php';
	include '../php/_fileDB.php';
	include('../php/_users.php');
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
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v9.0" nonce="I0ExEhBO"></script>
		
        <header>
            <nav class="mainNav">
                <ul>
					<li><img class="horizontal-align" src="../images/logo.png" alt="logo salónu"></li>
                    <li><a class="horizontal-align" href="../index.php">O nás</a></li>
                    <li><a class="horizontal-align" href="services.php">Služby a ceník</a></li>
                    <li><a class="horizontal-align" href="galery.php">Galerie</a></li>
                    <li><a class="horizontal-align" href="contact.php">Kontakt</a></li>
                    <li><a class="active horizontal-align" href="reference.php">Reference</a></li>
                </ul>
            </nav>
        </header>

        <main class="topic nextTo center-align">				
			<?php
				$signedIn = isset($_SESSION['userId']) ? $_SESSION['userId'] : false;
				if($signedIn){
					include '../php/showData.php';
				}		
			?>
			
			
			<div class="center-align">
				<h2>Youtube</h2>
				<div class="media">
					<iframe src="https://www.youtube.com/embed/zkxgMv4fPUQ" width="720" height="405" allowfullscreen></iframe>
				</div>
				
				<h2>Facebook</h2>
				<div class="media fb-post" data-href="https://www.facebook.com/darekjakovysity/posts/186919656250241" data-show-text="true" data-width="">
					<blockquote cite="https://www.facebook.com/darekjakovysity/posts/186919656250241" class="fb-xfbml-parse-ignore"><p>🎄🎁 VÁNOCE 🎁🎄 
						Inspirujte se na Vánoce ... dárky pro Vaše blízké, které potěší 🥰

						darekjakovysity&#064;email.cz
						darekjakovysity&#064;seznam.cz    , 702 265 661
						</p>Zveřejnil(a) 
						<a href="https://www.facebook.com/darekjakovysity/">Dárek jako vyšitý   
						tel. kontakt: 606 124 963
						</a> dne&nbsp;
						<a href="https://www.facebook.com/darekjakovysity/posts/186919656250241">Čtvrtek 12. listopadu 2020
						</a>
					</blockquote>
				</div>
			</div>	
		</main>

        <aside>
            <h3>Navštivte také</h3>
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