<?php
/*Catarina Sörensen
Webbprogrammering
Mittuniversitetet
Lägger in i databasen
Användaren flyttas till denna sida när den loggat ut.*/?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Sign Out</title>
</head>
<body>
<?php
session_start();

  if(isset($_SESSION['login_user'])){
    unset($_SESSION['login_user']);
    echo "You have succesfully signed out";
    ?><a href="index.php">Return to homepage!</a> <?php

  }


?>
</body>
</html>
