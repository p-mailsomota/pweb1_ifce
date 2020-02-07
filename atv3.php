<?php
	if(isset($_POST["nome"]) && isset($_POST["idade"]) && isset($_POST["sexo"])){
		$name = $_POST["nome"];
		$idade = $_POST["idade"];
		$sexo = $_POST["sexo"];

		if($sexo == 2 && $idade < 18){
			echo "acesso negado";
		}else{
			echo "acesso permitido";
		}
	}
?>
<form method="post" >
	<input type="text" name="nome" placeholder="nome"><br>
	<input type="number" name="idade" placeholder="idade" ><br>
	<div>
		<input type="radio" name="sexo" value="1">MASCULINO
		<input type="radio" name="sexo" value="2">FEMININO
	</div>
	<input type="submit">
</form>