<?php
    include "structure/header.php";

?>
    <main style="background-color: #d4f3f9;">
        <div class="container" style="background-color: #d4f3f9;">
            <div class="d-flex justify-content-evenly" style="flex-direction:column; align-items:center; margin:auto; height: 80vh; background-color: #d4f3f9;; text-align:center;">
                        <h3 style="color: #000000; padding: 0px;">Log In</h3>
                        <?php

                            if(isset($_SESSION['userid'])){
                        ?>
                        <div><h2>Welcome <?php echo $_SESSION['userid']; ?></h2></div>
                        <p><h3>Previous Orders</h3></p>
                        <table><thead><th>Basket id</th><th>Basket Price</th></thead><tbody>
                        <?php
                            $basket_ids = find_all_customer_baskets(find_customer_id());
                            foreach($basket_ids as $basket_id){
                                if($basket_id[1] != find_basket_status("NEW_BASKET")){
                                    echo "<tr><td>".$basket_id[0] . "</td><td>" . get_basket_total($basket_id[0]). "</td></tr>";
                                }
                            }
                        ?>
                        </tbody></table>
                        <form method="POST" action="resetpassword.php">
                            <label for='reset' style="color: #000000;">Reset Password</label>
                            <br>
                            <input type='password' name='password' required/>
                            <br>
                            <br>
                            <input type='submit' value='Submit'/>
                        </form>
                        <br>
                        <a href="logout.php">Logout</a>
                        <?php
                            }else{
                                echo "Please log in.";
                            }
                        ?>
            </div>
        </div>
    </main>
<?php
    include "structure/footer.php";
?>