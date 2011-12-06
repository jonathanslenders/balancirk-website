<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_escape')===false)
	$this->getLoader()->loadPlugin('escape');
/* end template head */ ob_start(); /* template body */ ;
'';// checking for modification in file:templates/base.tpl
if (!("1307633640" == filemtime('templates/base.tpl'))) { ob_end_clean(); return false; };?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
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
 
            a { color: #c5434f; }
 
 
            body, html {
				margin: 0;
				padding: 0;
				min-width: 1000px;
				height: 100%;
            	font-size: 11pt;
             	background-color: #3e502b; }
 
            #vertical-alignment-tool { float: left; height:50%; margin-bottom: -420px; }
 
            #container0 { 
				margin: 0 20px;
				padding: 0;
                clear: both;
                background-color: #eff9d0;
				/* border: 1px solid #eff9d0;*/
				border: 1px solid #3e502b;
				overflow: hidden;
				}
            #container1 { 
				margin-top: -77px;
                background-image: url('graphics/background-right.png');
                background-position: right bottom; background-repeat: no-repeat;}
            #container2 {
				height: 800px;
                background-image: url('graphics/background-left.png');
                background-position: left center; background-repeat: no-repeat; }
            #container3 {
  /*              min-height: 500px;
*/
		padding: 100px 0 0 65px; }

			.copyright { background-color: #df2b1e; padding: 3px 20px 3px 150px; color: white; font-size: 90%; }


            ul#menu { margin: 40px 0px 6px 80px; padding-right: 150px;
					padding-left: 1px;
						text-align: left;
						background-color: #df2b1e;
						height: 30px;
						list-style-type: none; }
            ul#menu li {
                    position: relative;
                    line-height: 30px;
                    display: inline;
                    display: inline-block;
                    background-image: url('graphics/menu_separator.png');
                    background-repeat: repeat-y;
                    background-position: left center;
                    padding: 0 16px 0 25px;
					}

            ul#menu li a { color: white;}
            ul#menu li a:hover { color: #eff9d0; text-decoration: none; }
            ul#menu li.first { background-image: none; }
 
            ul#menu li ul { display: none; 
                    background-color: #df2b1e;
					}
 
            ul#menu li:hover ul {
                    display: block;
                    position: absolute;
                    left: -1px;
					z-index: 100;
                    }
            ul#menu li ul li { margin: 0; padding: 0; 
                background-image: none;
             }
 
            ul#menu li ul li a { margin: 0; }
            ul#menu li ul li a {
                    width: 12em;
                    padding: 3px 3px 3px 10px;
                    display: block;
                    text-align: left;
                    background-image: none; }
 
            #content {
					padding-right: 310px;
                    color: #68a323;
					height: 630px;
                    overflow-x: hidden;
                    -ms-overflow-x: hidden;
                    overflow: auto;
                    }
            #content2 {
					margin-left: 40px;
					}

            #content table td, #content table th { color: #5d7f2b; }
            #content table.transparent td { background-color: transparent; color: #68a323; }
            #content p, #content ul { margin-top: 1em; margin-bottom: 1em; }
            #content h2 { font-size: 130%; font-weight: bold; }
            #content h3 { font-size: 100%; font-weight: bold; }
            #content a { text-decoration: none; }
            #content a:hover { text-decoration: underline; }
            #content a img { border: none; }
            #content table tr td { background-color: #bfd5b1; }
            #content table.form-table tr td { background-color: transparent; }
            #content table tr.aodd td { background-color: #e6f4d6; }
            #content table tr td { padding: 3px 10px; border: none; }
            #content table tr th { font-weight: bold; }
            #content table { }
            #content dt { margin-left: 20px; font-weight: bold; }
            #content dd { margin: 0 0 20px 40px; }
            #content ul li { list-style-type: square; margin-left: 30px; }

			p.foto, div#picture-list { margin-left: -40px; padding-left: 0; }
 
            /* Forms */
            input, textarea{ border: 1px solid white; background-color: white; }
            input:focus, textarea:focus { border: 1px solid #5d7f2b; }
 
            input[type='submit'] { padding: 4px; background-color: rgb(126,177,43);; color: white; }
 
            p.error { background-color: #330000; color: #ffffff; padding: .2em; }
            p.info { background-color: #003300; color: #ffffff; padding: .2em; }
 
            /* Foto albums */
            div#picture-list {
                text-align: center; }
 
            div#picture-list span {
                width: 190px;
                height/**/:auto;
                border: 1px solid #c9ddb3;
                display: -moz-inline-block;
                display: -moz-inline-box;
                display: inline-block;
                margin: .5em;
                padding: .2em;
                background-image: url("/graphics/40p.png");
            }
            div#picture-list span img { padding-top: .5em; vertical-align: middle; padding: 4px; }
 
            div#picture-list span a { font-weight: bold; text-decoration: none; }
            div#picture-list span a:hover { text-decoration: none; }
 
            div#picture-list span:hover {
                background-image: '';
                background-color: white;
                }
 
            
/*
		.weird_shape div { background-color: blue; opacity: .2; }
*/
 
			
        </style> 
            
        <!--[if IE 7]>
            <style type="text/css">
                ul#menu li { display: inline; }
                ul#menu li a { text-decoration: none; }
                /* ul#menu li ul { top: 100%; } */
            </style>
        <![endif]--> 
 
        <!--[if IE 6]>
            <style type="text/css">
				#menu { position: absolute;
					top: -30px;
				}
				#container3 { padding-top: 140px; }
                #menu li { background: none transparent !important; }
                #menu li {  float: left; width: 120px; margin: 0 -10px; padding: 0; background-image: none; }
                #menu li.menu_links, #menu li.menu_contact {  width: 80px; }
                #menu li a {  margin: 0; padding: 0; text-decoration: none; }
                #menu ul li { float: left; }
                #menu ul li a { height: 1%; }
 
                /* img, div { behavior: url(downloads/iepngfix.htc); } */ 
            </style>
        <![endif]--> 
 
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> 
    </head> 
    <body> 
        <div id="vertical-alignment-tool">&nbsp;</div> 
        <div id="container0"> 
            <ul id="menu"> 
                    <li class=" first"><a href="/menu-atelier">Circusatelier</a> 
                        <ul class="first"> 
                            <li><a href="/lessen">Wekelijkse lessen</a></li> 
                            <li><a href="/kampen-en-stages">Kampen en stages</a></li> 
                            <li><a href="/leerdoeleinden">Doelstellingen</a></li> 
                            <li><a href="/lidgeld">Lidgeld</a></li> 
                            <li><a href="/inschrijvingen">Inschrijvingen</a></li> 
                            <li><a href="/de-lesgevers">De lesgevers</a></li> 
                            <li><a href="/visie">Visie</a></li> 
                        </ul> 
                    </li> 
                    <li class=""><a href="/menu-op-verplaatsing">Op verplaatsing</a> 
                        <ul> 
                            <li><a href="/workshops">Workshops, initiaties en vrije instuif</a></li> 
                            <li><a href="/spektakels">Spektakels</a></li> 
                        </ul> 
                    </li> 
                    <li class=""><a href="/menu-fotos-en-filmpjes">Foto's en filmpjes</a> 
                        <ul> 
                            <li><a href="/albums">Foto albums</a></li> 
                            <li><a href="/filmpjes">Filmpjes</a></li> 
                        </ul> 
                    </li> 
                    <li class=""><a href="/gastenboek">Gastenboek</a></li> 
                    <li class=" menu_links"><a href="/links">Links</a></li> 
                    <li class=" menu_contact"><a href="/contact">Contact</a></li> 
            </ul> 
			<div id="container1"> 
			<div id="container2"> 
			<div id="container3"> 
				<div id="content">  <!-- For scrolling -->
				<div id="content2"> <!-- margin -->


					<?php if ((isset($this->scope["authenticated"]) ? $this->scope["authenticated"] : null)) {
?>
						<?php echo Dwoo_Plugin_include($this, "templates/_edit.tpl", null, null, null, '_root', null);?>

					<?php 
}?>


							<p style="text-align: center; font-size: 80%; margin: 0; padding: 0; margin-bottom: -8px; ">
			<?php if ((isset($this->scope["prev"]) ? $this->scope["prev"] : null)) {
?>
				<a href="?album=<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["album"]) ? $this->scope["album"] : null), 'html', null);?>&amp;foto=<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["prev"]) ? $this->scope["prev"] : null), 'html', null);?>">&laquo; Vorige</a>
			<?php 
}
else {
?>
				Vorige
			<?php 
}?>


			| <a href="?album=<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["album"]) ? $this->scope["album"] : null), 'html', null);?>">Overzicht</a> |

			<?php if ((isset($this->scope["next"]) ? $this->scope["next"] : null)) {
?>
				<a href="?album=<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["album"]) ? $this->scope["album"] : null), 'html', null);?>&amp;foto=<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["next"]) ? $this->scope["next"] : null), 'html', null);?>">
				Volgende &raquo;</a>
			<?php 
}
else {
?>
				Volgende
			<?php 
}?>


		</p>
		<p class="foto" style="text-align: center;">
		<?php if ('next') {
?>
			<a href="?album=<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["album"]) ? $this->scope["album"] : null), 'html', null);?>&amp;foto=<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["next"]) ? $this->scope["next"] : null), 'html', null);?>">
		<?php 
}
else {
?>
			<a href="?album=<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["album"]) ? $this->scope["album"] : null), 'html', null);?>">
		<?php 
}?>

			<img src="_albums/<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["album"]) ? $this->scope["album"] : null), 'html', null);?>/full/<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["foto"]) ? $this->scope["foto"] : null), 'html', null);?>" alt="" /></a>
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
										
				</div> 
            	</div> 
 
                <div style="position: relative; margin: 10px 0 0 0; "> 
                    <p style="margin-left: 70px; "> 
                        <a href="/home"><img src="graphics/address.png" style="width: 500px;" alt="Balancirk adres" /></a> 
                    </p> 
            	</div> 
            </div> 
        </div> 
        </div> 

			<div class="copyright">
				<img src="graphics/footer.png" style="margin: -3px 0;padding:0;"/>
				<!--googleoff: all-->
				<!--Copyright &copy; 2010 - BalanCirk vzw - Illustratie en grafisch ontwerp &copy; Inger Swinnen 2010 -->
				<!--googleon: all-->
			</div>
        </div> 
		<script type="text/javascript">
			/* Auto scale height */
			(function() {
				function scale () {
					var height = $('body').height();

					if (height < 800)
					{
						$('#container2').height(height - 35);
						$('#content').height(height - 35 - 170);
						$('#vertical-alignment-tool').css('margin-bottom', -(height/2 -5));
					}
					else
					{
						$('#container2').height('');
						$('#content').height('');
						$('#vertical-alignment-tool').css('margin-bottom', '');
					}
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