{extends "templates/base.tpl" }

{block menu_fotos}class="selected"{/block}

{block "logo"}
{/block}

{block "frame"}no-frame{/block}

{block "body"}
		<p style="text-align: center; font-size: 80%; margin: 0; padding: 0; margin-bottom: -8px; ">
			{if $prev}
				<a href="?album={$album|escape}&amp;foto={$prev|escape}">&laquo; Vorige</a>
			{else}
				Vorige
			{/if}

			| <a href="?album={$album|escape}">Overzicht</a> |

			{if $next}
				<a href="?album={$album|escape}&amp;foto={$next|escape}">
				Volgende &raquo;</a>
			{else}
				Volgende
			{/if}

{*
			{if $prev}
				<span class="prev"><a href="?album={$album|escape}&amp;foto={$prev|escape}">
				<img src="_albums/{$album|escape}/thumb/{$prev|escape}" /></a></span>
			{/if}
			{if $next}
				<span class="next"><a href="?album={$album|escape}&amp;foto={$next|escape}">
				<img src="_albums/{$album|escape}/thumb/{$next|escape}" /></a></span>
			{/if}
*}
		</p>
		<p class="foto" style="text-align: center;">
		{if next}
			<a href="?album={$album|escape}&amp;foto={$next|escape}">
		{else}
			<a href="?album={$album|escape}">
		{/if}
			<img src="_albums/{$album|escape}/full/{$foto|escape}" alt="" /></a>
		</p>

		<script type="text/javascript">
			(function () {
				// Automatically resize pictures
				function size () {
					var height = $(this).height();

					var max_height = $('#content').height() - 60;
					if (height > max_height)
						$(this).attr('height', max_height);
				}
				$("p.foto img").load(size);
				$("p.foto img").each(size);
			})();
		</script>
{/block}
