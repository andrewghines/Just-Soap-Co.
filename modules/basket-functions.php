<?php

function find_basket_status($basket_status_name) {
    $sql = "SELECT BASKET_STATUS_ID FROM BASKET_STATUS WHERE BASKET_STATUS_NAME = \"".esac($basket_status_name)."\"";
    $result = query($sql);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_row($result);
        return $row[0];
    } else {
        die("Basket status id error.  Please contact site administrator.");
    }
}

function find_payment_status($payment_status_name) {
    $sql = "SELECT PAYMENT_STATUS_ID FROM PAYMENT_STATUS WHERE PAYMENT_STATUS_NAME = \"".esac($payment_status_name)."\"";
    $result = query($sql);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_row($result);
        return $row[0];
    } else {
        die("Payment status id error.  Please contact site administrator.");
    }

}

function find_current_basket($customer_id) {
    if(isset($_SESSION['basketid'])){
        return $_SESSION['basketid'];
    } else {
        $sql = "SELECT * FROM BASKET A
        JOIN BASKET_STATUS B ON A.BASKET_STATUS_ID = B.BASKET_STATUS_ID AND B.BASKET_STATUS_NAME = \"NEW_BASKET\"
        WHERE A.CUSTOMER_ID = ".esac($customer_id);
        $result = query($sql);
        switch(mysqli_num_rows($result)){
            case 1:
                $row = mysqli_fetch_row($result);
                return $row[0];
                break;

            case 0:
                if(isset($_SESSION['userid'])){
                    $_SESSION['basketid'] = create_basket($customer_id);
                }else{
                    return -1;
                }
                break;

        
            default:
                die("Error finding cart.  Please contact site administrator.");
                break;
        }
    }
}

function find_purchase ($product_id, $basket_id){
    if(product_exists_in_basket($product_id, $basket_id)){
        $sql = "SELECT PURCHASE_ID FROM PURCHASE WHERE PRODUCT_ID = ".esac($product_id)." AND BASKET_ID = ".esac($basket_id);
        $result = query($sql);
        $row = mysqli_fetch_row($result);
        return $row[0];
    } else {
        return false;
    }
}

function product_exists_in_basket($product_id, $basket_id){
    $sql = "SELECT COUNT(*) FROM PURCHASE WHERE BASKET_ID = ".esac($basket_id)." and PRODUCT_ID = ".esac($product_id);
    $result = query($sql);
    $row = mysqli_fetch_row($result);
    switch ($row[0]) {
        case 0:
            return false;
        case 1:
            return true;
        default:
            die("Basket error.  Multiple Product entries");
    }
}

function find_product_id_in_basket($product_id, $basket_id){
    if(product_exists_in_basket($product_id, $basket_id)){
        $sql = "SELECT PURCHASE_ID FROM PURCHASE WHERE PRODUCT_ID = ".esac($product_id)." AND BASKET_ID = ".esac($basket_id);
        $result = query($sql);
        $row = mysqli_fetch_row($result);
        return $row[0];
    } else {
        return false;
    }
}

function find_product_id_by_name($product_name){
    $sql = "SELECT PRODUCT_ID FROM PRODUCT WHERE PRODUCT_NAME = '".esac($product_name)."'";
    $result = query($sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_row($result);
        return $row[0];
    } else {
        return false;
    }
}

function add_product_to_basket($product_id, $basket_id, $purchase_quanity) {
    if(!product_exists_in_basket($product_id, $basket_id)){
        create_purchase($product_id, $basket_id, $purchase_quanity);
    }
}

function change_product_quanity_in_basket($product_id, $basket_id, $product_quantity) {
    $sql = "UPDATE PURCHASE SET PURCHASE_QUANTITY = ".esac($product_quantity)." WHERE PRODUCT_ID = ".esac($product_id)." AND BASKET_ID = ".esac($basket_id);
    $result = query($sql);
}

function remove_product_from_basket($product_id, $basket_id) {
    delete_purchase(find_product_id_in_basket($product_id, $basket_id));
}

function clear_basket($basket_id) {
    $sql = "DELETE FROM PURCHASE WHERE BASKET_ID = ".esac($basket_id);
    query($sql);
}

function add_payment_to_basket($customer_id, $payment_type, $payment_amount, $payment_card_number) {
    $payment_id = create_payment($payment_type, $payment_amount, $payment_card_number);
    update_basket(find_current_basket($customer_id), $payment_id, find_basket_status("PROCESSING"));
}

function get_basket_contents($basket_id){
    $sql = "SELECT B.PRODUCT_ID, B.PRODUCT_NAME, A.PURCHASE_QUANTITY, B.PRODUCT_PRICE, FORMAT(B.PRODUCT_PRICE * A.PURCHASE_QUANTITY, 2) AS TOTAL_PRODUCT_PRICE FROM PURCHASE A
    JOIN PRODUCT B ON A.PRODUCT_ID = B.PRODUCT_ID WHERE BASKET_ID = ".esac($basket_id);
    $result = query($sql);
    if(mysqli_num_rows($result) > 0){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return false;
    }
}

function show_basket_contents_pretty($basket_id) {
    $basket_contents = get_basket_contents($basket_id);
    if(!$basket_contents){
        echo "<center>Your Cart is Empty.  Be sure you are logged in and browse our wonderful soaps!</center>";
        return;
    }
        echo "<br /><form action=cart.php>";
        echo "<table style=\"text-align: center; width: 60%; margin-left: 20%; margin-right: 20%\">";
        echo "<thead><tr><th></th><th>Product Name</th><th>Product Quantity</th><th>Product Price</th><th>Total Price</th><th>Update Quantity</th><th>Delete</th></tr></thead><tbody>";
        foreach($basket_contents as $i){
            echo "<tr><td><img src=\"../Soap Image Assets/".$i['PRODUCT_NAME'].".jpg\" alt='".$i['PRODUCT_NAME']."' width=50\" /></td>";
            echo "<td><div style=\"text-align:center\"><a href=\"product.php?product_id=".$i['PRODUCT_ID']."\">".$i['PRODUCT_NAME']."</a></div>";
            echo "<td>".$i['PURCHASE_QUANTITY']."</td>";
            echo "<td>".$i['PRODUCT_PRICE']."</td>";
            echo "<td>".$i['TOTAL_PRODUCT_PRICE']."</td>";
            echo "<td><input type=text name=prod_qty[".$i['PRODUCT_ID']."] /></td>";
            echo "<td><a href=\"cart.php?delete_prod_id=".$i['PRODUCT_ID']."\">Delete</a>";
        }
        echo "<tfooter><tr><td colspan=7>Cart Total: $". get_basket_total(find_current_basket(find_customer_id()))."</td></tr><tr><td colspan=7><br />Update Quantities <input type=submit /></td></tr></tfooter>";
        echo "</tbody></table></form>";
}

function get_basket_total($basket_id) {
    $basket_contents = get_basket_contents($basket_id);
    if(!$basket_contents) {
        return 0;
    }
    $sql = "SELECT FORMAT(SUM(PRODUCT_PRICE * PURCHASE_QUANTITY), 2)
    FROM BASKET A
    JOIN PURCHASE B ON A.BASKET_ID = B.BASKET_ID 
    JOIN PRODUCT C ON B.PRODUCT_ID = C.PRODUCT_ID 
    WHERE A.BASKET_ID = ".esac($basket_id);
    $result = query($sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_row($result);
        return $row[0];
    } else {
        return 0;
    }
}

/*function checkout_basket($basket_id, $payment_id){
    update_basket($basket_id, $payment_id, find_basket_status("CHECKOUT"));
}*/

function find_all_customer_baskets($customer_id) {
    $sql = "SELECT BASKET_ID, BASKET_STATUS_ID FROM BASKET WHERE CUSTOMER_ID = ".esac($customer_id);
    $result = query($sql);
    if(mysqli_num_rows($result) > 0){
        return mysqli_fetch_all($result);
    } else {
        return false;
    }
}

find_current_basket(find_customer_id());

?>