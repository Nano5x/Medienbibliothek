<?php
session_start();
//variablen deklaration
$username = "";
$errors = array();


//Datenbankverbindung
$con = mysqli_connect('localhost','root','','medienbibliothek');

//user register

if (isset($_POST['reg_user'])){
    // Input von register.php
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $vorname = mysqli_real_escape_string($con, $_POST['vorname']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $pswrepeat = mysqli_real_escape_string($con, $_POST['pswrepeat']);



// Validierungsprüfung der Eingaben
    if (empty($username)) { array_push($errors, "Bitte Benutzername angeben!");}
    if (empty($name)) { array_push($errors, "Name eingeben!");}
    if (empty($vorname)) { array_push($errors,"Vorname eingeben!");}
    if (empty($pass)) { array_push($errors, "Passwort wird benötigt" );}
    if ($pass != $pswrepeat){
        array_push($errors, "Die Passwörter sind nicht gleich");
    }

    //Überprüfung ob Benutzer schon angelegt ist

    $benutzer_pruef = "SELECT * FROM benutzer WHERE Benutzername ='$username' LIMIT 1";
    $result = mysqli_query($con, $benutzer_pruef);
    $benutzer = mysqli_fetch_assoc($result);

    //WennBenutzer da ist
            if($benutzer['Benutzername'] === $username){
                array_push($errors, "Benutzer existiert bereits");
    }
//Benutzer registrierung ohne error
if (count($errors) == 0){
    $pass = md5($pass);
    $add = "INSERT INTO benutzer (Benutzername, name, vorname, pass) VALUES('$username', '$name', '$vorname', '$pass')";
    $results = mysqli_query($con, $add);
    $_SESSION['Benutzername'] = $username;
    $_SESSION['success'] = "$vorname's Medienbibliothek"; 
    header('location: ..\index.php');
}
}

//User Login

if(isset($_POST['login_user'])){   //Überprüft ob die Felder richtig ausgefüllt sind und Login
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    
    if(empty($username)){
        array_push($errors, "Benutzername angeben!");
    }
    if(empty($pass)){
        array_push($errors, "Passwort angeben");
    }
    if (count($errors) == 0){
        
        $pass = md5($pass); //md5 verschlüsselungsverfahren
        $add = "SELECT * FROM Benutzer WHERE Benutzername='$username' AND pass='$pass'";
        $results = mysqli_query($con, $add);
        if (mysqli_num_rows($results) == 1){
            $_SESSION['Benutzername'] = $username;
            $_SESSION['success'] = "$username's Medienbibliothek";
            header('location: index.php');
        }else {
            array_push($errors, "Falsche Benutzername/Passwort kombination");
        }
    }
}

//Insert von Film Spiele und musik 
if(isset($_POST['filminsert'])){            
      
        //Datensätze in Datenbank schreiben
        $titel = mysqli_real_escape_string($con, $_POST['titel']);
        $typ = mysqli_real_escape_string($con, $_POST['typ']);
        $genre = mysqli_real_escape_string($con, $_POST['genre']);
        $release = mysqli_real_escape_string($con, $_POST['release']);
        $regisseur = mysqli_real_escape_string($con, $_POST['regisseur']);
        
        if (empty($titel)) { array_push($errors, "Titel angeben");}
        if (empty($typ)) { array_push($errors, "Film oder Serie angeben");}
        if (empty($genre)) { array_push($errors,"Genre angeben");}
        if (empty($release)) { array_push($errors, "Erscheinungsjahr angeben" );}
        if (empty($regisseur)) { array_push($errors, "Regisseur angeben");}
        
        $sessionuser = $_SESSION['Benutzername'];
        $add = "INSERT INTO filme (Titel, Typ, Genre, Erscheinungsjahr, Regisseur, username) VALUES('$titel', '$typ', '$genre', '$release', '$regisseur', '$sessionuser')";
           
        $result = mysqli_query($con, $add);
        header('location: ..\index.php');
}
if(isset($_POST['gameinsert'])){            
      
        //Datensätze in Datenbank schreiben
        $titel = mysqli_real_escape_string($con, $_POST['titel']);
        $typ = mysqli_real_escape_string($con, $_POST['typ']);
        $genre = mysqli_real_escape_string($con, $_POST['genre']);
        $release = mysqli_real_escape_string($con, $_POST['release']);
        
        if (empty($titel)) { array_push($errors, "Titel angeben");}
        if (empty($typ)) { array_push($errors, "Spieltyp angeben");}
        if (empty($genre)) { array_push($errors,"Genre angeben");}
        if (empty($release)) { array_push($errors, "Erscheinungsjahr angeben" );}
        
        $sessionuser = $_SESSION['Benutzername'];
        $add = "INSERT INTO spiele (Titel, Typ, Genre, Erscheinungsjahr, username) VALUES('$titel', '$typ', '$genre', '$release', '$sessionuser')";
           
        $result = mysqli_query($con, $add);
        header('location: ..\index.php');
}
if(isset($_POST['musikinsert'])){            
      
        //Datensätze in Datenbank schreiben
        $titel = mysqli_real_escape_string($con, $_POST['titel']);
        $interpret = mysqli_real_escape_string($con, $_POST['interpret']);
        $genre = mysqli_real_escape_string($con, $_POST['genre']);
        $release = mysqli_real_escape_string($con, $_POST['release']);
        $album = mysqli_real_escape_string($con, $_POST['album']);
        
        if (empty($titel)) { array_push($errors, "Titel angeben");}
        if (empty($typ)) { array_push($errors, "Film oder Serie angeben");}
        if (empty($genre)) { array_push($errors,"Genre angeben");}
        if (empty($release)) { array_push($errors, "Erscheinungsjahr angeben" );}
        if (empty($regisseur)) { array_push($errors, "Regisseur angeben");}
        
        $sessionuser = $_SESSION['Benutzername'];
        $add = "INSERT INTO musik (Songtitel, Interpret, Genre, Erscheinungsjahr, Album, username) VALUES('$titel', '$interpret', '$genre', '$release', '$album', '$sessionuser')";
           
        $result = mysqli_query($con, $add);
        header('location: ..\index.php');
}

?>