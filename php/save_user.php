<meta charset="utf-8">
<?php

//заносим введенный пользователем пароль в переменную $FamPrep, если он пустой, то уничтожаем переменную
	if (isset($_POST['FamPrep'])) {
	$FamPrep=$_POST['FamPrep'];
	if ($FamPrep =='') { 
	unset($FamPrep);
	} 
	}

//заносим введенный пользователем пароль в переменную $FamPrep, если он пустой, то уничтожаем переменную
	if (isset($_POST['NamePrep'])) {
	$NamePrep=$_POST['NamePrep'];
	if ($NamePrep =='') { 
	unset($NamePrep);
	} 
	}

//заносим введенный пользователем пароль в переменную $FamPrep, если он пустой, то уничтожаем переменную
	if (isset($_POST['OtchPrep'])) {
	$OtchPrep=$_POST['OtchPrep'];
	if ($OtchPrep =='') { 
	unset($OtchPrep);
	} 
	}

 //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
	if (isset($_POST['login'])) {
	$login = $_POST['login']; 
	if ($login == '') {
	unset($login);
	} 
	}

//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
	if (isset($_POST['password'])) {
	$password=$_POST['password'];
	if ($password =='') { 
	unset($password);
	} 
	}


//если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
	if (empty($login)  or empty($password) or empty($FamPrep) or empty($NamePrep) or empty($OtchPrep)) 
	{
	exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
	
	}



//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали
	$FamPrep = stripslashes($FamPrep);
	$FamPrep = htmlspecialchars($FamPrep);
	$NamePrep = stripslashes($NamePrep);
	$NamePrep = htmlspecialchars($NamePrep);
	$OtchPrep = stripslashes($OtchPrep);
	$OtchPrep = htmlspecialchars($OtchPrep);
	$login = stripslashes($login);
	$login = htmlspecialchars($login);
	$password = stripslashes($password);
	$password = htmlspecialchars($password);
//удаляем лишние пробелы
	$FamPrep = trim($FamPrep);
	$NamePrep = trim($NamePrep);
	$OtchPrep = trim($OtchPrep);
	$login = trim($login);
	$password = trim($password);


// подключаемся к базе
	include ("connect.php");

// проверка на существование пользователя с таким же логином
	$result = mysql_query("SELECT id_user FROM Users WHERE login='$login'",$db);
	$myrow = mysql_fetch_array($result);
	if (!empty($myrow['id_user'])) {
	exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
	}

 // если такого нет, то сохраняем данные
	$result2 = mysql_query ("INSERT INTO TestingStudents.Prepod (FamPrep,NamePrep,OtchPrep,LoginPrep,PassPrepod) VALUES('$FamPrep','$NamePrep','$OtchPrep','$login','$password')");

// Проверяем, есть ли ошибки
	if ($result2=='TRUE')
	{
	echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
	}
 	else {
	echo "Ошибка! Вы не зарегистрированы.";
	}
?>