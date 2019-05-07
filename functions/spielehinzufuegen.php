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
            <label for="titel"><b> Spieltitel </b></label>   <!-- Spieltitel Feld -->
            <input type="text" placeholder="" name="titel" required>
            
            <label for="typ"><b> Typ </b><i>(Plattform)</i></label>   <!-- Typ (PLttform) Feld -->
            <input type="text" placeholder="" name="typ" required>
            
            <label for="genre"><b> Genre </b></label>   <!-- Genre Feld -->
            <input type="text" placeholder="" name="genre" required>
            
            <label for="release"><b> Erscheinungsjahr </b></label>   <!-- Erscheinungsjahr Feld -->
            <input type="text" placeholder="" name="release" required>
            <hr>

            <button type="submit" class="registerbtn" name="gameinsert"><b>Hinzufügen</b></button>    <!-- Weitergabe an server.php in gameinsert "funktion" -->
        </div>
    </form>
            <div class="footer">
                <p><i>Zurück zur <a href="../index.php">Startseite</a></i>.</p>  <!-- zurück zur startseite -->
            </div>
    </body>
</html>