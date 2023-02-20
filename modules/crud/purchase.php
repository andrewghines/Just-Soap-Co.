<?php

// Create purchase
function create_purchase($product_id, $basket_id, $purchase_quantity) {
    global $mysqli_conn;
    $sql = "INSERT INTO PURCHASE (product_id, basket_id, purchase_quantity)
    VALUES (".esac($product_id).", ".esac($basket_id).", ".esac($purchase_quantity).")";
    if (query($sql)) {
        return mysqli_insert_id($mysqli_conn);
    } else {
        return false;
    }
}

// Read purchase
function read_purchase($purchase_id) {
    $sql = "SELECT * FROM PURCHASE WHERE purchase_ID = ".esac($purchase_id);
    $result = query($sql);
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}


// Get List of purchases for a basket 
//TODO

// Update purchase
function update_purchase($purchase_id, $product_id, $basket_id, $purchase_quanity) {
    $sql = "UPDATE PURCHASE SET product_id = ".esac($product_id).", basket_id = ".esac($basket_id).", purchase_quanity = ".esac($purchase_quanity)
    ."WHERE purchase_ID = ".esac($purchase_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

// Delete purchase
function delete_purchase($purchase_id) {
    $sql = "DELETE FROM PURCHASE WHERE purchase_ID = ".esac($purchase_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

?>
