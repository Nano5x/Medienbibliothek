<!--
    --LF6--
    Projektarbeit von:
    Lukas Walden
    Furkan Kocak
    und Maik Röhl
-->

<!DOCTYPE HTML>
<?php 
    session_start();

    if(!isset($_SESSION['Benutzername'])) { //Abfrage ob Benutzer eingeloggt, wenn nicht dann leite zurück auf login
        $_SESSION['msg'] = "Log dich erst ein";
        header('location: login.php');
    }
    if (isset($_GET['logout'])){ //Bei Logout leite weiter auf Login (Startseite)
        session_destroy();
        unset($_SESSION['Benutzername']);
        header("location: login.php");
    } 


?>
<html> 
    <head>
        <script src="../js/jquery.js"></script>
        <script src="../js/suchfeld.js"></script>
        <meta charset="UTF-8">
        <title> Medienbibliothek </title>
        <link rel="stylesheet" type="text/css" href="../styles/indexstyle.css">
    </head>

    <body>  
             <?php if(isset($_SESSION['success'])) : ?> <!--Notification Nachricht aus server.php-->
            <h1>
                <?php
                    echo $_SESSION['success'];
                ?>
            </h1> 
        <?php endif ?>
    <div id="main">
        <input id="searchbar" type="text" placeholder="Suche">
        <?php
            $con = mysqli_connect('localhost','root','','medienbibliothek') or die ("Keine Verbindung möglich");
        
        $sessionuser = $_SESSION['Benutzername'];
        //$select = "SELECT titel, typ, genre, erscheinungsjahr, regisseur FROM filme WHERE $sessionuser";
        $select = "SELECT * FROM spiele WHERE username ='$sessionuser'   ";

        $res = mysqli_query ($con, $select);
        echo "<h2>Ihre Sammlung</h2>";
    echo '<div class=table>';
        echo '<table id="test" border ="1">';
            echo "<tr>";
              echo "<th>Spieltitel</th>";
              echo  "<th>Typ</th>";
              echo  "<th>Genre</th>";
              echo  "<th>Erscheinungsjahr</th>";
            echo "</tr>";
    echo '<tbody id="tbody">';
            while ($row = mysqli_fetch_array($res))
            {
            echo "<tr>";
                   echo "<td>". $row['Titel'] ."</td>";
                   echo "<td>". $row['Typ'] ."</td>";
                   echo "<td>". $row['Genre'] ."</td>";
                   echo "<td>". $row['Erscheinungsjahr'] ."</td>";
            echo "</tr>";
        
            }
        echo '</tbody>';
        echo "</table>";
   echo '</div>';
        mysqli_close($con);
            ?>
    </div>
        
    <div id="footer">
        
        <a href="index.php?logout='1'"><hr></a>
        <p> test </p>
        

    </div>
<script src="js/test.js"></script>
    </body>
</html>