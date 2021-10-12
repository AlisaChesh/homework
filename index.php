<?php
error_reporting(-1);
ini_set('display_errors','on');
header('Content-Type: text/html; charset=utf-8');

echo '<pre>'.print_r($_GET,1).'</pre>';


function calculator ($num1, $num2, $action) {
	if($action == "+") {
		return ($num1 + $num2);
	}elseif($action == "-") {
		return ($num1 - $num2);
	}elseif($action == "*") {
		return ($num1 * $num2);
	} elseif ($action == "/" && $num2 == 0) {
		return  "К сожалению, мы не можем делить число на 0 ¯\_(ツ)_/¯";
	} else {
		return ($num1 / $num2);
	}                                 //наша функция, тут мне кажется у меня пробел того, как можно определить эту функцию в переменную
}
$sum = calculator ($num1, $num2, $action); //вот была вот такая попытка, такую переменную я пыталась сделать в самой функции, но тоже, видать, неправильно было.
echo $sum ;

$num1= $_GET['num1']; //здесь создала переменные так, чтобы они получали данные из нашего калькулятора, но у меня выбивается ошибка - Undefined array key.
$num2= $_GET['num2'];
$action= $_GET['action'];


?>

<h1> Калькулятор</h1>

<form action="/index.php" method="get">
	<p>Чтобы совершить математическое действие заполните все строки</p>
	<div>Введите число №1<br> <input type="number" name="num1" value=" ">
		<br>Введите число №2<br><input type="number" name="num2" value=" "></div>
	<br><div>Выберете математическое действие <br>
		<label>Прибавить<input type="radio" name="action" value="+"></label>
		<label>Отнять<input type="radio" name="action" value="-"></label>
		<label>Умножить<input type="radio" name="action" value="*"></label>
		<label>Поделить<input type="radio" name="action" value="/"></label>
	</div>
	<br><div><input type="submit" value="Посчитать"</div><br>
	<br><textarea>Ответ:<?= $sum ?></textarea>

</form>





