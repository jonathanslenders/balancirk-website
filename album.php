<?
	//include 'dwoo/dwooAutoload.php'; 

	function file_parameter_is_safe($file)
	{
		return 
			strpos($file, '..') === false and
			strpos($file, '/') === false;
	}

	function show_album($album)
	{
		if (
			file_parameter_is_safe($album))
		{
			$fotos = Array();

//			$dh = opendir("_albums/{$album}/full");
			$dh = scandir("_albums/{$album}/full/");

//			while (($file = readdir($dh)) !== false)
			foreach ($dh as $file)
				if($file != "." && $file != "..")
					array_push($fotos, Array(
								'foto' => $file,
								'album' => $album ));

			$dwoo = new Dwoo(); 
			$data = array('fotos' => $fotos);
			$dwoo->output('templates/album.tpl', $data);
		}
	}

	function show_foto($album, $foto)
	{
		if (
			file_parameter_is_safe($album) and
			file_parameter_is_safe($foto) and
			file_exists("_albums/{$album}/full/{$foto}"))
		{
			$prev = false;
			$current = false;
			$next = false;

			// Find prev and next foto
//			$dh = opendir("_albums/{$album}/full/");
			$dh = scandir("_albums/{$album}/full/");

//			while (($f = readdir($dh)) !== false)
			foreach ($dh as $f)
				if(strpos($f, '.') != 0)
				{
					$prev = $current;
					$current = $next;
					$next = $f;

					if ($current == $foto)
						break;
				}

			if ($next == $foto)
			{
				$prev = $current;
				$current = $next;
				$next = false;
			}

			$data = array(
					'foto' => $current,
					'prev' => $prev,
					'next' => $next,
					'album' => $album,
					'hide_menu' => true,
					);
			$dwoo = new Dwoo(); 
			$dwoo->output('templates/album-foto.tpl', $data);
		}
	}


	$album = $_REQUEST['album'];
	$foto = $_REQUEST['foto'];

	if ($album and !$foto)
		show_album($album);

	if ($album and $foto)
		show_foto($album, $foto);

?>
