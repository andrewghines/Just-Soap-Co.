<?php

// Create payment
function create_payment($payment_type, $payment_amount, $payment_card_number) {
    global $mysqli_conn;
    $sql = "INSERT INTO PAYMENT (payment_type, payment_status_id, payment_amount, payment_card_number)
    VALUES ('".esac($payment_type)."', (SELECT PAYMENT_STATUS_ID FROM PAYMENT_STATUS WHERE PAYMENT_STATUS_NAME = 'NEW_PAYMENT'), '".esac($payment_amount)."', '".esac($payment_card_number)."')";
    if (query($sql)) {
        return mysqli_insert_id($mysqli_conn);
    } else {
        return false;
    }
}

// Read payment
function read_payment($payment_id) {
    $sql = "SELECT * FROM PAYMENT WHERE payment_ID = ".esac($payment_id);
    $result = query($sql);
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}

// Update payment
function update_payment($payment_id, $payment_type, $payment_status_id, $payment_amount, $payment_card_number) {
    $sql = "UPDATE PAYMENT SET payment_type = '".esac($payment_type)."', payment_status_id = '".esac($payment_status_id)."', payment_amount = '".esac($payment_amount)."', payment_card_number = '".esac($payment_card_number)."'
    WHERE payment_ID = ".esac($payment_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

// Delete payment
function delete_payment($payment_id) {
    $sql = "DELETE FROM PAYMENT WHERE payment_ID = ".esac($payment_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

?>
