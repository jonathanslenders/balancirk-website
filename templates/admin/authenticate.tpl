{extends "templates/base.tpl" }

{block "framed_body"}
	<h3>Website administratie</h3>
	{if $authentication_error}
		<p class="error">Foutief wachtwoord</p>
	{/if}

	<form method="post" action="?">
		<p class="input-text"><label>Gebruikersnaam:
			<input name="username" type="text"/></label></p>  
		<p class="input-text"><label>Wachtwoord:
			<input name="password" type="password"/></label></p>  
		<p class="input-submit">
			<input type="submit" value="Inloggen" /></p>
	</form>
{/block}
