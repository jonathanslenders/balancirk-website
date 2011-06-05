<?
//	session_start();

//	include 'dwoo/dwooAutoload.php'; 
//	include 'authentication.php';

	include 'diff.php';


	$dwoo = new Dwoo(); 

	function mail_report ($pagina, $old_content, $content)
	{
		$subject = "Pagina website aangepast ($pagina)";

		$message =
			"======================= Verschil ======================\n".
			PHPDiff($old_content, $content)  . "\n\n" .
			"======================= Nieuwe tekst ======================\n".
			$content;

		mail('jonathan' . '@' . 'slenders.be', $subject, $message);
		mail('info' . '@' . 'balancirk.be', $subject, $message);
	}

	authenticate();

	// User has to be authenticated
	if (! is_authenticated())
	{
		$data = authenticate_params();
		$dwoo->output('templates/admin/authenticate.tpl', $data);
	}
	elseif ($_REQUEST['view'])
	{
		$filename = $_REQUEST['view'];
		$lines = file("templates/$filename.tpl");

		$begin = $end = -1;
		foreach($lines as $num => $line)
		{
			if (strpos($line, '{* begin edit *}') !== false)
				$begin = $num;
			elseif (strpos($line, '{* end edit *}') !== false)
				$end = $num;
		}

		if ($begin >= 0 && $end >= 0 && $begin < $end)
			$source = implode('', array_slice($lines, $begin+1, $end - $begin - 1));
		else
			$source = '';

		$data = array('source'=> $source, 'page' => $filename, 'authenticated'=>true);
		$dwoo->output('templates/admin/view.tpl', $data);
	}
	elseif($_REQUEST['edit'])
	{
			$filename = $_REQUEST['edit'];
			$lines = file("templates/$filename.tpl");
			$saved = false;
			$source = '';

			// Find begin/end edit marks in page source file
			$begin = $end = -1;
			foreach($lines as $num => $line)
			{
				if (strpos($line, '{* begin edit *}') !== false)
					$begin = $num;
				elseif (strpos($line, '{* end edit *}') !== false)
					$end = $num;
			}

			// If page is editable
			if ($begin >= 0 && $end >= 0 && $begin < $end)
			{
				$source = implode('', array_slice($lines, $begin+1, $end - $begin - 1));

				// Save request
				if ($_REQUEST['save'] == 'true')
				{
					$new_source = 
						implode('', array_slice($lines, 0, $begin + 1)) .
						$_REQUEST['source'] . "\n".
						implode('', array_slice($lines, $end));

					// Replace \r\n by \n
					$new_source = str_replace("\r\n", "\n", $new_source);

					// Back-up original file
					copy("templates/$filename.tpl", "templates/{$filename}." . date('Ymd-His') . '.bak.tpl');

					// Save new version
					$handle = fopen("templates/$filename.tpl", 'w');
					fwrite($handle, $new_source);
					fclose($handle);

					// Report
					mail_report ($filename, $source, str_replace("\r\n", "\n", $_REQUEST['source']));

					// Show confirmation
					$saved = true;
				}

			}

			$data = array('source'=> $source, 'page' => $filename, 'authenticated'=>true, 'saved'=>$saved);
			$dwoo->output('templates/admin/edit.tpl', $data);
	}
	else
	{
		// 
		$data = array('authenticated'=>true);
		$dwoo->output('templates/admin/index.tpl', $data);
	}
?>

