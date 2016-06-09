<?php /*Catarina Sörensen
Webbprogrammering
Mittuniversitetet
Sida endast för medlemmar.
*/?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Member site</title>
</head>
<body>
  <?php
  session_start();
  $mail = $_SESSION['login_user'];
  if($_SESSION['login_user'] != null){
      $conn_string = "host= webblabb.miun.se port=5432 dbname=casr1500 user=casr1500 password=EWR8OLctY";
      $dbconn = pg_connect($conn_string);
      if($dbconn){
        $query = "SELECT * FROM members WHERE email ='$mail';";
        $result = pg_query($dbconn, $query);
        $data = pg_fetch_object($result);

        if($data->index == 1){
          ?>
          <h1>ADMIN access</h1>
          <a href="admin.php">Admin site</a>
          <?php
        }
          ?>
          <h1>This site is only for members!</h1>
          <a href="index.php">Return to homepage!</a>
          <?php

      }

    }else{
      header("Location: index.php");
    }
  pg_close($dbconn);

  ?>

</body>
</html>
