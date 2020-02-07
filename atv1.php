<?php
	if(isset($_POST["number"])){
		$number = $_POST["number"];
		$msg = "numero não divisivel por 10,5,2";
		if($number % 10 == 0){
			$msg = "numero divisivel por 10";
		}else if($number % 5 == 0){
			$msg = "numero divisivel por 5";
		}else if($number % 2 == 0){
			$msg = "numero divisivel por 2";
		}
	}
?>
<form method="post" >
	<input type="number" name="number" >
	<?= (isset($msg) ? $msg : ""); ?>
</form>