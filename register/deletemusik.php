<?php 

session_start();
$con = mysqli_connect('localhost','root','','medienbibliothek'); /* Datenbank Verbindung herstellen für die Delete Musik Funktion*/
    if (mysqli_connect_errno()) {
    echo "Error: " . mysqli_connect_error();
    }
   

    $mid = $_GET['mID'];

    $deletegame = "DELETE FROM musik WHERE mID ='$mid'";  /* Delete Befehl in $deletegamespeichern damit es noch ausgeführt werden kann*/
    mysqli_query($con, $deletegame);
        

    mysqli_close($con);

        header("Location: ../functions/musikuebersicht.php"); /* Weiterleiten zurück zur Musiküberischt*/
?>