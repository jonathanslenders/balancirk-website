<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_escape')===false)
	$this->getLoader()->loadPlugin('escape');
/* end template head */ ob_start(); /* template body */ ;
'';// checking for modification in file:templates/base.tpl
if (!("1300638192" == filemtime('templates/base.tpl'))) { ob_end_clean(); return false; };?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head> 
        <meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
        <title>Balancirk</title> 
 
        <!--
    ====================================================================================
 
    www.balancirk.be website:
        - Grafisch ontwerp: Copyright (c) 2010 - I. Swinnen
        - HTML/CSS: Jonathan Slenders
        - Tekst-inhoud: Balancirk VZW
 
    Niets van deze website mag gekopieerd worden zonder toestemming van Balancirk.
 
    ====================================================================================
--> 
<meta name="author" content="Balancirk" /> 
<meta name="keywords" content="balancirk, ballancirk,
    ballancirque, balancirque, ballencirk, circus, belgie, limburg" /> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<link rel="shortcut icon" href="/favicon.png" type="image/png" /> 
<link rel="icon" href="/favicon.png" type="image/png" /> 
<meta name="description" content="Balancirk - gedreven door de magie van het circus!" /> 
 
 
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
 
 
            body, html { height: 100%;
            font-size: 11pt;
                /*background-color: #69a325;  */
             background-color: #3e502b; }
 
            #vertical-alignment-tool    { float:left; height:50%; margin-bottom: -420px; }
 
            #container0 { 
				margin: 0 20px;
                clear: both;
                background-color: #eff9d0;
				/* border: 1px solid #eff9d0;*/
				border: 1px solid #3e502b;
				}
            #container1 { 
				margin-top: -74px;
                background-image: url('graphics/background-right.png');
                background-position: right center; background-repeat: no-repeat;}
            #container2 {
				height: 800px;
                background-image: url('graphics/background-left.png');
                background-position: left center; background-repeat: no-repeat; }
            #container3 {
                min-height: 500px; padding: 100px 30px 0px 80px; }

			.copyright { background-color: #df2b1e; padding: 3px 20px 3px 150px; color: white; font-size: 90%; }


            ul#menu { margin: 40px 0 6px 100px; padding-left: 30px; padding-right: 150px;
						text-align: left; background-color: #df2b1e;
						height: 30px;
						list-style-type: none; }
            ul#menu li {
                    position: relative;
                    line-height: 29px;
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
                    background-position: left top;
            }
 
            ul#menu li:hover ul {
                    display: block;
                    position: absolute;
                    left: -1px;
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
                    color: #68a323;
                    overflow: auto;
                    overflow-x: hidden;
                    -ms-overflow-x: hidden;
					max-height: 700px;
					padding-left: 60px;
					padding-right: 275px;
                    }
 
            #content table td, #content table th { color: #5d7f2b; }
            #content table.transparent td { background-color: transparent; color: #68a323; }
            #content p, #content ul { margin: 1em 0; }
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
            div#picture-list span img { padding-top: .5em; }
 
            div#picture-list span a { font-weight: bold; text-decoration: none; }
            div#picture-list span a:hover { text-decoration: none; }
 
            div#picture-list span:hover {
                background-image: '';
                background-color: white;
                }
 
            
				.weird_shape div { background-color: blue; opacity: .2; }
/*
*/
 
        </style> 
            
        <!--[if IE 7]>
            <style type="text/css">
                ul#menu li { display: inline; }
                ul#menu li a { text-decoration: none; }
                ul#menu li ul { top: 100%; }
            </style>
        <![endif]--> 
 
        <!--[if IE 6]>
            <style type="text/css">
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
            <div id="content" > 

<!--
				<div class="weird_shape">
					<div style="float: right; clear: right; height: 30px; width: 150px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 155px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 165px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 175px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 183px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 196px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 207px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 222px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 235px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 245px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 255px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 265px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 275px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 282px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 287px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 289px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 291px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 291px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 291px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 291px;"> </div>
					<div style="float: right; clear: right; height: 30px; width: 289px;"> </div>
				</div>
				-->

				<?php if ((isset($this->scope["authenticated"]) ? $this->scope["authenticated"] : null)) {
?>
					<?php echo Dwoo_Plugin_include($this, "templates/_edit.tpl", null, null, null, '_root', null);?>

				<?php 
}?>


								
					<h2>Inschrijvingen</h2>

	<?php if ((isset($this->scope["error"]) ? $this->scope["error"] : null)) {
?>
		<p class="error">Gelieve alle veldjes in te vullen</p>
	<?php 
}?>

	<?php if ((isset($this->scope["verzonden"]) ? $this->scope["verzonden"] : null)) {
?>
		<p class="info">Uw inschrijving is verzonden</p>
	<?php 
}
else {
?>
		<form method="post" action="?">
			<p>

				Via dit formulier kan je jezelf of een ander gezinslid
				inschrijven.
			</p>
			<p>
				Tijdens de maand september kan er vrij kennis gemaakt worden
				met het circusatelier.
			</p>
			<table class="form-table" style="width: 90%;">
				<tr>
					<th><label for="i_naam">Naam:</label></th>
					<td><input name="i_naam" id="i_naam" type="text" value="<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["naam"]) ? $this->scope["naam"] : null), 'html', null);?>"/></td>
				</tr>
				<tr>
			  		<th><label for="i_email">E-mail:</label></th>
					<td><input name="i_email" id="i_email" type="text" value="<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["email"]) ? $this->scope["email"] : null), 'html', null);?>"/></td>
				</tr>
				<tr>
			  		<th><label for="i_tel">Telefoon:</label></th>
					<td><input name="i_tel" id="i_tel" type="text" value="<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["tel"]) ? $this->scope["tel"] : null), 'html', null);?>"/></td>
				</tr>
				<tr>
					<th><label for="i_opmerkingen">Opmerkingen:</label></th>
					<td>
						<textarea rows="8" name="i_opmerkingen" id="i_opmerkingen"><?php echo Dwoo_Plugin_escape($this, (isset($this->scope["opmerkingen"]) ? $this->scope["opmerkingen"] : null), 'html', null);?></textarea>
					</td>
				</tr>
				<tr>
					<th><label>Bevestigingscode:</label></th>
					<td>
						<p>Typ deze code over - <a href="#" id="captcha_button">waarom?</a></p>
						<p style="display:none; margin: 0 8em;" id="captcha_info">
							Om te voorkomen dat automatische spam robots dit formulier invullen,
							vragen we je om in dit vakje 'balancirk' te typen. We veronderstellen
							dat een robot niet slim genoeg is om dit te lezen, terwijl jij dat wel bent.
						</p>
						<?php if ((isset($this->scope["wrong_captcha"]) ? $this->scope["wrong_captcha"] : null)) {
?>
							<p class="error">Foute bevestigingscode, controleer of je geen typfouten hebt gemaakt.</p>
						<?php 
}?>

					  <p class="input-text"><img src="/graphics/captcha.png" />: <br />
						<input name="i_captcha" type="text" value="<?php echo Dwoo_Plugin_escape($this, (isset($this->scope["captcha"]) ? $this->scope["captcha"] : null), 'html', null);?>"/></p>  
					</td>
				</tr>

			</table>
				<script type="text/javascript">
					$(function() {
						$('#captcha_button').click(function() { $('#captcha_info').toggle(); return false; });
					});
				</script>

			<p class="input-submit">
				<input type="hidden" name="send" value="true" />
				<input type="submit" value="Inschrijven" /></p>
		</form>
	<?php 
}?>

            </div> 
 
                <div style="position: relative; margin: 0 0 0 0; width: 805px; "> 
                    <p style="margin-left: 90px; "> 
                        <a href="/index"><img src="graphics/address.png" style="width: 500px;" alt="Balancirk adres" /></a> 
                    </p> 
 
            	</div> 
            </div> 
 
        </div> 
        </div> 

			<div class="copyright">
				Copyright &copy; 2010 - BalanCirk vzw - Illustratie en grafisch ontwerp &copy; Inger Swinnen 2010
			</div>
        </div> 
    </body> 
</html> 
 
 
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>