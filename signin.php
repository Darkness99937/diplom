    <html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/signin.css">
    <title>Авторизация</title>
    <style>
  
    </style>
    </head>
    <body>
    <p>Welcome to the new<br>Dutch showroom</p>
    <ul>
        <li>Best Dutch quality</li>
        <li>Car warranty service</li>
        <li>Reliable, Qualitiatively, For all</li>
    </ul>
    <form action="php/testreg.php" method="post">
    <h2>Authorization</h2>
    <input name="login" type="text" size="15" maxlength="15" placeholder="Login">
    <input name="password" type="password" size="15" maxlength="15" placeholder="Password">
  
    <input type="submit" name="submit" value="Sign in"> <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 

<br>
 <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
<a href="signup.php">Sign Up</a> 
    </form>
    </body>
    </html>