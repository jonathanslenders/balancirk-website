
{extends "templates/base.tpl" }
{block "frame"}no-frame{/block}

{block "body"}
	{if $page}
	<h3>{$page|escape}</h3>
	{else}
		<h3>Website administratie</h3>
	{/if}

	{if $saved}
		<p class="info">Pagina opgeslagen. <a href="/{$page}">Bekijk resultaat</a></p>  
	{else}
		<form method="post" action="?">
			<input type="hidden" name="edit" value="{$page }" />
			<input type="hidden" name="save" value="true" />
			<textarea cols="100" rows="20" name="source"
				style="width: 100%; font-family: Courier, 'Courier New', monospace ">{$source|escape}</textarea>
			<input type="submit" value="Opslaan" />
		</form>
	{/if}

{/block}
