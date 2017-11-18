<?php
	function mainan(){
		echo "similarities";
	}
	function minan($main){
		return $main;
	}
	for ($i=0;$i<4;$i++){
		mainan();
		echo "<br>";
		for ($j=0;$j<4;$j++){
			echo minan("similar");
			echo "<br>";
		}
	}
?>