<?php
	//CLAVEesNoCoSa
	if (isset($_POST['ParolaSecrete']))
		if (crypt($_POST['ParolaSecrete'], 'ADSDFDEFAFASDADSSAfdsfgfdgsdergf') === 'ADtaGrr4N1SGM')
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