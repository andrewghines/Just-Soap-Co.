<?php

// Create address
function create_address($address_type, $customer_id, $country_id, $address_street_address, $address_city, $address_state, $address_zip) {
    $sql = "INSERT INTO ADDRESS (address_type, customer_id, country_id, address_street_address, address_city, address_state, address_zip)
    VALUES ('".esac($address_type)."', '".esac($customer_id)."', '".esac($country_id)."', '".esac($address_street_address)."', '"
    .esac($address_city)."', '".esac($address_state)."', '".esac($address_zip)."')";
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

// All Customer Address
/*function read_all_address($customer_id) {
    global $mysqli_conn;
    $sql = "SELECT * FROM address WHERE customer_id = $customer_id";
    $result = mysqli_query($mysqli_conn, $sql);
    $fullresult[] = null;
    if (mysqli_num_rows($result) > 0) {
        while($fullresultmys)
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}*/

// Read address
function read_address($address_type, $customer_id) {
    $sql = "SELECT * FROM ADDRESS WHERE address_type = '".esac($address_type)."' and customer_id = ".esac($customer_id);
    $result = query($sql);
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}

// Update address
function update_address($address_type, $customer_id, $address_name, $address_iso_2, $address_iso_3) {
    $sql = "UPDATE ADDRESS SET address_name = '".esac($address_name)."', address_iso_2 = '".esac($address_iso_2)."', address_iso_3 = '".esac($address_iso_3)."' 
    WHERE address_type = '".esac($address_type)."' and customer_id = ".esac($customer_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

// Delete address
function delete_address($address_type, $customer_id) {
    $sql = "DELETE FROM ADDRESS WHERE address_type = '".esac($address_type)."' and customer_id = ".esac($customer_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

?>
