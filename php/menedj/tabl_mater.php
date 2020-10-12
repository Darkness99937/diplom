<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style type="text/css">
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
	<form method="POST">
		<div class="but">
        <input type="submit" name="del1" value="Удалить" class="button"> 
        <input type="submit" name="save1" value="Сохранить" class="button"> 
        </div>
	<?php
	require_once dirname(__FILE__)."/../connect.php";

	$query = "SELECT * FROM Salon";
	$result = mysqli_query($link, $query);
	$myrow = mysqli_fetch_array($result);
	echo "<table class='table_dark' border='1px solid black'><tr><th width='50px'>ID материала</th><th>Наименование материала</th><th>Удалить поле?</th></tr>";
do
{
	$ID=$myrow['id_material'];
	$table1=$myrow['material_salona'];

	echo"<tr>";
	echo"<td><input type='text' disabled='disabled' name='ID[$ID]' value='$ID' ></td>";
	echo"<td><input type='text' name='table1[$ID]' value='$table1'></td>";
	echo "<td><input name='id1[$ID]' type='checkbox' value='$ID'></td></tr>";
}
while ($myrow=mysqli_fetch_array($result));

if(isset($_POST['save1'])){
    foreach($_POST['ID'] as $key1 => $value1){
        $sql="update Salon set id_material='".$value1."' WHERE id_material=".$key1;
        mysqli_query($link,$sql);
    }
    foreach($_POST['table1'] as $key2 => $value2){
        $sql="update Salon set material_salona='".$value2."' WHERE id_material=".$key2;
        mysqli_query($link,$sql);
    }
    echo"<script>
        window.location = 'tabl_mater.php'
            </script>";
};

if(isset($_POST['del1'])){
    foreach($_POST['id1'] as $key4 => $value4){
      $result=mysqli_query($link,"Select * From Avto WHERE id_material=".$value4);

        if ($result) {
          do {
          $query = "select * from test_car where id_avto=".$myrow['id_avto'];
          $result1 = mysqli_query($link,$query);
          do {
          mysqli_query($link, "Delete From test_drive_zap where id_test_car=".$myrow1['id_test_car']);
          }
          while($myrow1=mysqli_fetch_array($result1));
          mysqli_query($link, "Delete From test_car where id_avto=".$myrow['id_avto']);
          mysqli_query($link, "Delete From Zakaz where id_avto=".$myrow['id_avto']);
          mysqli_query($link, "Delete From Realiz where id_avto=".$myrow['id_avto']);
          mysqli_query($link, "Delete From Nakl_prihod where id_avto=".$myrow['id_avto']);
        } while ($myrow=mysqli_fetch_array($result));

        $sql="Delete FROM Avto WHERE id_material=".$value4; //KEY МЕНЯЕТСЯ
        mysqli_query($link,$sql);

        $sql="Delete FROM Salon WHERE id_material=".$value4; //KEY МЕНЯЕТСЯ
        mysqli_query($link,$sql);

    }
  }
    echo"<script>
        window.location = 'tabl_mater.php'
            </script>";
};
?>
 <td>Autho_inc</td>
 <td> <input name="Name_mater" type="text" placeholder="Please enter your details" maxlength="30"/>
 <td> <input type="submit" value="Add" name="otpravit" class="button"/>
    </tr>
</table>
<?
if(isset($_POST['otpravit'])){
//переменные
 $Name_mater = $_POST['Name_mater'];

//запрос
$result = mysqli_query($link,"INSERT INTO Salon (
id_material,material_salona) VALUES ('','$Name_mater')");
 if ($result == true){
    echo "The information is entered in the database";
    echo"<script>
        window.location = 'tabl_mater.php'
            </script>";
}else{
    echo "The information is not entered in the database";
}}
?>
</form>
</body>
</html>