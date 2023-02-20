<?php
session_start();
if(isset($_SESSION['userid'])){
    include_once "../modules/main-module.php";
    header("Location:account.php");
}
if(isset($_POST['username'])){
    include_once "../modules/main-module.php";
    $loginstatus = check_login($_POST['username'], $_POST['password']);
}
if(isset($loginstatus)) {
    if($loginstatus){
        header("Location:index.php");
    }
}
    include "structure/header.php";

?>
    <main style="width:100%;">
        <div id='container' style="background-color: #d4f3f9; width:100%;">
            <div class="d-flex justify-content-evenly" style="flex-direction:column; align-items:center; margin:auto; height: 80vh; background-color: #d4f3f9; text-align:center;">
                        <h3 style="padding: 0px;">Log In</h3>
                        <?php

                            if(!isset($_POST['username'])){
                        ?>
                        <form method="POST">
                            <label for='username'>Username</label>
                            <br>
                            <input type='text' name='username' required/>
                            <br>
                            <label for='password'>Password</label>
                            <br>
                            <input type='password' name='password' required/>
                            <br>
                            <br>
                            <input type='submit' value='Submit'/>
                        </form>
                        <?php
                            }else{
                                if($loginstatus){
                                    echo "Logged in.";
                                }else {
                                    echo "Please try again.";
                                }
                            }
                        ?>
                <div class="row">
                    <div class="col" style="text-align:center; margin-top: 20px;">
                        <a href='./createAccount.php'>Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    include "structure/footer.php";
?>