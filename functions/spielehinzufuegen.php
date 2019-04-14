<!DOCTYPE HTML>
<?php
    include('../register/server.php');

?>

<html> 
    <head>
    <meta charset="UTF-8">
        <title> Medienbibliothek - Spiel hinzufügen </title>
        <link rel="stylesheet" type="text/css" href="..\styles\registerstyle.css">
    </head>

    <body>

    <form method="post" action="spielehinzufuegen.php" > 
        
        <div class="main">
            <div class="head">
                <h1>Spiel hinzufügen</h1>
                <p>Bitte füllen Sie dieses Dokument aus um ein Spiel Ihrer Bibliothek hinzuzufügen</p>
            </div>
        <hr>
            <label for="titel"><b> Spieltitel </b></label>
            <input type="text" placeholder="" name="titel" required>
            
            <label for="typ"><b> Typ </b></label>
            <input type="text" placeholder="" name="typ" required>
            
            <label for="genre"><b> Genre </b></label>
            <input type="text" placeholder="" name="genre" required>
            
            <label for="release"><b> Erscheinungsjahr </b></label>
            <input type="text" placeholder="" name="release" required>
            <hr>

            <button type="submit" class="registerbtn" name="gameinsert"><b>Hinzufügen</b></button>
        </div>
    </form>
            <div class="footer">
                <p><i>Zurück zur <a href="../index.php">Startseite</a></i>.</p>  
            </div>
    </body>
</html>