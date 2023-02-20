<?php
    include "structure/header.php";
    if(isset($_SESSION['userid'])){
    if(isset($_GET['add_prod_id']) && isset($_GET['add_prod_qty'])){
        $customer_id = find_customer_id();
        add_product_to_basket($_GET['add_prod_id'], find_current_basket($customer_id), $_GET['add_prod_qty']);
    }

    if(isset($_GET['delete_prod_id'])){
        $customer_id = find_customer_id();
        remove_product_from_basket($_GET['delete_prod_id'], find_current_basket($customer_id));
    }

    if(isset($_GET['prod_qty'])){
        $prod_ids = $_GET['prod_qty'];
        foreach($prod_ids as $prod_id => $qty){
            if($qty){
                change_product_quanity_in_basket($prod_id, find_current_basket(find_customer_id()), $qty);
            }
        }
    }
}
?>
    <main style="width: 100%; text-align: center;">
        <div id="container" class="flex-wrap" style="min-height: 500px; background-color: #d4f3f9; text-align:center; width: 100%;">
            <div class="row" text-><h2 style="margin-top: 80px;">Shopping Cart</h2>
            <br />
            <?php show_basket_contents_pretty(find_current_basket(find_customer_id())); ?>
            <p><br />
            <?php 
                if(isset($_SESSION['userid'])){
                    $basket_contents = get_basket_contents(find_current_basket(find_customer_id()));
                    if($basket_contents) {
                    ?>
            <h2>Checkout</h2>
                <form action="checkout.php" method="POST">
                    <label for="payment_type">Payment Type</label>
                    <select name="payment_type">
                        <option value="Visa">Visa</option>
                        <option value="Master Card">Master Card</option>
                        <option value="Discover">Discover</option>
                    </select>
                    <label for="payment_card_number">Card Number</label>
                    <input name="payment_card_number" />
                    <input type="submit" value="Checkout" />
                </form>
                <?php
                    }
                }
                ?>
            </p>
</div>
    </main>
<?php
    include "structure/footer.php";
?>