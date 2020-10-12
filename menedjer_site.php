<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <title>Главная страница</title>
  <style>
	  h1{
		  color:white;
	  }
	  p{
		  color:white;
	  }
	  a{
		  color:white;
		  text-decoration: none;
		}
		a:hover{
		  color:orangered;
		  text-decoration: none;
		}
	  body{
            background: url(img/src/bg.jpg);
            background-attachment: fixed;
            background-size: 100%;
            margin:0;
            padding: 0;
		}
		
    
    .ul1{
			list-style-type: none;
        	overflow: hidden;
        	margin: ;
        	padding: 0;
		}
		.li1 a{
			color: white;
			text-decoration: none;
		}
		.li1 a:hover{
			color: orangered;
			text-decoration: none;
		}
    .menu{
      width: 10%;
      float: left;
    }
    .header{
      width:100%;
      height: 10%;
    }
    .conteiner{
      position: relative;
      padding:0;
      margin:0;
    }
    .cont{
      float: right;
      position: absolute;
      width: 89vw;
      height: 90vh;
    }
  </style>
</head>
<body>
  <div class="conteiner">
    <div class="header">
      <h1>Одменка</h1>
      <?php echo "<p>Добро пожаловать: ".$_SESSION['Fam']." ".$_SESSION['Name']." ".$_SESSION['Otch']."</p>"; ?>
      <a href="php/exit.php">Exit</a>
      <hr color="white" width="150%">
    </div>
  <div class="menu">
  <ul class="ul1">
	<li class="li1"><a href="php/menedj/tabl_avto.php" target="CONTENT">Таблица: Автомобили</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_avtosal.php" target="CONTENT">Таблица: Автосалоны</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_class.php" target="CONTENT">Таблица: Классы автомобилей</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_color.php" target="CONTENT">Таблица: Цвета</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_klient.php" target="CONTENT">Таблица: Клиенты</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_menedjer.php" target="CONTENT">Таблица: Менеджеры</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_model_avto.php" target="CONTENT">Таблица: Модели автомобилей</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_nakl_prihod.php" target="CONTENT">Таблица: Накладная прихода</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_nom_nakl.php" target="CONTENT">Таблица: Номера накладных прихода</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_nom_realiz.php" target="CONTENT">Таблица: Номера договоров продажи</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_nom_zakaz.php" target="CONTENT">Таблица: Номера заказов</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_realiz.php" target="CONTENT">Таблица: Проданные автомобили</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_mater.php" target="CONTENT">Таблица: Материалы салона</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_test_avto.php" target="CONTENT">Таблица: Автомобиля для TestDrive</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_test_avto_zap.php" target="CONTENT">Таблица: Записи на TestDrive</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_users.php" target="CONTENT">Таблица: Пользователи</a></li>
	<hr>
	<li class="li1"><a href="php/menedj/tabl_zakaz.php" target="CONTENT">Таблица: Перечень заказов</a></li>
</ul>
</div>
<iframe name="CONTENT" src="php/menedj/tabl_avto.php" frameborder="0" class="cont"></iframe>
</div>
</body>
</html>