{extends "templates/base.tpl" }

{block menu_fotos}class="selected"{/block}

{block "css"}
	.directory_listing { margin-left: 2em; }
	pre { border: 1px solid #cccccc; padding: 1em; }
{/block}

{block "nav"}
	<ul id="nav">
		<li><a href="index.php?logout=true">Log out</a></li>
		<li><a href="index.php">Admin start</a></li>
		<li><a href="paginas.php">Pagina's</a></li>
	</ul>
{/block}
