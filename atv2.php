<?php
	if(isset($_POST["number1"]) && isset($_POST["number2"])){
		$numbers = filter_var_array($_POST, FILTER_VALIDATE_INT);
		$number = $numbers["number1"] + $numbers["number2"];
		if($number > 20){
			$number += 8;
		}else {
			$number -= 5;
		}
	}
?>
<form method="post" >
	<input type="number" name="number1" >+<input type="number" name="number2" >
	<br>
	<input type="submit" name="somar">
	<?= (isset($number) ? $numbers["number1"]."+".$numbers["number2"].($number > 20 ? "+8" : "-5")."=".$number : ""); ?>
</form>