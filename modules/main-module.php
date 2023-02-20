<?php



function customError($error_num, $error_msg) {
    die("<b>Error encountered.  Please Contact the site administrator</b>");
}


//set_error_handler("customError", E_ALL);

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "database-functions.php";
include "string-replace-functions.php";

//Include the crud operations.
foreach (scandir("../modules/crud") as $filename) {
    //if(!str_contains($filename, ".")){
        if(substr($filename, 0, 1) != "."){
            include "../modules/crud/".$filename;
            //echo $filename;
        }
    //}
}

include "account-functions.php";
include "basket-functions.php";
if (!isset($GLOBALS['mysqli_conn'])) {
    die("Connection failed: " . mysqli_connect_error());
}
?>