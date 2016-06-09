<?php /*Catarina Sörensen
Webbprogrammering
Mittuniversitetet
Skapar vyn till namnlistan. Kopplar upp till databasen som också sorterar efter behov.
*/?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Course site</title>
</head>
<body>
  <h1>LABORATION 4</h1>
    <form action="index.php">
      <input id ="fs" name = "radio" type="submit" value="Förnamn-stigande"/>
    </form>
    <form action="index.php">
    <input id ="ff" name ="radio" type="submit" value="Förnamn-fallande"/>
   </form>
   <form action="index.php">
    <input id ="es" name ="radio" type="submit" value="Efternamn-stigande"/>
  </form>
  <form action="index.php">
    <input id ="ef" name ="radio" type="submit" value="Efternamn-fallande"/>
  </form>
  <br>
  <br>
<?php
require_once ("NameList.class.php");
require_once ("RowClass.class.php");

  // $conn_string = "host=localhost port=5432 dbname=myDb user=postgres password=91caso58";
   $conn_string = "host= webblabb.miun.se port=5432 dbname=casr1500 user=casr1500 password=EWR8OLctY";
   $dbconn = pg_connect($conn_string);

   if($dbconn){
     $namelist = new NameList();
     $res = $_GET["radio"];
     if($res == "Förnamn-stigande"){
       $namelist->sortning = 0;
     }else if($res == "Förnamn-fallande"){
       $namelist->sortning = 1;
     }else if($res == "Efternamn-stigande"){
       $namelist->sortning = 2;
     }else if($res == "Efternamn-fallande"){
       $namelist->sortning = 3;
     }else{
       $namelist->sortning = 5;
     }
     $namelist -> printNames($dbconn);

   }else{
     echo "No connection to the database";
   }

   pg_close($dbconn);

?>
</body>
</html>
