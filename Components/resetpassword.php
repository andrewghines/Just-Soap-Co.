<?php
if(!isset($_POST['password'])){
 header("Location:index.php");
}
include "structure/header.php";
update_password($_SESSION['userid'], $_POST['password']);
?>
    <main style="background-color: #000000;">
        <div class="container" style="background-color: #000000;">
            <div class="d-flex justify-content-evenly" style="flex-direction:column; align-items:center; margin:auto; height: 80vh; background-color: #000000; text-align:center;">
                        <h3 style="color: #FFFFFF; padding: 0px;">Password Reset</h3>
                        <div><h2>Your password has been updated.</h2></div>
                        <br>
                        <a href="account.php">Account</a>

            </div>
        </div>
    </main>
<?php
    include "structure/footer.php";
?>