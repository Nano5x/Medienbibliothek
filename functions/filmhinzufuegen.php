<!DOCTYPE HTML>
<?php
    include('../register/server.php');
    
?>

<html> 
    <head>
    <meta charset="UTF-8">
        <title> Medienbibliothek - Film hinzufügen </title>
        <link rel="stylesheet" type="text/css" href="..\styles\registerstyle.css">
    </head>

    <body>

    <form method="post" action="filmhinzufuegen.php" > 
        
        <div class="main">
            <div class="head">
                <h1>Film hinzufügen</h1>
                <p>Bitte füllen Sie dieses Dokument aus um einen Filme Ihrer Bibliothek hinzuzufügen</p>
            </div>
        <hr>
            <label for="titel"><b> Filmtitel </b></label>
            <input type="text" placeholder="Filmtitel" name="titel" required>
            
            <label for="typ"><b> Typ </b></label>
            <input type="text" placeholder="Typ" name="typ" required>
            
            <label for="genre"><b> Genre </b> <i>(bitte durch Kommata trennen)</i></label>
            <input type="text" placeholder="Genre" name="genre" required>
            
            <label for="release"><b> Erscheinungsjahr </b></label>
            <input type="text" placeholder="Erscheinungsjahr" name="release" required>
            
            <label for="regisseur"><b> Regisseur </b></label>
            <input type="text" placeholder="Regisseur" name="regisseur" required>
            <hr>

            <button type="submit" class="registerbtn" name="filminsert"><b>Hinzufügen</b></button>
        </div>
    </form>
            <div class="footer">
                <p><i>Zurück zur <a href="../index.php">Startseite</a></i>.</p>  
            </div>

    </body>
</html>