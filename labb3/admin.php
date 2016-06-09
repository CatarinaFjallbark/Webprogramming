<?php /*Catarina Sörensen
Webbprogrammering
Mittuniversitetet
Visar en unik adminsida för endast admins
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
  if($_SESSION['login_user'] != null){
    ?>
    <h1>This site is only for admins!</h1>
    <a href="index.php">Return to homepage!</a>

    <?php
  }else{
    header("Location: index.php");
  }

  ?>
</body>
</html>
