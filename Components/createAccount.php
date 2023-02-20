<?php
    include "structure/header.php";
?>
    <main style="background-color: #d4f3f9;">
    <div class="container" style="background-color: #d4f3f9;">
        <div class="d-flex justify-content-evenly" style="flex-direction:column; align-items:center; margin:auto; height: 80vh; background-color: #d4f3f9; text-align:center;">
            <h3 style="color: #000000;">Create an Account</h3>
            <?php
                if(!isset($_POST['username'])){
            ?>
            <form method="POST">
                <label for='name' style="color:#000000;">Username</label>
                <br>
                <input type='text' name='username' required/>
                <br>

                <label for='email' style="color:#000000;">Email</label>
                <br>
                <input type='text' name='useremail' required/>
                <br>

                <label for='userpassword' style="color:#000000;">Password</label>
                <br>
                <input type='password' name='userpassword' required/>
                <br>

                <label for='firstname' style="color:#000000;">First Name</label>
                <br>
                <input type='text' name='firstname' required/>
                <br>

                <label for='lastname' style="color:#000000;">Last Name</label>
                <br>
                <input type='text' name='lastname' required/>
                <br>

                <label for='streetaddress' style="color:#000000;">Street Address</label>
                <br>
                <input type='text' name='streetaddress' required/>
                <br>

                <label for='city' style="color:#000000;">City</label>
                <br>
                <input type='text' name='city' required/>
                <br>

                <label for='state' style="color:#000000;">State</label>
                <br>
                <input type='text' name=state' required/>
                <br>

                <label for='zip' style="color:#000000;">Zip Code</label>
                <br>
                <input type='text' name='zip' required/>
                <br>

                <label for='country' style="color:#000000;">Country</label>
                <br>
                <select name='country' style='width: 150px'>
                <?php
                    $countries = get_countries();
                    foreach($countries as $country){
                        echo "<option value=\"".$country['COUNTRY_ISO_2']."\">".$country['COUNTRY_NAME']."</option>";
                    }
                ?>
                </select>
                <br>
                <a href='./index.php'><input type='submit' value='Submit' style="margin-top:20px;"/></a>
            </form>
            <?php
                } else {
                    $username = $_POST['username'];
                    $useremail = $_POST['useremail'];
                    $userpassword = $_POST['userpassword'];
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $streetaddress = $_POST['streetaddress'];
                    $city = $_POST['city'];
                    $state = $_POST['state'];
                    $zip = $_POST['zip'];
                    $country = $_POST['country'];
                    register_customer($username, $useremail, $userpassword, $firstname, $lastname, $streetaddress, $city, $state, $zip, $country);
                    ?>
                        <br />Account Created.  Please login.
                        <br /><a href="login.php">Login</a>
                    <?php
                }
            ?>
        </div>
    </div>
    </main>
<?php
    include "structure/footer.php";
?>