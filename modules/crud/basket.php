<?php

// Create basket
function create_basket($customer_id) {
    global $mysqli_conn;
    $sql = "INSERT INTO BASKET (customer_id, basket_create_date, basket_status_id)
    VALUES ('".esac($customer_id)."', NOW(), (SELECT BASKET_STATUS_ID FROM BASKET_STATUS WHERE BASKET_STATUS_NAME = 'NEW_BASKET'))";
    if (query($sql)) {
        return mysqli_insert_id($mysqli_conn);
    } else {
        return false;
    }
}

// Read basket
function read_basket($basket_id) {
    $sql = "SELECT * FROM BASKET WHERE basket_id = ".esac($basket_id);
    $result = query($sql);
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}

// Update basket 
function update_basket($basket_id, $payment_id, $basket_status_id) {
    $sql = "UPDATE BASKET SET payment_id = '".esac($payment_id)."', basket_status_id = '".esac($basket_status_id)."'
    WHERE basket_id = ".esac($basket_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

// Delete basket
function delete_basket($basket_id) {
    $sql = "DELETE FROM BASKET WHERE basket_id = ".esac($basket_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

?>
