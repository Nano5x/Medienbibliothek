<?php 
session_start();
   
    include('server.php');   

    $fid = $_GET['fID'];

    $deletefilm = "DELETE FROM filme WHERE fID ='$fid'"; /* Delete Befehl in $deletefilm damit es noch ausgeführt werden kann*/
    mysqli_query($con, $deletefilm);
        echo "gelöscht";

    mysqli_close($con);

        header("Location: ../functions/filmuebersicht.php");
?>
