<?php 

session_start();
$con = mysqli_connect('localhost','root','','medienbibliothek');
    if (mysqli_connect_errno()) {
    echo "Error: " . mysqli_connect_error();
    }
   

    $mid = $_GET['mID'];

    $deletegame = "DELETE FROM musik WHERE mID ='$mid'";
    mysqli_query($con, $deletegame);
        echo "gelöscht";

    mysqli_close($con);

        header("Location: ../functions/musikuebersicht.php");
?>