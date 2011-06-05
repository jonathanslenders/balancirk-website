{extends "templates/base.tpl" }

{block menu_fotos}class="selected"{/block}

{block "framed_body"}
	<h2>Foto's</h2>
	<p><a href="/albums">&laquo; Andere albums</a></p>
	<div id="picture-list">
		{loop $fotos}
			<span style="min-height: 150px;"><a href="?album={$album|escape}&amp;foto={$foto|escape}">
					<img src="/_albums/{$album|escape}/thumb/{$foto|escape}" /></a></span>
		{/loop}
	</div>
{/block}
