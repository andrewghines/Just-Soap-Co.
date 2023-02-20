<?php
function search_product($searchtext){
    $searchtext = esac($searchtext);
    $sql = "SELECT I.PRODUCT_NAME, I.PRODUCT_DESCRIPTION, I.PRODUCT_PRICE, I.PRODUCT_ID,
    MATCH (I.PRODUCT_NAME, I.PRODUCT_DESCRIPTION)
    AGAINST ('$searchtext' IN NATURAL LANGUAGE MODE) score
    FROM PRODUCT I
    WHERE MATCH (I.PRODUCT_NAME, I.PRODUCT_DESCRIPTION)
    AGAINST ('$searchtext' IN NATURAL LANGUAGE MODE)
    order by score desc";
    $result = query($sql);
    return mysqli_fetch_all($result);
}

?>