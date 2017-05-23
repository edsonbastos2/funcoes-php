<form method="post">
	peso:<input type="number" name="peso">
	altura:<input type="number" name="altura">
	<button type="submit">Calcular</button>
</form>
<?php 

		function imc()
		{
			$peso = $_POST['peso'];
			$altura = $_POST['altura'];

			return $peso / ($altura * $altura);
		}

		$massa = imc();
		var_dump($massa);
		$resultado = number_format($massa,2);

			if ($massa <= 17)
			 {
				$mensagem = "Muito abaixo do peso";

			}elseif (($resultado > 18.49) && ($resultado <= 24.99))
			 {
				$mensagem = "peso normal";

			}elseif (($resultado > 24.99) && ($resultado <= 29.99)) {
				
				$mensagem = "Você estar acima do peso";

			}elseif (($resultado > 29.00) && ($resultado <=34.99)) {
				
				$mensagem = "Você estar obeso II";

			}else {
				$mensagem = "Você estar muito OBESO III !!!";
			}

			echo "Sua massa corporal é <strong>$massa</strong><br/><br/>";
			echo "Estado atual <strong>$mensagem</strong>";

 ?>