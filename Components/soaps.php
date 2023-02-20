<?php
    include "structure/header.php";
    include "../modules/product-search.php";
?>

    <main>
        
        <div class="d-flex flex-wrap" style="background-color: #d4f3f9; padding-bottom:20px; flex-direction: column; align-items:center;">
            <div class="row" style="padding-top: 10px; justify-content:space-evenly; text-align: center;">
                <h2>Soaps</h2>
                <form class="d-flex" role="search" id="soaps-form">
                    <input name="s" class="form-control" type="search" placeholder="Search" aria-label="Search" id="searchbar" style="margin:auto; width: 50vw;">
                </form>
                <?php
            if(isset($_GET['s'])){
                echo "<br><br><div style=\"width:720px\" class=\"card\">";
                echo "<h3 class=\"card-title\">Search Term: ". $_GET['s']."</h3>";
                $products = search_product($_GET['s']);
                //print_r($products);
                foreach($products as $product){
                    echo "<div class=\"card-text\"><a href=\"product.php?product_id=".$product[3]."\">".$product[0]. " - " . $product[1]. " - " . $product[2]."</a></div>";
                }
                echo "</div>";
            }
        ?>
            </div>
            <div class="d-flex flex-wrap justify-content-evenly" style="margin: auto; align-items:center; padding-top:20px;">
                <div class="col" style="padding-bottom: 20px; flex:none;">
                    <div class="card" style="width: 18rem; margin-left: 10px; margin-right:10px;;">
                        <img src='../Soap Image Assets/Folly Shores.jpg' alt='Folly Shores' class="card-img-top"/>
                        <div class="card-body" style="text-align:center;">
                            <h3 class="card-title">Folly Shores</h3>
                            <p class="card-text">$9.99</p>
                            <p class="card-text">Summer beach fun with a<br>hint of green apple.</p>
                            <a href="cart.php?add_prod_id=<?php echo find_product_id_by_name("Folly Shores"); ?>&add_prod_qty=1">
                                <button class="btn btn-primary" style="background-color: #323639; border: white solid 2px;">Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding-bottom: 20px; flex:none;">
                    <div class="card" style="width: 18rem; margin-left: 10px; margin-right:10px;">
                        <img src='../Soap Image Assets/Cucumber Melon.jpg' alt='Cucumber Melon' class="card-img-top"/>
                        <div class="card-body" style="text-align:center;">
                            <h3 class="card-title">Cucumber Melon</h3>
                            <p class="card-text">$9.99</p>
                            <p class="card-text">Smells like a<br>day at the spa.</p>
                            <a href="cart.php?add_prod_id=<?php echo find_product_id_by_name("Cucumber Melon"); ?>&add_prod_qty=1">
                            <button class="btn btn-primary" style="background-color: #323639; border: white solid 2px;">Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding-bottom: 20px; flex:none;">
                    <div class="card" style="width: 18rem; margin-left: 10px; margin-right:10px;">
                        <img src='../Soap Image Assets/Nautical Winds.jpg' alt='Nautical Winds' class="card-img-top"/>
                        <div class="card-body" style="text-align:center;">
                            <h3 class="card-title">Nautical Winds</h3>
                            <p class="card-text">$9.99</p>
                            <p class="card-text">Fresh nautical<br>scent.</p>
                            <a href="cart.php?add_prod_id=<?php echo find_product_id_by_name("Nautical Winds"); ?>&add_prod_qty=1">
                            <button class="btn btn-primary" style="background-color: #323639; border: white solid 2px;">Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-evenly" style="margin: auto;">
                <div class="col" style="padding-bottom: 20px; flex:none;">
                    <div class="card" style="width: 18rem; margin-left: 10px; margin-right:10px;">
                        <img src='../Soap Image Assets/Peppermint Lemongrass.jpg' alt='Peppermint Lemongrass' class="card-img-top" id="soap-img" style="width:286.4px; height:286.4px;"/>
                        <div class="card-body" style="text-align:center;">
                            <h3 class="card-title">Peppermint Lemongrass</h3>
                            <p class="card-text">$9.99</p>
                            <p class="card-text">Classic, clean scent.</p>
                            <a href="cart.php?add_prod_id=<?php echo find_product_id_by_name("Peppermint Lemongrass"); ?>&add_prod_qty=1">
                            <button class="btn btn-primary" style="background-color: #323639; border: white solid 2px;">Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding-bottom: 20px; flex:none;">
                    <div class="card" style="width: 18rem; margin-left: 10px; margin-right:10px;">
                        <img src='../Soap Image Assets\Peppermint Sandalwood.jpg' alt='Peppermint Sandalwood' class="card-img-top"/>
                        <div class="card-body" style="text-align:center;">
                            <h3 class="card-title">Peppermint Sandalwood</h3>
                            <p class="card-text">$9.99</p>
                            <p class="card-text">Peppermint with a light wood scent.</p>
                            <a href="cart.php?add_prod_id=<?php echo find_product_id_by_name("Peppermint Sandalwood"); ?>&add_prod_qty=1">
                            <button class="btn btn-primary" style="background-color: #323639; border: white solid 2px;">Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding-bottom: 20px; flex:none;">
                    <div class="card" style="width: 18rem; margin-left: 10px; margin-right:10px;">
                        <img src='../Soap Image Assets/Fresh Lavender.jpg' alt='Lavender' class="card-img-top"/>
                        <div class="card-body" style="text-align:center;">
                            <h3 class="card-title">Fresh<br>Lavender</h3>
                            <p class="card-text">$9.99</p>
                            <p class="card-text">Classic, fresh lavender.</p>
                            <a href="cart.php?add_prod_id=<?php echo find_product_id_by_name("Fresh Lavender"); ?>&add_prod_qty=1">
                            <button class="btn btn-primary" style="background-color: #323639; border: white solid 2px;">Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
                <div class="d-flex flex-wrap justify-content-evenly" style="margin: auto;">
                <div class="col" style="flex:none; padding-bottom: 20px;">
                    <div class="card" style="width: 18rem; margin-left: 10px; margin-right:10px;">
                        <img src='../Soap Image Assets/Coffee.jpg' alt='Coffee' class="card-img-top" id="soap-img" style="height:286.4px;"/>
                        <div class="card-body" style="text-align:center;">
                            <h3 class="card-title">Coffee</h3>
                            <p class="card-text">$9.99</p>
                            <p class="card-text">Coffee lovers rejoice!<br> *exfoliating*</p>
                            <a href="cart.php?add_prod_id=<?php echo find_product_id_by_name("Coffee"); ?>&add_prod_qty=1">
                            <button class="btn btn-primary" style="background-color: #323639; border: white solid 2px;">Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" style="flex:none; padding-bottom: 20px;">
                    <div class="card" style="width: 18rem; margin-left: 10px; margin-right:10px;">
                        <img src='../Soap Image Assets/Pine Tar.jpg' alt='Pine Tar' class="card-img-top"/>
                        <div class="card-body" style="text-align:center;">
                            <h3 class="card-title">Pine Tar</h3>
                            <p class="card-text">$9.99</p>
                            <p class="card-text">The great outdoors condensed into a bar of soap.</p>
                            <a href="cart.php?add_prod_id=<?php echo find_product_id_by_name("Pine Tar"); ?>&add_prod_qty=1">
                            <button class="btn btn-primary" style="background-color: #323639; border: white solid 2px;">Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col" style="flex:none; padding-bottom: 20px;">
                    <div class="card" style="width: 18rem; margin-left: 10px; margin-right:10px;">
                        <img src='../Soap Image Assets/Sweet Bourbon.jpg' alt='Pine Tar' class="card-img-top"/>
                        <div class="card-body" style="text-align:center;">
                            <h3 class="card-title">Sweet Bourbon</h3>
                            <p class="card-text">$9.99</p>
                            <p class="card-text">Sweet smelling musk with a splash of bourbon.</p>
                            <a href="cart.php?add_prod_id=<?php echo find_product_id_by_name("Sweet Bourbon"); ?>&add_prod_qty=1">
                            <button class="btn btn-primary" style="background-color: #323639; border: white solid 2px;">Add to Cart</button>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </main>
<?php
    include "structure/footer.php";
?>