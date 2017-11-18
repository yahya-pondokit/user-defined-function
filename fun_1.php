<?php
	$b = 80;
	$x = rand(2,10) * $b;
	if ($x > 400):
		echo $x."<br>";
		kali($x);
	else:
		echo $x."<br>";
		kali(300);
	endif;
	function kali($k){
		echo $k * 24;
	}
?>