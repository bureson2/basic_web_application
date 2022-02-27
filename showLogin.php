<div class="inside">
	<label>Login:
		<input type="text" name="username">
	</label>
				
	<label>Heslo:
		<input type="password" name="password">
	</label>
	<div>
		<input class="submit" type="submit" value="Přihlásit" title="Přihlášení do systému" name="login"><br />
		<?php
			echo isset($error) ? $error :'';
		?>
	</div>	
</div>       