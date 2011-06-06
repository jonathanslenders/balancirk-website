{extends "templates/base.tpl" }

{block menu_gastenboek}selected{/block}

{block css}

#content dl.gastenboek dt span { font-size: 70%; font-weight: normal; }
#content dl.gastenboek dd { border-bottom: 1px solid #cccccc; }
form.gastenboek { border-top: 2px solid  rgb(126,177,43); }

.form-table { width: 90%; }
.form-table input { width: 100%; }
.form-table textarea { width: 100%; }
{/block}

{block "framed_body"}
	<h2>Gastenboek</h2>
	<p>
		<a href="#nieuw-bericht">Laat ook een berichtje achter &raquo;</a>
	</p>

	<dl class="gastenboek">
	{loop $messages}
		<dt>{$naam|escape}<span> ({$formatted_tijd|escape})</span>
			
		{if $authenticated }
			<span style="background-color: black; padding: 5px; " >
				<a style="color: white; " href="?verwijder={$tijd|escape}">Verwijder</a>
			</span>
		{/if}

		</dt>
		<dd>{$boodschap|escape|nl2br}</dd>
	{/loop}
	</dl>

	{if $error }
	<p class="error">Gelieve alle veldjes in te vullen</p>
	{/if}

	{if $using_urls }
	<p class="error">Gelieve geen hyperlinks in een bericht te plaatsen (of verwijder http://)</p>
	{/if}

	<form class="gastenboek" method="post" action="?">
		<table class="form-table" id="nieuw-bericht">
			<tr>
				<th><label for="i_naam">Naam:</label></th>
				<td><input id="i_naam" name="naam" type="text" value="{$naam|escape}"/></td>
			</tr>
			<tr>
				<th><label for="i_boodschap">Boodschap</label></th>
				<td><textarea rows="8" name="boodschap" id="i_boodschap">{$boodschap|escape}</textarea></td>
			</tr>
		</table>

		<p class="input-submit">
			<input type="hidden" name="send" value="true" />
			<input type="hidden" name="captcha" value="captcha" />
			<input type="submit" value="Neerschrijven in gastenboek" /></p>
	</form>
{/block}
