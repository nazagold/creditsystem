<META http-equiv=content-type content="text/html; charset=UTF-8">
<?php
include("random.php");

$cap = $_COOKIE["captcha"]; // берем из куки значение MD5 хэша, занесенного туда в captcha.php

// Пишем функцию проверки введенного кода
function check_code($code, $cookie) 
{

// АЛГОРИТМ ПРОВЕРКИ	
	$code = trim($code); // На всякий случай убираем пробелы
	$code = md5($code);
// НЕ ЗАБУДЬТЕ ЕГО ИЗМЕНИТЬ!

// Работа с сессией, если нужно - раскомментируйте тут и в captcha.php, удалите строчки, где используются куки
//session_start();
//$cap = $_SESSION['captcha'];
//$cap = md5($cap);
//session_destroy();

	if ($code == $cap){return TRUE;}else{return FALSE;} // если все хорошо - возвращаем TRUE (если нет - false)
	
}

// Обрабатываем полученный код
	if (isset($_POST['go'])) // Немного бессмысленная, но все же защита: проверяем, как обращаются к обработчику.
	{
		// Если код не введен (в POST-запросе поле 'code' пустое)...
			if ($_POST['code'] == '')
			{
				exit("Ошибка: введите капчу!"); //...то возвращаем ошибку
			}
		// Если код введен правильно (функция вернула TRUE), то...
			if (check_code($_POST['code'], $cookie))
			{
				echo "Ты правильно ввел капчу. Умничка"; // Поздравляем с этим пользователя
			}
		// Если код введен неверно...
			else 
			{
				exit("Ошибка: капча введена неверно!"); //...то возвращаем ошибку
			}
		}
	// Если к нам обращаются напрямую, то дело дрянь...
	else 
	{
		exit("Access denied"); //..., возвращаем ошибку
	}
	
?>
