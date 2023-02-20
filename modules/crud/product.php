<?php

// Create product
function create_product($product_name, $product_description, $product_price) {
    global $mysqli_conn;
    $sql = "INSERT INTO PRODUCT (product_name, product_description, product_price)
    VALUES ('".esac($product_name)."', '".esac($product_description)."', '".esac($product_price)."')";
    if (query($sql)) {
        return mysqli_insert_id($mysqli_conn);
    } else {
        return -1;
    }
}

// Read product
function read_product($product_id) {
    $sql = "SELECT * FROM PRODUCT WHERE PRODUCT_ID = ".esac($product_id);
    $result = query($sql);
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}

// Update product
function update_product($product_id, $product_name, $product_description, $product_price) {
    $sql = "UPDATE PRODUCT SET product_name = '".esac($product_name)."', product_description = '".esac($product_description)."',
    product_price = '".esac($product_price)."' WHERE product_ID = ".esac($product_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

// Delete product
function delete_product($product_id) {
    $sql = "DELETE FROM PRODUCT WHERE product_ID = ".esac($product_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

?>
