<?php
	
	function prendeMesajes($bdc, $paje)
	{
		echo '
			<table>
			
				<tbody>
			';
			
		foreach (glob('mesajes/'.$bdc.'_'.$paje.'*.txt') as $fix)
		{
			$fix = file($fix);
			
			echo '
				<tr><td class="NomMesajor">'.$fix[0].'</td></tr>
				<tr><td class="Data">'.$fix[1].'</td></tr>
				<tr><td class="Comenta">'.$fix[2].'</td></tr>
			';
		}
		
		echo '
				</tbody>
		
			</table>
		';
	}
	
	function enviaMesaje($bdc, $paje)
	{
		echo "
			
			<form action='envior.php' method='post'>
				
				<input type='text' name='Nom' id='Nom' placeholder='Tua nom'/><br/>
				<textarea name='Comenta' id='Comenta' placeholder='Tua comenta' rows='3' columns='30' required></textarea>
				<input type='hidden' name='Paje' id='Paje' value='$paje'/>
				<input type='hidden' name='BDC' id='BDC' value='$bdc'/><br/>
				<input type='submit' value='Envia!'/>
				
			</form>
		";
	}
	
?>