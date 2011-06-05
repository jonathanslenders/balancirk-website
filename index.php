<?

	// Disable magic_quotes
	if (get_magic_quotes_gpc()) {
		$_REQUEST = array_map('stripslashes', $_REQUEST);
	}


	// Enable session support
	session_start();

	// Includes
	include 'dwoo/dwooAutoload.php'; 
	include 'authentication.php'; 
	$dwoo = new Dwoo(); 

	// Page variable (we use mod_rewrite for redirecting any page to index.php?p=....)
	$p = $_REQUEST['p'];
	if (! $p) $p = 'intro';

	if ($_REQUEST['logout'])
		unset($_SESSION['authenticated']);

	//print_r( $_REQUEST);

	// Speciale pagina's met aparte afhandeling
	if (! in_array($p, array('albums', 'gastenboek', 'admin', 'album', 'admin', 'inschrijvingen')) and file_exists("templates/{$p}.tpl"))
	{
		$data = array( 'authenticated'=>is_authenticated(), 'page' => $p );
		$dwoo->output("templates/{$p}.tpl", $data);
	}
	elseif ($p == 'albums') { include 'albums.php'; }
	elseif ($p == 'inschrijvingen') { include 'inschrijvingen.php'; }
	elseif ($p == 'gastenboek') { include 'gastenboek.php'; }
	elseif ($p == 'album') { include 'album.php'; }
	elseif ($p == 'admin') { include 'admin.php'; }
	else
	{
		$dwoo->output("templates/not-found.tpl", array());
	}
?>
