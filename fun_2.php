<?php
	function jumlah($fst,$snd){
		$max = $fst * $snd;
		$text = "Jumlahnya adalah ";
		
		return($text.$max);
	}
	for ($i = 4;$i < 8;$i++){
		for ($j=8;$j<12;$j++){
			echo jumlah($i,$j)."<br>";
		}
	}
?>