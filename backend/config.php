<?php

#### TODO
//Hernoem dit bestand naar 'config.php' en vul jouw eigen database-gegevens in.
//Deze config wordt hierna _niet_ meegestuurd naar je groepsgenoten. Zo kan iedereen zijn eigen wachtwoord, etc. invullen.

$dbHost = 'localhost';
$dbName = 'c2-codecamp';
$dbUser = 'root';
$dbPass = '';

//De url waarop jouw project staat. Géén slash aan het einde.
$base_url = 'http://localhost/C2-Codecamp';

// $dbHost = 'rdbms.strato.de';
// $dbName = 'dbu1409132';
// $dbUser = 'dbs1889372';
// $dbPass = 'dki9majz2004';
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
// Check connection
if (mysqli_connect_errno())
  echo "Failed to connect to MySQL: " . mysqli_connect_error();		