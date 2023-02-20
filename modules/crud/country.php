<?php
// Create country
function create_country($country_name, $country_iso_2, $country_iso_3) {
    $sql = "INSERT INTO COUNTRY (country_name, country_iso_2, country_iso_3)
    VALUES ('".esac($country_name)."', '".esac($country_iso_2)."', '".esac($country_iso_3)."')";
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

// Read country
function read_country($country_id) {
    $sql = "SELECT * FROM COUNTRY WHERE country_ID = ".esac($country_id);
    $result = query($sql);
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}

// Update country
function update_country($country_id, $country_name, $country_iso_2, $country_iso_3) {
    $sql = "UPDATE COUNTRY SET country_name = '".esac($country_name)."', country_iso_2 = '".esac($country_iso_2)."', 
    country_iso_3 = '".esac($country_iso_3)."' WHERE country_ID = ".esac($country_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

// Delete country
function delete_country($country_id) {
    $sql = "DELETE FROM COUNTRY WHERE country_ID = ".esac($country_id);
    if (query($sql)) {
        return true;
    } else {
        return false;
    }
}

function find_country_by_iso_2($isocode){
    $sql = "SELECT COUNTRY_ID FROM COUNTRY WHERE COUNTRY_ISO_2 = '".esac($isocode)."'";
    $result = query($sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_row($result);
        return $row[0];
    } else {
        return "";
    }
}

function get_countries() {
    $sql = "SELECT * FROM COUNTRY";
    $result = query($sql);
    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return array();
    }
}

?>
