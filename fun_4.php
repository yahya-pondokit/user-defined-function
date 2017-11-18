<?php
	function contoh($contoh){
		if ($contoh < 1){
			$contoh = 1;
			echo "Hasilnya adalah = ".$contoh."<br>";
		}elseif ($contoh > 1000){
			$contoh = 1000;
			echo "Banyaknya adalah = ".$contoh."<br>";
		}else {
			echo $contoh;
		}
	}
	
	contoh(20);
	?>