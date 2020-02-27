
<?php
	 
$first_num = $_POST['num1'];
$second_num = $_POST['num2'];
$operator = $_POST['operator'];

$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
	switch($operator) {
		case "+":
		echo $result = $first_num + $second_num;
		break;
		case "-":
		echo $result = $first_num - $second_num;
		break;
		case "*":
		echo $result = $first_num * $second_num;
		break;
		case "/":
		echo $result = $first_num / $second_num;
		break;
	}
	}

?>
