<?php


class BubleSorte
{

	function sorteArray($mainArray)
	{

		for ($i = 0; $i < count($mainArray)-1; $i++)
		{
			#echo "<br><b><u>Loop $i</u></b>.<br>";
			$isSwap = 0; 
			
			for($j = 0; $j < count($mainArray)-1; $j++)
			{
				
				#echo "&nbsp;inner loop $j<br>";
				$x = $j;
				$x = $x+1;
				
				if($mainArray[$j] > $mainArray[$x])
				{	
					#echo "&nbsp;&nbsp;<b>swap</b> $mainArray[$j] e $mainArray[$x]<br>";
					$temp = $mainArray[$j];
					$mainArray[$j] = $mainArray[$x];
					$mainArray[$x] = $temp;
					
					$isSwap = 1;					
				}					
			}

			if($isSwap == 0)
			{
				break;
			}
		}

		return $mainArray;
	}
}


?>