<?php 
	$a = 20;

	function trocaValor(&$b){
		$b += 50;

		return $b;
	}

	var_dump (trocaValor($a));
	echo "<br/>";
	var_dump($a);
 ?>