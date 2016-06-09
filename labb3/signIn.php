<?php
/*Catarina Sörensen
Webbprogrammering
Mittuniversitetet
Lägger in i databasen
Användaren flyttas till denna sida när den har loggat in*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Sign In</title>
</head>
<body>
<?php
session_start();
$email = $_POST['inputname'];
$pass = $_POST['inputpass'];

$conn_string = "host= webblabb.miun.se port=5432 dbname=casr1500 user=casr1500 password=EWR8OLctY";
$dbconn = pg_connect($conn_string);

if($dbconn){

   $query = "SELECT * FROM members WHERE email ='$email';";
   $mailResult = pg_query($dbconn, $query);

    $data = pg_fetch_object($mailResult);

    if($data->pass == $pass){
      $mail = $data->email;
      if($mail == ""){
        header("Location: index.php");
      }
      echo "Welcome ";
      echo $data->email;
      $_SESSION['login_user']=$email;
      ?><a href="index.php">You are now signed in, continue here!</a> <?php
    }else{
      echo "User name and password does not match";
      ?><a href="index.php">Try again!</a> <?php
    }

  }else{
    echo "!!! Kunde inte koppla upp mot databasen";
  }
  pg_close($dbconn);
?>
</body>
</html>
