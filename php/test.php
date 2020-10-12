<?
function tabl($link){
	$query = "SELECT * FROM `Model_avto` ORDER by model_name";


	$result = mysqli_query($link, $query)or die("ошибка в запросе "+mysqli_error());

	if (!$result) {
	    $message  = 'Неверный запрос: ' . mysql_error() . "\n";
	    $message .= 'Запрос целиком: ' . $query;
    	die($message);
	}	


	while ($row = mysqli_fetch_array($result)) {
   	 	echo "<a href='#'>".mb_strtoupper ($row['model_name'])."</p><hr>";
	}
}

function LogIn(){
	if ($_SESSION['logggon'] == 1) {
		echo "<p>WELCOME BACK ".$_SESSION['Fam']."! <a href='php/exit.php'>Exit</a></p>";
	} else{
		echo "<p>HAVE AN ACCOUNT? <a href='signin.php'>SIGN IN</a> OR <a href='signup.php'>SIGN UP</a></p>";
	}
	if (($_SESSION['lvlpass']>0) and ($_SESSION['logggon'] == 1)) {
		echo "<a href='../menedjer_site.php'>Админка</a>";
	}
}
?>