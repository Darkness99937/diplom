<?
$_SESSION['LogOn'] = False;
$host='localhost';
$database='cp63535_avtosal';
$user='root';
$password='';
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));
?>