<link rel="stylesheet" href="lejor.css"/>

<?php
	
	require 'imajeAidor.php';
	require 'mesajeAidor.php';
	session_start();
	
	if (isset($_SESSION['PermeteLeje']) && $_SESSION['PermeteLeje'] === 1)
	{
		if (isset($_GET['Paje']) && is_numeric($_GET['Paje']) && isset($_GET['BDC']) && file_exists('imajes/'.$_GET['BDC'].'_lfn_p1.png'))
		{	
			echo '<center> <img src="'.prendeImaje($_GET['Paje'], $_GET['BDC']).'"/> </center>';
			
			echo '<div id="ContenadorFlex">';
			
			echo '<div class="ContenadorUrl">';
			
			if ($_GET['Paje'] > 2)
				echo '<a href="lejor.php?Paje=1&BDC='.$_GET['BDC'].'">«« Prima</a>';
			
			if ($_GET['Paje'] > 1)
				echo '<a href="lejor.php?Paje='.($_GET['Paje']-1).'&BDC='.$_GET['BDC'].'">« Presedente</a>';
			
			echo '</div>';
			
			echo '<div class="ContenadorUrl">';
			
			$masima = xercaMasima($_GET['BDC']);
			
			if ($_GET['Paje'] < $masima)
				echo '<a href="lejor.php?Paje='.($_GET['Paje']+1).'&BDC='.$_GET['BDC'].'">Seguente »</a>';
			
			if ($_GET['Paje'] < ($masima-1))
				echo '<a href="lejor.php?Paje='.xercaMasima($_GET['BDC']).'&BDC='.$_GET['BDC'].'">Ultima »»</a>';
			
			echo '</div>';
			
			echo '</div>';
			
			echo '<h3>Comentas</h3>';
			
			enviaMesaje($_GET['BDC'], $_GET['Paje']);
			prendeMesajes($_GET['BDC'], $_GET['Paje']);
		}
		
		else
			mostraListaBDC();
	}

	else
	{
		header('location: leje.htm');
		exit;
	}
?>