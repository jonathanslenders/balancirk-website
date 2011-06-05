<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Balancirk</title>

		<?php echo Dwoo_Plugin_include($this, 'meta.tpl', null, null, null, '_root', null);?>


		<style type="text/css" media="screen">

        /* Reset layout */
		* {
			margin: 0;
			padding: 0;
			border: 0;
			outline: 0;
			font-weight: inherit;
			font-style: inherit;
			text-decoration: inherit;
			text-align: inherit;
			list-style-type: none;
			font-size: 100%; 
            font-family: "Gill Sans MT", sans-serif; }

            strong { font-weight: bold; }
            em { font-style: italic; }

			body, html { height: 100%; }

			body{ background-color: #3e502b; }

			#vertical-alignment-tool	{ float:left; height:50%; margin-bottom:-325px; }
			#content	{ clear:both; height:650px; position:relative; text-align: center; }

			html,body { overflow-x: hidden; overflow-y: hidden; }

		</style>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
	</head>
	<body>
		<div id="vertical-alignment-tool">&nbsp;</div>
		<div id="content">
			<div style="overflow: hidden; ">
				<a href="/home">
					<img src="graphics/intro.jpeg" style="margin: 0 -200px;" alt="Balancirk logo" />
				</a>
			</div>
		</div>
		<script type="text/javascript">
			(function() {
				function scale() {
					var height = $(window).height();
					if (height >= 650)
						$('body img').css('height', '');
					else
						$('body img').css('height', height + 'px');
				}
				$(window).resize(scale);
				scale();
			})();
		</script>
	</body>
</html>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>