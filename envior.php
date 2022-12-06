<?php
	
	include 'imajeAidor.php';
	
	if (isset($_POST['Comenta']))
	{
		$fix = fopen('mesajes/'.$_POST['BDC'].'_'.$_POST['Paje'].'_'.(count(glob('mesajes/'.$_POST['BDC'].'_'.$_POST['Paje'].'*.txt'))+1).'.txt', 'w');
		fwrite($fix, ($_POST['Nom'] !== '' ? $_POST['Nom'] : 'Usor anonim')."\n");
		fwrite($fix, date('d-m-Y', time())."\n");
		fwrite($fix, str_replace("\n", '<br/>', $_POST['Comenta']));
		fclose($fix);
	}
	
	else
	{
		header('location: lejor.php');
		exit;
	}
	
	header('location: lejor.php?Paje='.$_POST['Paje'].'&BDC='.$_POST['BDC']);
	exit;
?>