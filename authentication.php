<?
	function is_authenticated()
	{
		return $_SESSION['authenticated'];
	}
	function authenticate()
	{
		if ($_REQUEST['username'] == 'balancirk' &&
					md5($_REQUEST['password']) == 'ce5520c58d8ba9b0743215d721a43381')
			$_SESSION['authenticated'] = true;

		if ($_REQUEST['logout'])
			$_SESSION['authenticated'] = false;
	}

	function authenticate_params()
	{
		$wrong_username = false;
		$authenticated = false;

		if (! $_SESSION['authenticated'])
		{
			if ($_REQUEST['username'] || $_REQUEST['password'])
				$wrong_username = true;
		}
		else
			$authenticated = true;

		return Array(
			'authentication_error' => $wrong_username,
			'authenticated' => $authenticated,
			);
	}
?>
