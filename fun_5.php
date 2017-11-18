<?php
	$rendem = rand(2,33);
	$rendem2 = rand(2,33);
	function kalian($m,$n){
		$hasil = $m * $n;
		return $hasil;
	}
	$r = kalian($rendem,$rendem2);
	if ($r > 600){
		echo "Besarnya adalah ".$r;
	}elseif ($r > 300){
		echo "Hasil ".$r;
	}else{
		echo "Hasil akhir ".$r;
	}
?>