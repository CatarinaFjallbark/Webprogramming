<?php
/*Catarina Sörensen
Webbprogrammering
Mittuniversitetet
Lägger in i databasen
När användaren skapat en inloggningen kommer man till denna sidan och det registreas i databasen.*/?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Sign Up</title>
</head>
<body>
<?php
$name = $_POST['newname'];
$surname = $_POST['newsurname'];
$email = $_POST['newemail'];
$pass = $_POST['newpass'];

$conn_string = "host= webblabb.miun.se port=5432 dbname=casr1500 user=casr1500 password=EWR8OLctY";
$dbconn = pg_connect($conn_string);

if($dbconn){
   $query = "SELECT * FROM members WHERE email ='$email';";
   $mailResult = pg_query($dbconn, $query);

    $data = pg_fetch_object($mailResult);

    if($data->email == ""){
      echo "Welcome  " . " " . $name;
      ?><a href="index.php">Sign in here</a> <?php
      $result = pg_query($dbconn, "INSERT INTO members(prename, surname, email, pass) VALUES ('$name', '$surname', '$email', '$pass');");
    }else{
      echo "This mail address is allready in use at this site";
      ?><a href="index.php">Try again!</a><?php
    }

  }else{
    echo "!!! Kunde inte koppla upp mot databasen";
  }
  pg_close($dbconn);
?>
</body>
</html>
