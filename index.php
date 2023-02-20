<?php
session_start();
$dir = "Components";
$files = scandir($dir);
$page = "index";

function not_found() {
    header('HTTP/1.0 404 Not Found');
    ?>
    404 Error.
    <?php
    flush();
    sleep(1);
    die;
}

if(isset($_GET['page'])){
    if(preg_match("/\./", $_GET['page']) == 1){
        //Should go to an error page.
        //$page = "index";
        not_found();
    } else {
        $page = $_GET['page'] . ".php";
    }
    
}
if(in_array($page, $files, false)){
    include "./Components/" . $page;
    ?>
    ok
    <?php
}
if(isset($_SESSION['USER'])){

}

?>