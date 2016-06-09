<?php
/*
Catarina Sörensen
Webbprogrammering
Mittuniversitetet
Konfigurationsfil för att koppla upp mot databasen.
Denna filen inkluderas där den behövs.
*/


//$conn_string = "host=localhost port=5432 dbname=myDb user=postgres password=91caso58";
$conn_string = "host=localhost port=3000 dbname=myDb user=postgres password=91caso58";

//$conn_string = "host= webblabb.miun.se port=5432 dbname=casr1500 user=casr1500 password=EWR8OLctY";
$dbconn = pg_connect($conn_string)
or die("Kunde inte koppla upp till databasen.");


?>
