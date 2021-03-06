<!DOCTYPE HTML>
<?php
    include('../register/server.php');

?>

<html> 
    <head>
    <meta charset="UTF-8">
        <title> Medienbibliothek - Musik hinzufügen </title>
        <link rel="stylesheet" type="text/css" href="..\styles\registerstyle.css">
    </head>

    <body>

    <form method="post" action="musikhinzufuegen.php" > 
        
        <div class="main">
            <div class="head">
                <h1>Musik hinzufügen</h1>
                <p>Bitte füllen Sie dieses Dokument aus um Musik Ihrer Bibliothek hinzuzufügen</p>
            </div>
        <hr>
            <label for="titel"><b> Songtitel </b></label>
            <input type="text" placeholder="" name="titel" required>
            
            <label for="interpret"><b> Interpret </b></label>
            <input type="text" placeholder="" name="interpret" required>
            
            <label for="genre"><b> Genre </b></label>
            <input type="text" placeholder="" name="genre" required>
            
            <label for="release"><b> Erscheinungsjahr </b></label>
            <input type="text" placeholder="" name="release" required>
            
            <label for="album"><b> Album </b></label>
            <input type="text" placeholder="" name="album" required>
            <hr>

            <button type="submit" class="registerbtn" name="musikinsert"><b>Hinzufügen</b></button>
        </div>
    </form>
            <div class="footer">
                <p><i>Zurück zur <a href="../index.php">Startseite</a></i>.</p>  
            </div>
    </body>
</html>