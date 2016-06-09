<?php /*Catarina Sörensen
Webbprogrammering
Mittuniversitetet
*/?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Blogg</title>
</head>
<body>
  <h1>the blogg</h1>

  <?php
  require_once ("config.php");
  session_start();
  echo Hej;
  $email = $_POST['inputname'];
  $pass = $_POST['inputpass'];

  $newname = $_POST['newname'];
  $newsurname = $_POST['newsurname'];
  $newemail = $_POST['newemail'];
  $newpass = $_POST['newpass'];

  if($dbconn){

    echo $email;

    $query = "SELECT * FROM members WHERE email ='$email';";
    $mailResult = pg_query($dbconn, $query);
    $data = pg_fetch_object($mailResult);

    if($email != "" && $pass != ""){
      echo YAY;
    /*  ?>
      <input id ="signput" type="submit" value="Sign out" action=""/>
      <?php*/

     if($_SESSION['login_user'] == ""){

        if($data->pass == $pass){
          $name = $data->prename;
          $_SESSION['login_user'] = $name;
          echo "Welcome ";
          echo $data->prename;
        }else{
          echo "User name and password does not match";
        }
      }
    }else if($newname != "" && $newsurname != "" && $newemail != "" && $newpass != ""){
      echo whoop;
      echo $data->email;
      //$query = "INSERT INTO members(prename, surname, email, pass) VALUES ('$newname', '$newsurname', '$newemail', '$newpass');";

    }else{
    ?>
    <div id = "signin" class ="no">
      <h3>Sign in here:</h3>
      <form action='index.php' method='post' accept-charset='UTF-8'>
        <input id="inputname" name="inputname" placeholder="Email" />
        <input type="password" id="inputpass" name="inputpass" placeholder="Password" />
        <input id ="btn" type="submit" value="Sign in"/>
      </form>
    </div>
    <div>
      <h3>Or sign-up here:</h3>
      <form action='index.php' method='post' accept-charset='UTF-8'>
        <input id="newname" name="newname" placeholder="Name" />
        <input id="newsurname" name="newsurname" placeholder="Surname" />
        <input id="newemail" name="newemail" placeholder="Email" />
        <input type="password" id="newpass" name="newpass" placeholder="Password" />
        <input id ="signup" type="submit" value="Sign up"/>
      </form>
    </div>

    <?php
    }

  }else{
    echo NOO;
  }


?>

</body>
</html>
