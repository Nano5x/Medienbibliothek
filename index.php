<!--
    --LF6--
    Projektarbeit von:
    Lukas Walden
    Furkan Kocak
    und Maik Röhl
-->

<!DOCTYPE HTML>
<?php 
    session_start();

    if(!isset($_SESSION['Benutzername'])) { //Abfrage ob Benutzer eingeloggt, wenn nicht dann leite zurück auf login
        $_SESSION['msg'] = "Log dich erst ein";
        header('location: login.php');
    }
    if (isset($_GET['logout'])){ //Bei Logout leite weiter auf Login (Startseite)
        session_destroy();
        unset($_SESSION['Benutzername']);
        header("location: login.php");
    }
?>
<html> 
    <head>
    <meta charset="UTF-8">
    <title> Medienbibliothek </title>
    <link rel="stylesheet" type="text/css" href="styles/indexstyle.css">
    </head>

    <body>  
             <?php if(isset($_SESSION['success'])) : ?> <!--Notification Nachricht aus server.php-->
            <h1>
                <?php
                    echo $_SESSION['success'];
                ?>
            </h1> 
        <?php endif ?>
    <div id="main">    

        <a href="index.php?logout='1'" id="logout"> Logout </a>
        <?php if (isset($_SESSION['Benutzername'])) : ?>
        <div class="button">
            <div>
                <input type="radio" name="eins" id="button-1"> 
                <label id="filmbg" class="knopf" for="button-1">Filme</label>
             <!--    <div class="inhalt">
                    <button class="inbutton"> Übersicht </button>
                    <button class="inbutton"> Hinzufügen </button>
                    <button class="inbutton"> Suchen </button>
                     
                </div>     -->                   
                <ul class="inhalt">
                    <li> <a href="../projekt/functions/filmuebersicht.php"> Übersicht</a> </li>
                    <li> <a href="../projekt/functions/filmhinzufuegen.php">Hinzufügen</a> </li>
                </ul>
            </div>
            <div>
                <input type="radio" name="eins" id="button-2"> 
                <label class="knopf" for="button-2">Spiele</label>
                <ul class="inhalt">
                    <li> <a href="../projekt/functions/gameuebersicht.php">Übersicht</a> </li>
                    <li> <a href="../projekt/functions/spielehinzufuegen.php">Hinzufügen</a> </li>
                </ul>
            </div>
            <div>
                <input type="radio" name="eins" id="button-3"> 
                <label class="knopf" for="button-3">Musik</label>
                <ul class="inhalt">
                    <li> <a href="../projekt/functions/musikuebersicht.php">Übersicht</a> </li>
                    <li> <a href="../projekt/functions/musikhinzufuegen.php">Hinzufügen</a> </li>
                </ul>
            </div>
        </div>
        
    </div>
        
    <div id="footer">
        
        <a><hr></a>
        <p> test </p>
        
<?php endif ?>
    </div>
    </body>
</html>