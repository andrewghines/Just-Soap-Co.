<?php
    include "structure/header.php";
    $product = read_product($_GET['product_id']);
?>
    <main style="width:100%; background-color: #d4f3f9;">
        <div class="container" style="background-color: #d4f3f9; width:100%; margin:auto;">
            <div class="row">
                <div class="col" style="margin:auto; text-align:center; margin:auto;">
                    <div class="d-flex" style="margin:auto; align-items:center;">
                        <img src='../Soap Image Assets/<?php echo $product['PRODUCT_NAME']; ?>.jpg' alt='Logo' class="img-fluid" style="width: 35vw; min-width: 300px; margin:auto; border: 2px solid white;"/>
                    </div>
                </div>
                <div class="col" style="margin:auto; text-align:center; margin:auto;">
                    <p style="margin:auto; color: white;"><h3><?php echo $product['PRODUCT_NAME']." - ".$product['PRODUCT_PRICE'];?></h3>
                    <?php echo $product['PRODUCT_DESCRIPTION']; ?>
                <br /><br />
                <a href="cart.php?add_prod_id=<?php echo $product['PRODUCT_ID']; ?>&add_prod_qty=1">
                            <button class="btn btn-primary" style="background-color: #323639; border: white solid 2px;">Add to Cart</button>
                            </a>
                </p>

                </div>
            </div>
        </div>
    </main>
<?php
    include "structure/footer.php";
?>