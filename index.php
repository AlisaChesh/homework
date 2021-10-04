<?php

function calculator ($num1, $num2,$action) {
	if($action == "+") {  //здесь не знаю нужна ли переменная, чтобы вернуть ее в конце. Если да, тогда не знаю как вписать в нее action
		return $num1 + $num2;
	}
	elseif($action == "-") {
		return $num1 - $num2;
	}
	elseif($action == "*") {
		return $num1 * $num2;
	}
	elseif($action == "/" && $num1 >= 1 || $num2 >= 1) {
		return $num1 / $num2;
	}
	elseif($action == "/" && $num2 == 0) {
		return "К сожалению мы не можем делить число на 0 ¯\_(ツ)_/¯";
	}
}


echo calculator (50, 35, "/")

?>



