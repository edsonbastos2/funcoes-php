<?php 
	function ola(){

		$argumento = func_get_arg();

		return $argumento;
	}

	var_dump(ola("Bom dia",10));
 ?>