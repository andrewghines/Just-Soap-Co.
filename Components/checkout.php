<?php
    include "structure/header.php";
    if(!isset($_POST['payment_type'])){
        echo "You need to have an active cart";
    }else {
?>
    <main style="background-color: #d4f3f9;">
        <div class="container" style="background-color: #d4f3f9;">
            <div class="d-flex justify-content-evenly" style="flex-direction:column; align-items:center; margin:auto; height: 80vh; background-color: #d4f3f9;; text-align:center;">
                        <h3 style=" padding: 0px;">Checkout</h3>
                        <div><h2>You have been checked out.  Your <?php echo $_POST['payment_type']; ?> will be charged $<?php echo get_basket_total((find_current_basket(find_customer_id()))) ?>.</h2></div>
                        <br />Thank you for your purchase!
                        <br />

            </div>
        </div>
    </main>
<?php
    }
    add_payment_to_basket(find_customer_id(), $_POST['payment_type'], get_basket_total((find_current_basket(find_customer_id()))), $_POST['payment_card_number']);
    include "structure/footer.php";
?>