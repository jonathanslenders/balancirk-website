<?

//	include 'dwoo/dwooAutoload.php'; 

	$dwoo = new Dwoo(); 




			$error = false;
			$verzonden = false;
			$naam =	$_POST['i_naam'];
			$email = $_POST['i_email'];
			$tel = $_POST['i_tel'];
			$captcha = $_POST['i_captcha'];
			$opmerkingen = $_POST['i_opmerkingen'];

			if (strlen($naam) and strlen($email) and strlen($tel) and strlen($opmerkingen) and trim(strtolower($captcha)) == 'balancirk' and $_POST['send'])
			{
				$message =
					"=============================================\r\n" .
					'Naam: ' . $naam . "\r\n" .
					'E-mail: ' . $email . "\r\n" .
					'Tel: ' . $tel . "\r\n\r\n" .
					"=============================================\r\n" .
					$opmerkingen;

				mail('jonathan' . '@' . 'slenders.be', 'Inschrijvingsformulier 2009 - 2010 balancirk.be', $message);
				mail('info' . '@' . 'balancirk.be', 'Inschrijvingsformulier 2009 - 2010 balancirk.be', $message);
				$naam = $email = $tel = $opmerkingen = '';
				$verzonden = true;
			}
			else if ($_POST['send'])
				$error = true;


	$data = array(
				'error'=>$error,
				'verzonden'=>$verzonden,

				'naam' => $naam,
				'email' => $email,
				'tel' => $tel,
				'opmerkingen' => $opmerkingen,
				'captcha' => $captcha,
				'wrong_captcha' => ($captcha and $captcha != 'balancirk'),
				);

	$dwoo->output('templates/inschrijvingen.tpl', $data);

?>
