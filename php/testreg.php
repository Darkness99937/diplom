<meta charset="utf-8">
<?php
//  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
	session_start();
	require_once dirname(__FILE__)."/connect.php";
	

	if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
	if (isset($_POST['password'])) { $pasword=$_POST['password']; if ($pasword =='') { unset($pasword);} } //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
  
	if (empty($login) or empty($pasword)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
	{
		echo "<script> alert ('Invalid user name or password entered.') </script>";
		exit("<meta http-equiv='refresh' content='0; url=../signin.php' >");
	}

//если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
	$login = stripslashes($login);
	$login = htmlspecialchars($login);
	$pasword = stripslashes($pasword);
	$pasword = htmlspecialchars($pasword);

//удаляем лишние пробелы
	$login = trim($login);
	$pasword = trim($pasword);

// подключаемся к базе
	
 
//извлекаем из базы все данные о пользователе с введенным логином
	$query = "SELECT * FROM Users WHERE login='$login'";
	$result = mysqli_query($link, $query);
	$myrow = mysqli_fetch_array($result);
	if (empty($myrow['login'])) {
//если пользователя с введенным логином не существует

	echo "<script> alert ('Invalid user name or password entered.') </script>";
	exit("<meta http-equiv='refresh' content='0; url=../signin.php' >");
	}
	else {
//если существует, то сверяем пароли
	if ($myrow['password']==$pasword) {
//если пароли совпадают, то запускаем пользователю сессию! Можете его поздравить, он вошел!
	$_SESSION['login']=$myrow['login'];
	$_SESSION['logggon'] = 1; 
	$_SESSION['lvlpass'] = $myrow['lvl_pass'];
	$_SESSION['id_user']=$myrow['id_user'];//эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
	echo "<script> alert ('Congratulations, you enterned.') </script>";
	if ($myrow['lvl_pass']>0) {
		$query = "SELECT * FROM Menedjer WHERE id_user='".$myrow['id_user']."'";
		$result = mysqli_query($link, $query);
		$myrow = mysqli_fetch_array($result);
		$_SESSION['id'] = $myrow['id_menedjer']; 
		$_SESSION['Fam'] = $myrow['fam_menedjer'];
		$_SESSION['Name'] = $myrow['name_menedjer'];
		$_SESSION['Otch'] = $myrow['otch_menedjer'];
		$_SESSION['tel'] = $myrow['num_tel_menedjer'];
		exit("<meta http-equiv='refresh' content='0; url=../menedjer_site.php'>");
	} else{
		$query = "SELECT * FROM Klient WHERE id_user='".$myrow['id_user']."'";
		$result = mysqli_query($link, $query);
		$myrow = mysqli_fetch_array($result);
		$_SESSION['id'] = $myrow['id_klient']; 
		$_SESSION['Fam'] = $myrow['fam_klient'];
		$_SESSION['Name'] = $myrow['name_klient'];
		$_SESSION['Otch'] = $myrow['otch_klient'];
		$_SESSION['tel'] = $myrow['num_tel_klient'];
	exit("<meta http-equiv='refresh' content='0; url=../index.php'>");
		}
	}
	else {
//если пароли не сошлись
	echo "<script> alert ('Invalid user name or password entered.') </script>";
	exit("<meta http-equiv='refresh' content='0; url=../signin.php' >");
	}
	}
?>