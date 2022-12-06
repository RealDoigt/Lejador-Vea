<?php

	function prendeImaje($numero, $nom)
	{
		if ($numero < 1 || $numero > xercaMasima($nom))
		{
			header('location: lejor.php');
			return '';
		}

		return 'imajes/'.$nom.'_lfn_p'.$numero.'.png';
	}
	
	function xercaMasima($nom)
	{
		return count(glob('imajes/'.$nom.'*.png'));
	}
	
	function mostraListaBDC()
	{
		$fix = file('bdc.dsv');
		
		echo '
			<table>
			
				<thead>
					
					<tr>
						
						<th>Nom</th>
						<th>Descrive</th>
						<th>Pajes</th>
						<th></th>
						
					</tr>
					
				</thead
				
				<tbody>
		';
		
		foreach ($fix as $linia)
		{
			echo '<tr>';
			
			$valuas = explode(';', $linia);
			
			echo '
					<td>'.$valuas[0].'</td>
					<td>'.$valuas[1].'</td>
					<td>'.xercaMasima($valuas[2]).'</td>
					<td><a href="lejor.php?Paje=1&BDC='.$valuas[2].'">Leje</a></td>
				
				</tr>
			';
		}
		
		echo '
				</tbody>
			
			</table>
		';
	}
?>