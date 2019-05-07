<?php 

session_start();
$con = mysqli_connect('localhost','root','','medienbibliothek');/* Datenbank Verbindung herstellen für die Delete Spiel Funktion*/
    if (mysqli_connect_errno()) {
    echo "Error: " . mysqli_connect_error();
    }
   

    $sid = $_GET['sID'];

    $deletegame = "DELETE FROM spiele WHERE sID ='$sid'"; /* Delete Befehl in $deletegame damit es noch ausgeführt werden kann*/
    mysqli_query($con, $deletegame);
        echo "gelöscht";

    mysqli_close($con);

        header("Location: ../functions/gameuebersicht.php");
?>