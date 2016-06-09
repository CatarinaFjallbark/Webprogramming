<?php /*Catarina Sörensen
Webbprogrammering
Mittuniversitetet
Visar olika formulär beroende på om man är inloggad eller ej.
*/?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Member site</title>
</head>
<body>

<header>
  <h1>Members site</h1>
</header>

<?php session_start(); ?>

<?php
if($_SESSION['login_user'] != null){ ?>
  <h1>Hi </h1><?php
  echo $_SESSION['login_user']
  ?>
  <br><br>
  <a href = "members.php">Site only for members</a>
  <br><br>
  <div id ="signout">
    <form action='signOut.php' method='post' accept-charset='UTF-8'>
      <input type="submit" value="Sign out" />
    </form>
  </div>
<?php } else { ?>
  <h1>Hi </h1><h1 id="thename"></h1>
  <div id="info">
    <p>You need to sign in to get more information!</p>
  </div>

  <div id = "signin" class ="no">
    <h3>Sign in here:</h3>
    <form action='signIn.php' method='post' accept-charset='UTF-8'>
    <input id="inputname" name="inputname" placeholder="Email" />
    <input type="password" id="inputpass" name="inputpass" placeholder="Password" />
    <input id ="btn" type="submit" value="Sign in"/>
  </form>

  </div>
  <div>
    <h3>Or sign-up here:</h3>
    <form action='signUp.php' method='post' accept-charset='UTF-8'>
      <input id="newname" name="newname" placeholder="Name" />
      <input id="newsurname" name="newsurname" placeholder="Surname" />
      <input id="newemail" name="newemail" placeholder="Email" />
      <input type="password" id="newpass" name="newpass" placeholder="Password" />
      <input id ="signup" type="submit" value="Sign up"/>
    </form>
  </div>
<?php } ?>

</body>
</html>
