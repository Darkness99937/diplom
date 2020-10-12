<html>
    <head>
        <link rel="stylesheet" href="css/signup.css">
        <meta charset="utf-8">
        <title>Регистрация</title>
    </head>
<body>
   
    <form action="save_user.php" method="POST">
    <h2>Registration</h2>
        <input name="FamPrep" type="text" size="15" maxlength="15" placeholder="Surname">
        <input name="NamePrep" type="text" size="15" maxlength="15" placeholder="Name">
        <input name="OtchPrep" type="text" size="15" maxlength="15" placeholder="Middle name">
        <input name="login" type="text" size="15" maxlength="15" placeholder="Login">
        <input name="password" type="password" size="15" maxlength="15" placeholder="Password"><br>
        <input type="submit" name="submit" value="Sign Up">  
</form>
<p>Welcome to our<br>Dutch car lovers club</p>
</body>
</html>