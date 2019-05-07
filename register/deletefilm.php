<?php 

session_start();
$con = mysqli_connect('localhost','root','','medienbibliothek'); /* Datenbank Verbindung herstellen für die Delete Film Funktion*/
    if (mysqli_connect_errno()) {
    echo "Error: " . mysqli_connect_error();
    }
   

    $fid = $_GET['fID'];

    $deletefilm = "DELETE FROM filme WHERE fID ='$fid'"; /* Delete Befehl in $deletefilm damit es noch ausgeführt werden kann*/
    mysqli_query($con, $deletefilm);
        echo "gelöscht";

    mysqli_close($con);

        header("Location: ../functions/filmuebersicht.php");
?>