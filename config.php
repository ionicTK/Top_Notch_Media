<?php
/* Database credentials. */
define('DB_SERVER', '159.89.81.109');
define('DB_USERNAME', 'octane');
define('DB_PASSWORD', 'Zimbo_29!');
define('DB_NAME', 'newMail');
 
/* Attempt to connect to database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
