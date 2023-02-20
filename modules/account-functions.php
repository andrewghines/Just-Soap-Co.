<?php 
function check_login($user, $password){
    $sql = "SELECT CUSTOMER_ENC_PASSWORD FROM SOAP_COMPANY.CUSTOMER WHERE CUSTOMER_LOGIN = '".esac($user)."'";
    $result = query($sql);
       
       
    $row = mysqli_fetch_row($result);
    $enc_password = "";
    if($row != null){
        $enc_password = $row[0];
    }else{
        return false;
    }
    
    
    //echo password_verify($password, $enc_password);
    if(password_verify($password, $enc_password)){
        session_reset();
        $_SESSION['userid'] = $user;
        return true;
    } else {
        return false;
    }
    
}

function register_customer($customer_login, $customer_email, $customer_password, $customer_first_name, $customer_last_name, $street_address, $city, $state, $zip, $country){
    $newid = create_customer($customer_login, $customer_email, password_hash($customer_password, PASSWORD_DEFAULT), $customer_first_name, $customer_last_name);
    create_address("Home", $newid, find_country_by_iso_2($country), $street_address, $city, $state, $zip);
}

function update_password($user, $password){
    $sql = "UPDATE SOAP_COMPANY.CUSTOMER SET CUSTOMER_ENC_PASSWORD = '".esac(password_hash($password, PASSWORD_DEFAULT))."'
    WHERE CUSTOMER_LOGIN = '".esac($user)."'";
    $result = query($sql);
}

function find_customer_id() {
    if(isset($_SESSION['userid'])){
        $sql = "SELECT CUSTOMER_ID FROM CUSTOMER WHERE CUSTOMER_LOGIN = \"".esac($_SESSION['userid'])."\"";
        $result = query($sql);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_row($result);
            return $row[0];
        } else {
            return -1;
        }
    } else {
        return -1;
    }
}

?>