<!DOCTYPE HTML>
<!--
Projektarbeit LF6 von
Lukas Walden
Furkan Kocak
Maik Röhl
-->
<?php
    include('register/server.php')
?>
<html> 
    <head>
    <meta charset="UTF-8">
        <title> Medienbibliothek - Login </title>
    <link rel="stylesheet" type="text/css" href="styles/loginstyle.css">
    </head>

    <body>
    <div class="background">
        
    <div id="main">
        
        <h1>Ihre Medienbibliothek - Login</h1>
        <form method="post" action="login.php">
        <?php include('register/errors.php');?>
            <div class="lgn">
                <input type="text" name="username" placeholder="Benutzername">
            </div>
            <div class="lgn">
                <input type="password" name="pass" placeholder="Passwort" >
            </div>
               <button type="submit" id="login" name="login_user">Login</button>
            <p><i> Noch nicht <a href="register/register.php">registriert?</a></i></p>
        </form>
    </div>
        
    </div> <!-- Ende backround -->
    <div id="footer">
        
        <hr>
        <p> test </p>  

    </div>
        
    </body>
</html>
