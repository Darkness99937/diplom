<?php
session_start();
require_once dirname(__FILE__)."/php/test.php";
require_once dirname(__FILE__)."/php/connect.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="css/main.css">
	<title>DutchShowRoom</title>
</head>
<body>
	<div class="navig">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li class="sl">/</li>
                    <li><a href="">ABOUT</a></li>
                    <li class="sl">/</li>
                    <li><a href="">REVIEWS</a></li>
                    <li class="sl">/</li>
                    <li><a href="">BLOG</a></li>
                    <li class="sl">/</li>
                    <li><a href="">CONTACTS</a></li>
                </ul>
        </div>
        <div class="cont">
        	<div class="header">
            <div class="sig">
                <? 
                    LogIn();
                ?>
                <img src="img/src/logo.png">
            </div>
            
        		<div class="Social">
            	<a href="https://vk.com/id209219113"><img src="img/src/vk-social-logotype.png"></a>
            	<a href="https://www.facebook.com/profile.php?id=100008460000239"><img src="img/src/facebook-circular-logo.png"></a>
            	<img src="img/src/email.png">
            	<a href="https://t.me/Darkness99937"><img src="img/src/telegram.png"></a>
            	<img src="img/src/odnoklassniki-logo.png">
            </div>
        </div>
            <div class="main_car">
            	<center>
            	<img src="img/src/mai.jpg">
            	</center>
            </div>

          
<div class="model">
	<h2>MODELS</h2>
	<?
		tabl($link);
	?>
</div>
</div>
</body>
</html>