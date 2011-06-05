<?
	include_once("utils.php");

	/*
		CREATE TABLE gastenboek (tijd INT, naam VARCHAR(64), boodschap TEXT);
	*/
	// Connect database
	$link = mysql_connect('localhost', 'balancirk_be', 'WANFMDUS');
	mysql_select_db('balancirk_be', $link);

	$verzonden = false;

	// Verwijderen van berichten
	if ($_SESSION['authenticated'] and strlen($_REQUEST['verwijder']))
	{
		mysql_query(
			"DELETE FROM gastenboek WHERE tijd = '" .
				addslashes($_REQUEST['verwijder']) . "'" )
		or die (mysql_error());
	}

	// Handel nieuwe berichten af
	if ($_REQUEST['send'] and strlen($_REQUEST['naam']) > 0 and
					strlen($_REQUEST['boodschap']) > 0 and $_REQUEST['captcha'] == 'captcha' and
					strpos($_REQUEST['boodschap'], 'http://') === false)
	{
		mysql_query(
			"INSERT INTO gastenboek (tijd, naam, boodschap) VALUES ('" .
					addslashes(time()) . "', '" .
					addslashes($_REQUEST['naam']) . "', '" .
					addslashes($_REQUEST['boodschap']) . "');")
		or die (mysql_error());
		$verzonden = true;
		$naam = '';
		$boodschap = '';
	}
	elseif ($_POST['send'])
	{
		$naam = $_REQUEST['naam'];
		$boodschap = $_REQUEST['boodschap'];
		$error = true;
	}

	// Toon bestaande berichten
	$query = mysql_query('SELECT tijd, naam, boodschap FROM gastenboek ORDER BY tijd DESC');
	if (! $query) die (mysql_error());

	$messages = Array();

	while ($row = mysql_fetch_array($query))
	{
		array_push($messages,
			Array(
				'naam' => $row['naam'],
				'formatted_tijd' => date('d/m H:i', $row['tijd']),
				'tijd' => $row['tijd'],
				'boodschap' => str_replace('@', '( at )', $row['boodschap'])
				));
	}


	$data = Array(
		'messages' => $messages,
		'error' => $error,
		'naam' => $naam,
		'boodschap' => $boodschap,
		'using_urls' => (strpos($_REQUEST['boodschap'], 'http://') !== false)
		);



	//include 'dwoo/dwooAutoload.php'; 

	$dwoo = new Dwoo(); 

	$dwoo->output('templates/gastenboek.tpl', $data);

?>
