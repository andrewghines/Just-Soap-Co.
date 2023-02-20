<?php

// Create customer
function create_customer($customer_login, $customer_email, $customer_enc_password, $customer_first_name, $customer_last_name) {
    global $mysqli_conn;
    $sql = "INSERT INTO CUSTOMER (CUSTOMER_LOGIN, CUSTOMER_EMAIL, CUSTOMER_ENC_PASSWORD, CUSTOMER_FIRST_NAME, CUSTOMER_LAST_NAME)
    VALUES ('".esac($customer_login)."', '".esac($customer_email)."', '".esac($customer_enc_password)."', 
    '".esac($customer_first_name)."', '".esac($customer_last_name)."')";
    if (query($sql)) {
        return mysqli_insert_id($mysqli_conn);
    } else {
        return -1;
    }
}

// Read customer
function read_customer($customer_id) {
    $sql = "SELECT * FROM CUSTOMER WHERE CUSTOMER_ID = ".esac($customer_id);
    $result = query($sql);
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}

// Update customer
function update_customer($customer_id, $customer_login, $customer_email, $customer_enc_password, $customer_first_name, $customer_last_name) {
    $sql = "UPDATE CUSTOMER SET CUSTOMER_LOGIN = '".esac($customer_login)."', CUSTOMER_EMAIL = '".esac($customer_email)."', 
    CUSTOMER_ENC_PASSWORD = '".esac($customer_enc_password)."', CUSTOMER_FIRST_NAME = '".esac($customer_first_name)."', 
    CUSTOMER_LAST_NAME = '".esac($customer_last_name)."' WHERE CUSTOMER_ID = ".esac($customer_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

// Delete customer
function delete_customer($customer_id) {
    $sql = "DELETE FROM CUSTOMER WHERE CUSTOMER_ID = ".esac($customer_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

?>
