<?php
$con = mysqli_connect('localhost', 'root', '', 'medienbibliothek');
    if(!con){
        die("Datenbank Verbindung Fehlgeschlagen" . mysqli_error($con));
    }
$select_db = mysqli_select_db($con, 'test');
    if(!$select_db){
        die("Datenbank Auswahl Fehlgeschlagen!" . mysqli_error($con));
    }