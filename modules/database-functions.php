<?php
require "database-settings.php";

// Connecting to the database
$mysqli_conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

// escape wrapper
function esac($text){
    return mysqli_escape_string($GLOBALS['mysqli_conn'], $text);
}

function query($sql) {
    return mysqli_query($GLOBALS['mysqli_conn'], $sql);
}

?>