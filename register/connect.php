<?php
$con = mysqli_connect('localhost', 'root', '', 'medienbibliothek');    /* Datenbank Verbindung herstellen für andere .php seiten */
    if(!con){
        die("Datenbank Verbindung Fehlgeschlagen" . mysqli_error($con));
    }
