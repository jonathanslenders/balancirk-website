<?php
/* template head */
if (function_exists('Dwoo_Plugin_escape')===false)
	$this->getLoader()->loadPlugin('escape');
/* end template head */ ob_start(); /* template body */ ?><div style="background-color: black; padding: 5px; width:10em;margin-left: auto; margin-right: 0;">
	<a style="color: white; " href="admin?view=<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["page"]) ? $this->scope["page"] : null), 'html', null);?>">Broncode </a><br />
	<a style="color: white; " href="admin?edit=<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["page"]) ? $this->scope["page"] : null), 'html', null);?>">Bewerk pagina</a><br />
	<a style="color: white; " href="?logout=true">Log uit</a>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>