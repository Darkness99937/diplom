<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		textarea{
			width: 400px;
		}
    .but{
        padding-left:1%;
    }
    input[type="text"]{
        width: 90%;
        height:100%;
        background: rgba(51, 51, 153, .0);
        border: none;
        color: white;
    }
    input[type="text"]:hover {
background: rgba(51, 51, 153, .0);
color: orangered;
}
.table_dark {
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  font-size: 14px;
  width: 90%;
  text-align: left;
  border-collapse: collapse;
  background: rgb(192, 192, 192, 0.2);
  margin: 10px;
}
.table_dark th {
    text-align: center;
  color: white;
  border-bottom: 1px solid #696969;
  padding: 12px 17px;
}
.table_dark td {
  color: #CAD4D6;
  border-bottom: 1px solid #696969;
  border-right:1px solid #696969;
  padding: 7px 17px;
}
.table_dark tr:last-child td {
  border-bottom: none;
}
.table_dark td:last-child {
  border-right: none;
}
.table_dark tr:hover td {
  text-decoration: underline;
}

form input[type="submit"]{
    font-family: Georgia, 'Times New Roman', Times, serif;
    width: 5rem;
    padding: 7px 0 7px 0;
    font-size: 0.7rem;
    border:1px solid  #c2d0d9;
    border-radius:5px;
    background-color: #c2d0d9;   
    color: rgb(51, 51, 51);
    outline: none;
}

form input[type="submit"]:hover{
    border:1px solid  #777777;  
    background-color: #bcbebe; 
    color:rgb(58, 57, 57); 
}
	</style>
</head>
<body>
	<form>
		<div class="but">
        <input type="submit" name="del1" value="Удалить" class="button"> 
        <input type="submit" name="save1" value="Сохранить" class="button"> 
        </div>

	<?php


	if(($_SESSION['lvlpass'] == 1) and ($_SESSION['logggon']==1)){
	echo "<table class='table_dark' border='1px solid black'><tr><th width='50px'>id_avto</th><th>naimen_avto</th><th>god_vipusk</th><th>power</th>";
	echo "<th>cena</th><th>description</th><th>id_model</th><th>id_material</th><th>id_class</th><th>avto_img</th><th>Удалить запись?</th></tr>";

require_once dirname(__FILE__)."/../connect.php";

	$query = "SELECT * FROM Avto";
	$result = mysqli_query($link, $query);
	$myrow = mysqli_fetch_array($result);
do
{
	$ID=$myrow['id_avto'];
	$table1=$myrow['naimen_avto'];
	$table2=$myrow['god_vipusk'];
	$table3=$myrow['power'];
	$table4=$myrow['cena'];
	$table5=$myrow['description'];
	$table6=$myrow['id_model'];
	$table7=$myrow['id_material'];
	$table8=$myrow['id_class'];
	$table9=$myrow['avto_img'];
	echo"<tr>";
	echo"<td><input disabled='disabled' type='text' name='ID[$ID]' value='$myrow[id_avto]'></td>";
	echo"<td><input type='text' name = '$table1[$ID]' value='$myrow[naimen_avto]'></td>";
	echo"<td><input type='text' name = '$table2[$ID]' value='$myrow[god_vipusk]'></td>";
	echo"<td><input type='text' name = '$table3[$ID]' value='$myrow[power]'></td>";
	echo"<td><input type='text' name = '$table4[$ID]' value='$myrow[cena]'></td>";
	echo"<td><textarea name = '$table5[$ID]' placeholder='Please enter your details'>$myrow[description]</textarea></td>";
	echo"<td><input type='text' name = '$table6[$ID]' value='$myrow[id_model]'></td>";
	echo"<td><input type='text' name = '$table7[$ID]' value='$myrow[id_material]'></td>";
	echo"<td><input type='text' name = '$table8[$ID]' value='$myrow[id_class]'></td>";
	echo"<td><input type='text' name = '$table9[$ID]' value='$myrow[avto_img]'></td>";
	echo "<td><input name='id1[$ID]' type='checkbox' value='$ID'></td></tr>";
}
while ($myrow=mysqli_fetch_array($result));
 	echo"<tr><td>Autho_inc</td>";
 	echo"<td><input type='text' name = '$table1[$ID]' placeholder='Please enter your details'></td>";
	echo"<td><input type='text' name = '$table2[$ID]' placeholder='Please enter your details'></td>";
	echo"<td><input type='text' name = '$table3[$ID]' placeholder='Please enter your details'></td>";
	echo"<td><input type='text' name = '$table4[$ID]' placeholder='Please enter your details'></td>";
	echo"<td><textarea name = '$table5[$ID]' placeholder='Please enter your details'></textarea></td>";
	echo"<td><input type='text' name = '$table6[$ID]' placeholder='Please enter your details'></td>";
	echo"<td><input type='text' name = '$table7[$ID]' placeholder='Please enter your details'></td>";
	echo"<td><input type='text' name = '$table8[$ID]' placeholder='Please enter your details'></td>";
	echo"<td><input type='text' name = '$table9[$ID]' placeholder='Please enter your details'></td>";
 echo "<td> <input type='submit' value='Add' name='otpravit' class='button'/>
    </tr>";
echo "</table>";
	} else{
		echo "<script>alert('Вы не вошли как менеджер!')</script>";
		exit("<meta http-equiv='refresh' content='0; url=../../index.php'>");
	}
?>
<?
if(isset($_POST['otpravit'])){
//переменные
 $NameSalona = $_POST['NameSalona'];
 $Adres = $_POST['Adres'];
 $NumTelSpravok = $_POST['NumTelSpravok'];
 $NumTelMenedjer = $_POST['NumTelMenedjer'];
//запрос
 $result = mysqli_query($link,"INSERT INTO Avtosalon (
id_salona,name_salona,adres,num_tel_spravok,num_tel_menedjer) VALUES ('','$NameSalona','$Adres','$NumTelSpravok','$NumTelMenedjer')");
 if ($result == true){
    echo "The information is entered in the database";
    echo"<script>
        window.location = 'tabl_avtosal.php'
            </script>";
}else{
    echo "The information is not entered in the database";
}}
?>
</form>
</body>
</html>