{extends "templates/base.tpl" }

{block menu_fotos}selected{/block}

{block "framed_body"}
{* begin edit *}
	<h2>Foto's</h2>
	<div id="picture-list">
		{loop $fotos}
			<span><a href="album?album={$album|escape}">
					<img src="_albums/{$album|escape}/thumb/{$cover|escape}" alt="{$title|escape} album" /><br />
					{$title|escape}</a></span>

		{/loop}
	</div>
	<p>&nbsp;</p>
{* end edit *}
{/block}
