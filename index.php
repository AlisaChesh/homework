<?php

function calculator ($num1, $num2,$action) {
	if ($action == "+") {  //здесь не знаю нужна ли переменная, чтобы вернуть ее в конце. Если да, тогда не знаю как вписать в нее action
		return $num1 + $num2;
	} elseif ($action== "-") {
		return $num1 - $num2 ;
	} elseif ($action == "*"){
		return $num1 * $num2;
	} elseif ($action == "/" && $num1 >= 1 || $num2 >= 1){   //не знаю только как указать, условия если $num1 и 2 >0
		return $num1 / $num2;
	} elseif ( $action == "/" && $num2 == 0) {
		return "К сожалению мы не можем делить число на 0 ¯\_(ツ)_/¯";
			}
	}


echo calculator (50, 35, "/")

?>



