{extends "templates/base.tpl" }

{block "body"}
	{if $page}
	<h3>{$page|escape}</h3>
	{else}
		<h3>Website administratie</h3>
	{/if}

<pre style="overflow: auto;">
{$source|escape}
</pre>

{/block}
