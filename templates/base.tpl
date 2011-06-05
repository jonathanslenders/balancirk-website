<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Balancirk</title>

		{include(file='meta.tpl')}

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

	#vertical-alignment-tool	{ float:left; height:50%; margin-bottom: -340px; }

            #container0 { 
		clear: both;
                background-image: url('graphics/background7.jpeg');
                background-position: center center; background-repeat: no-repeat;}
	    #container1 {
               width: 812px; height: 680px; margin: auto; }
            #container2 { padding: 33px 0px 0px 0px; }
            ul#menu { text-align: center; margin-bottom: 6px; 
					background-color: #68a323; /* teken opnieuw groen vlak, omwille van JPEG artifacten. */ }
            ul#menu { list-style-type: none; height: 29px; }
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
            ul#menu li a:hover { color: #c5434f; text-decoration: none; }
            ul#menu li.first { background-image: none; }

            ul#menu li ul { display: none; 
					/* background-color: #68a323; */
				 	background-color: #7eb12b;
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
					height: 483px;
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

            .frame{
					background-image: url('graphics/background-frame4.jpeg');
			background-position: center center;
			background-repeat: no-repeat;
                    width: 800px; height: 427px; margin: 25px auto 0 auto; }

            .frame.small-frame{
                    /* background-image: url('graphics/beginpagina_background.jpeg');*/
}

            .frame.no-frame{ display:none;}

            .frame-text {
					height: 355px;
					padding: 10px 60px 0 74px; overflow: auto;}
	    .frame.small-frame .frame-text {
                    width: 420px;  }

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

			{block css}{/block}

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
		<div id="container1">
		<div id="container2">
            <ul id="menu">
                    <li class="{block menu_lessen}{/block} first"><a href="/menu-atelier">Circusatelier</a>
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
                    <li class="{block menu_op_verplaatsing}{/block}"><a href="/menu-op-verplaatsing">Op verplaatsing</a>
                        <ul>
                            <li><a href="/workshops">Workshops, initiaties en vrije instuif</a></li>
                            <li><a href="/spektakels">Spektakels</a></li>
                        </ul>
                    </li>
                    <li class="{block menu_filpmjes}{/block}"><a href="/menu-fotos-en-filmpjes">Foto's en filmpjes</a>
                        <ul>
                            <li><a href="/albums">Foto albums</a></li>
                            <li><a href="/filmpjes">Filmpjes</a></li>
                        </ul>
					</li>
                    <li class="{block menu_gastenboek}{/block}"><a href="/gastenboek">Gastenboek</a></li>
                    <li class="{block menu_links}{/block} menu_links"><a href="/links">Links</a></li>
                    <li class="{block menu_contact}{/block} menu_contact"><a href="/contact">Contact</a></li>
            </ul>
            <div id="content" >

				{if $authenticated }
					{include "templates/_edit.tpl"}
				{/if}

				{block "body"}
				{/block}


                <div class="frame {block frame}{/block}">
                    <div class="frame-text">
						{block "framed_body"}
						{/block}
                    </div>
                </div>

			</div>

                <div class="footer" style="position: relative; margin: 0 0 0 0; width: 805px; ">
					{block logo}
                    <p style="position: absolute; right: 20px; bottom: -10px; ">
                        <img src="graphics/logo.png" alt="Balancirk logo" />
                    </p>
					{/block}
                    <p style="margin-left: 90px; ">
                        <a href="/index"><img src="graphics/address.png" style="width: 500px;" alt="Balancirk adres" /></a>
                    </p>
{*
                    <div style="float: left; text-align: right; width: 280px; color: rgb(227,16,25); font-weight: bold; text-transform: uppercase; font-size: 80%; ">
                        Wekelijkse circuslessen<br />
                        Workshops<br />
                        Animatie
                    </div>
                    <div style="color: rgb(227,19,25); margin-left: 300px; line-height: 120%;">
                        <span style="font-size: 300%; font-weight: bold; "><span style="color: rgb(187,19,25);">Circusatelier</span> BalanCirk <span style="font-size: 40%;">vzw</span></span><br />
                        Arthur Erartsstraat 4, 3500 Hasselt | 0492 94 72 87 | info@balancirk.be
                    </div>
                </div>
 *}
            </div>
			<div class="copyright" style="text-align: right; margin-top: 54px; margin-right: 1em; font-size: 10pt; color: #3e5c2b;">
				<!--googleoff: all-->
				<!-- Copyright &copy; 2010 Balancirk <span style="margin: 0 .5em;">-</span>
				Illustratie en grafisch ontwerp: &copy; I. Swinnen 2010 -->
				<!--googleon: all-->
			</div>
		</div>
		</div>
		</div>
	</body>
</html>


