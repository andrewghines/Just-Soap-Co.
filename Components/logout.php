<?php
    session_start();
    session_destroy();
    unset($_SESSION['userid']); 
    include "structure/header.php";

?>
    <main style="background-color: #d4f3f9;">
        <div class="container" style="background-color: #d4f3f9;">
            <div class="d-flex justify-content-evenly" style="flex-direction:column; align-items:center; margin:auto; height: 80vh; background-color: #d4f3f9;; text-align:center;">
                        <h3 style=" padding: 0px;">Logged Out</h3>
                        <div><h2>You have been logged out.</h2></div>
                        <br>
                        <a href="login.php">Login</a>

            </div>
        </div>
    </main>
<?php
    include "structure/footer.php";
?>