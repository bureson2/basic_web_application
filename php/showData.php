<?php
//nacteni, dekodovani a nahrani dat do promenne
	$data = file_get_contents(DBFILE); //DBFILE definovana v _fileDB.php includovanem vyse
	$raw_data = json_decode($data, true);
	$raw_data = $raw_data['notes'];
				
	//pouziti superglobalni promenne GET k ziskani informace o strance
	$page = !isset($_GET['page']) ? 1 : $_GET['page'];
	$limit = 5; // 5 radku na 1 stranku
	$offset = ($page - 1) * $limit; //oznacuje pozici v poli
	$total_items = count($raw_data); // celkove mnozstvi dat
	$total_pages = ceil($total_items / $limit); //"zaokrouhleni nahoru pro urceni poctu stran"
	$final = array_splice($raw_data, $offset, $limit); // rozdeleni podle limitu na jednotlive stranky	
?>
				
	<h2>Vzkazy od lidí</h2>
		<div class="overflow">
			<table>
				<tr><th>Předmět</th><th>Kategorie</th><th>Telefon</th><th>Email</th><th>Komentář</th></tr>
				<!---Prochazeni vech dat pro vypis na dane strance (podle final)---->
				<?php foreach($final as $key => $value): ?>
					<tr>
					<?php foreach($value as $index => $element): ?>
						<td><?php echo(htmlspecialchars(!is_array($element) ? $element : implode(',', $element))); ?></td>
					<?php endforeach; ?>
					</tr>
				<?php endforeach; ?>
			</table>
				
			<div class="numbers">
			<!---Strankovani/prepinani mezi jednotlivymi strankami---->
				<?php for($x = 1; $x <= $total_pages; $x++): ?>
					<a href='reference.php?page=<?php echo $x; ?>'><?php echo $x; ?></a>
				<?php endfor; ?>
			</div>
		</div>