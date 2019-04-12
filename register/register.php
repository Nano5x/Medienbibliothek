<!DOCTYPE html>
<?php 
    include('server.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Registrierung </title>
        <link rel="stylesheet" type="text/css" href="..\styles\registerstyle.css">
    </head>
<body>

<form method="post" action="register.php">
    
  <div class="main">
    <div class="head">
        <h1>Register</h1>
        <p>Bitte füllen Sie dieses Dokument aus um ihren Account zu erstellen.</p>
    </div>
    <hr>
      
    <label for="username"><b>Benutzername</b></label>
    <input type="text" placeholder="Ihr Benutzername" name="username" required>
      
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Ihr Name" name="name" required>

    <label for="vorname"><b>Vorname</b></label>
    <input type="text" placeholder="Ihr Vorname" name="vorname" required>

    <label for="pass"><b>Passwort</b></label>
    <input type="password" placeholder="Ihr Passwort" name="pass" required>

    <label for="psw-repeat"><b>Passwort wiederholen</b></label>
    <input type="password" placeholder="Bitte geben Sie Ihr Passwort erneut ein " name="pswrepeat" required>
    <hr>

      <button type="submit" class="registerbtn" name="reg_user"><b>Registrieren</b></button>
  </div>
  
  <div class="container footer">
      <p><i>Bereits registriert? <a href="..\login.php">Anmelden</a></i>.</p>
  </div>
</form>
</body>
</html>