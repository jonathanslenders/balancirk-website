<?

//	include 'dwoo/dwooAutoload.php'; 
	include 'fotos.php';
	$dwoo = new Dwoo(); 

	
	$data = array( 'fotos' => get_fotos() );
	$dwoo->output('templates/albums.tpl', $data);

?>
