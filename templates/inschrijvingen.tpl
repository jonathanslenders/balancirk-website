{extends "templates/base.tpl" }

{block menu_inschrijvingen}class="selected"{/block}

{block "css"}
.form-table input { width: 100%; }
.form-table textarea { width: 100%; }
{/block}

{block "framed_body"}
	<h2>Inschrijvingen</h2>

	{if $error}
		<p class="error">Gelieve alle veldjes in te vullen</p>
	{/if}
	{if $verzonden}
		<p class="info">Uw inschrijving is verzonden</p>
	{else}
		<form method="post" action="?">
			<p>

				Via dit formulier kan je jezelf of een ander gezinslid
				inschrijven.
			</p>
			<p>
				Tijdens de maand september kan er vrij kennis gemaakt worden
				met het circusatelier.<br />Daarna betaal je <a href="/lidgeld">Lidgeld</a>.
			</p>
			<table class="form-table" style="width: 90%;">
				<tr>
					<th><label for="i_naam">Naam:</label></th>
					<td><input name="i_naam" id="i_naam" type="text" value="{$naam|escape}"/></td>
				</tr>
				<tr>
			  		<th><label for="i_email">E-mail:</label></th>
					<td><input name="i_email" id="i_email" type="text" value="{$email|escape}"/></td>
				</tr>
				<tr>
			  		<th><label for="i_tel">Telefoon:</label></th>
					<td><input name="i_tel" id="i_tel" type="text" value="{$tel|escape}"/></td>
				</tr>
				<tr>
					<th><label for="i_opmerkingen">Opmerkingen:</label></th>
					<td>
						<textarea rows="8" name="i_opmerkingen" id="i_opmerkingen">{$opmerkingen|escape}</textarea>
					</td>
				</tr>
				<tr>
					<th><label>Bevestigingscode:</label></th>
					<td>
						<p>Typ deze code over - <a href="#" id="captcha_button">waarom?</a></p>
						<p style="display:none; margin: 0 8em;" id="captcha_info">
							Om te voorkomen dat automatische spam robots dit formulier invullen,
							vragen we je om in dit vakje 'balancirk' te typen. We veronderstellen
							dat een robot niet slim genoeg is om dit te lezen, terwijl jij dat wel bent.
						</p>
						{if $wrong_captcha}
							<p class="error">Foute bevestigingscode, controleer of je geen typfouten hebt gemaakt.</p>
						{/if}
					  <p class="input-text"><img src="/graphics/captcha.png" />: <br />
						<input name="i_captcha" type="text" value="{$captcha|escape}"/></p>  
					</td>
				</tr>

			</table>
				<script type="text/javascript">
					$(function() {
						$('#captcha_button').click(function() { $('#captcha_info').toggle(); return false; });
					});
				</script>

			<p class="input-submit">
				<input type="hidden" name="send" value="true" />
				<input type="submit" value="Inschrijven" /></p>
		</form>
	{/if}
{/block}
