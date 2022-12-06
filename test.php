<?php
	//CLAVEesNoCoSa
	if (isset($_POST['ParolaSecrete']))
		if (crypt($_POST['ParolaSecrete'], 'ADSDFDEFAFASDADSSAfdsfgfdgsdergf') === '')
		{
			session_start();
			$_SESSION['PermeteLeje'] = 1;
			header('location: lejor.php');
			exit;
		}
		
	else
	{
		header('location: leje.htm');
		exit;
	}
?>
