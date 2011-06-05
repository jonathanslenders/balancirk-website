<?php
/* template head */
if (function_exists('Dwoo_Plugin_escape')===false)
	$this->getLoader()->loadPlugin('escape');
/* end template head */ ob_start(); /* template body */ ;
'';// checking for modification in file:templates/base.tpl
if (!("1276442289" == filemtime('templates/base.tpl'))) { ob_end_clean(); return false; };?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Balancirk</title>
		<meta name="author" content="Balancirk, Jonathan Slenders" />
		<meta name="keywords" content="balancirk, ballancirk,
			ballancirque, balancirque, ballencirk, circus, belgie, limburg" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="shortcut icon" href="/favicon.png" type="image/png" />
		<link rel="icon" href="/favicon.png" type="image/png" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<style type="text/css">

		/* Reset layout */
		* {
			margin: 0;
			padding: 0;
			border: 0;
			outline: 0;
			font-family: Arial, Verdana, Helvetica;
			font-weight: inherit;
			font-style: inherit;
			text-decoration: inherit;
			text-align: inherit;
			list-style-type: none;
			font-size: 100%; }

		body {
			text-align: left;
			font-weight: normal;
			color: black;
			background-color: white; }

		table {
			border-collapse: separate;
			border-spacing: 0; }


		a { text-decoration: none; }

		/* Custom layout */


			body {
			<?php if (! (isset($this->scope["ie6"]) ? $this->scope["ie6"] : null)) {
?>
				background-color: black;
			<?php 
}?>

				padding: 0; margin: 0; }

			#container0 {
			<?php if (! (isset($this->scope["ie6"]) ? $this->scope["ie6"] : null)) {
?>
				background-color: #ffffee;
			<?php 
}
else {
?>
				background-color: white;
			<?php 
}?>

				margin: auto;
				margin-top: 50px;
				}

			<?php if (! (isset($this->scope["ie6"]) ? $this->scope["ie6"] : null)) {
?>
			#container1 {
				background-image: url('/graphics/left.png');
				background-attachment: fixed;
				background-repeat: repeat-y; background-position: top left; }

			#container2 {
				background-image: url('/graphics/right.png');
				background-attachment: fixed;
				background-repeat: repeat-y; background-position: top right; }
			#container4 {
				background-image: url('/graphics/left2.png');
				background-attachment: fixed;
				background-repeat: repeat-y; background-position: top left; }

			#container5 {
				background-image: url('/graphics/right2.png');
				background-attachment: fixed;
				background-repeat: repeat-y; background-position: top right; }

			<?php 
}?>


			#container3 {
				background-image: url('/graphics/small_bottom.png');
				background-repeat: no-repeat; background-position: bottom center; }

			#container5 {
				padding: 150px 250px 300px 200px;  }

			#header {
				z-index: 10;
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 135px;
				background-image: url('/graphics/top.png');
				background-repeat: no-repeat; background-position: top center; }

			h1 a { font-size: 200%; color: yellow; position: absolute;
				text-transform: uppercase;
				top: 10px; width: 100%; left: 0; text-align: center;
				letter-spacing: 8px; font-weight: bold;}

			#logo { position: absolute; top: 100px; right: 0; }

			/* Content */

			#content { color: #444444; }


			#content #subsectie-link { text-align: center;
				z-index: 11;
				font-variant: small-caps; position: fixed; top: 20px;
				left: 30px; right: 30px; }

			<?php if (! (isset($this->scope["ie6"]) ? $this->scope["ie6"] : null)) {
?>

			#content #subsectie-link a { color: yellow; padding: 0 1em; }

			<?php 
}?>


			#content h2 { color: black; font-size: 150%; font-variant: small-caps; margin-left: 170px; }

			#content h3 { color: black; font-size: 180%; font-variant: small-caps;
				font-weight: bold; text-align: center; margin: 1em; }

			#content h4 { font-weight: bold; font-size: 120%; font-variant: small-caps; text-align: center; }

			#content p { margin: 2em 0; }

			#content td { padding: .5em; border: 1px solid #aaaaaa; }
			#content th { padding: .5em; border: 1px solid #aaaaaa; font-weight: bold; }
			#content table { border-collapse: collapse; }

			#content li, #content dt { list-style-type: square; }

			#content #indexmenu { margin: 4em 40px 4em auto;
			text-align: center; }
			#content #indexmenu a { font-size: 150%; color: #aa4444;
			margin: 1em;}

			#content #nav { margin: 1em 3em;
				float: left;
				position: fixed;
				/* position: absolute; left: 0; top: 200px; */
				width: 160px;
					margin: 0; padding: 0;
			}

			#content #nav li { list-style-type: none; }
			#content #nav a {
					text-decoration: none;
					padding: .2em 1em;
					border-bottom: 1px solid transparent;
					display: block; }

			#content #nav a:hover {
					text-decoration: none;
					color: white;
					background-color: #882222; 
						}

			#content #nav li.selected { background-color: #882222; color: white; }
			#content #nav li.selected a { color: white; }
			
			#content #main_content {
					margin-left: 170px; }

			#content #main_content li { margin-left: 30px; }

			#content a { color: #bb6633; }
			#content a:hover { text-decoration: underline; }

			#content dl dt { font-weight: bold; margin: 1em 0 -.5em 0; }
			#content dl dd { margin: 1em 4em; }

			#content dl.gastenboek dt span { font-size: 70%; font-weight: normal; }
			#content dl.gastenboek dd { border-bottom: 1px solid #cccccc; }

			form.gastenboek { border-top: 2px solid #333333; }

			/* Forms */
			p.input-text { width: 80%; margin: 0; padding: 0; padding: 0; }
			p.input-text label { width: 40%; text-align: right; display: block; position: relative; padding: 0 1em; } 
			p.input-text input { position: absolute; left: 100%;  width: 90%; text-align: left; }

			p.input-checkbox label { margin-left: 40%; }

			p.input-textarea textarea { margin: 0 auto; width: 80%; height: 10em; display: block; }
			fieldset textarea { margin: .5em auto; width: 80%; height: 10em; display: block; }

			input, textarea { border: 1px solid #ffbbbb; background-color: #ffffee; }
			input:focus, textarea:focus { border: 1px solid #aa6666; background-color: white; }

			fieldset { border: 1px solid #ffdddd; padding: 0 2em; }
			fieldset legend { padding: 4px; font-weight: bold; }

			input[type='submit'] { float: right; }

			p.error { background-color: #330000; color: #ffffff; padding: .2em; }
			p.info { background-color: #003300; color: #ffffff; padding: .2em; }

			/* Foto albums */

			div#picture-list {
				text-align: center; }

			div#picture-list span {
				width: 200px;
				height/**/:auto;
				border: 1px solid #cccccc;
				display: -moz-inline-block;
				display: -moz-inline-box;
				display: inline-block;
				margin: .5em;
				padding: .2em;
				background-image: url("/graphics/40p.png");
			}
			div#picture-list span img { padding-top: .5em; }


			div#picture-list span a { font-weight: bold; }
			div#picture-list span a:hover { text-decoration: none; }

			div#picture-list span:hover {
				background-image: '';
				background-color: #aa8844; 
				}

			div.prevnext { text-align: left; font-size: 80%; padding: 0; margin: 0; }
			div.prevnext span { padding: 0 1em; }

			div.prevnext { position: relative; text-align: center; }
			div.prevnext .prev { position: absolute; left: 0; }
			div.prevnext .next { position: absolute; right: 0; }

			p.foto { text-align: center; }

			/* Pagina specifieke CSS */

TODO: placeholder css

		</style>
		<body>
			<img src="/graphics/logo_smaller.png" id="logo" />

			<div id="header">
				<h1><a href="/">Balancirk</a></h1>
			</div>

			<?php if ((isset($this->scope["authenticated"]) ? $this->scope["authenticated"] : null)) {
?>
			<div id="edit" style="position: absolute; position: fixed; z-index: 20; background-color: black; padding: 5px; right: 0; top: 0;" >
				<a style="color: white; " href="/admin/view.php?page=<?=esc($_SERVER['SCRIPT_NAME'])?>">Bewerk pagina</a>
			</div>
			<?php 
}?>



			<div id="container0">
			<div id="container1">
			<div id="container2">
			<div id="container3">
			<div id="container4">
			<div id="container5">
			<div id="container6">
				<div id="content" style="background-color: transparent;">

					<p id="subsectie-link">
					<!--
						<a href="/atelier/">Circusatelier</a> ::
						<a href="/op-verplaatsing/" style="text-decoration:
							underline;">Circus op verplaatsing</a>
							-->
					</p>

					<!--
					<h2>Op verplaatsing</h2>
					-->
					<?php if (! (isset($this->scope["hide_menu"]) ? $this->scope["hide_menu"] : null)) {
?>
					<ul id="nav">
						<li ><a href="index.php">Start</a></li>
						<li ><a href="lessen.php">Lessen</a></li>
						<li ><a href="kampen_en_stages.php">Kampen &amp; stages</a></li>
						<li ><a href="lidgeld.php">Lidgeld</a></li>
						<li ><a href="inschrijvingen.php">Inschrijvingen</a></li>
						<li ><a href="de-lesgevers.php">De lesgevers</a></li>
						<li ><a href="doelstellingen.php">Doelstellingen</a></li>
						<li class="selected"><a href="fotos.php">Foto's</a></li>
						<li ><a href="filmpjes.php">Filmpjes</a></li>
						<li ><a href="/gastenboek.php">Gastenboek</a></li>
						<li ><a href="/links.php">Links</a></li>
						<li ><a href="contact.php">Contact</a></li>
					</ul>
					<?php 
}?>


					<div id="main_content">
							<h3>Foto's</h3>
	<div id="picture-list">
		<?php 
$_loop0_data = (isset($this->scope["fotos"]) ? $this->scope["fotos"] : null);
if ($this->isArray($_loop0_data) === true)
{
	foreach ($_loop0_data as $tmp_key => $this->scope["-loop-"])
	{
		$_loop0_scope = $this->setScope(array("-loop-"));
/* -- loop start output */
?>
			<span><a href="album.php?album=<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["album"]) ? $this->scope["album"] : null), 'html', null);?>">
					<img src="albums/<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["album"]) ? $this->scope["album"] : null), 'html', null);?>/thumb/<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["cover"]) ? $this->scope["cover"] : null), 'html', null);?>" /><br />
					<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["title"]) ? $this->scope["title"] : null), 'html', null);?></a></span>

		<?php 
/* -- loop end output */
		$this->setScope($_loop0_scope, true);
	}
}
?>

	</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
		</body>
</html>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>