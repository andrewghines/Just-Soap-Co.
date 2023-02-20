<?php
    include "structure/header.php";
?>
   <main style="width:100%;">
        <div id='container' style="background-color: #d4f3f9; width:100%;">
            <div class="container" style="margin-bottom:50px;">
                <div class="d-flex flex-wrap" style="height:60vh;justify-content:space-evenly; text-align:center;">
                    <img src='../Soap Image Assets/logo-no-background.png' alt='Logo' class="d-blockimg-fluid" style="max-width: 350px; min-width:200px; height:auto; margin:auto;"/>
                    <h3 style="margin:auto; padding:auto; width: 25vw; font-family: 'Markazi Text', serif; font-weight:bold;">ARTISANAL SOAPS HOMEMADE<br>WITH ORGANIC INGREDIENTS</h3>
                </div>
            </div>
        <div class="container" style="width:100%;">
            <div class="d-flex justify-content-center" style="background-color: #1EBBD7; text-align: center; height:10vh;">
                <h2 style="color:#FFFFFF; margin: auto; font-family: 'Markazi Text', serif; font-weight:bold;">Featured Items</h2>
            </div>
        </div>
        <div class="container" style="background-color: #323639; height: auto; width:100%; padding:0px;">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row" id="carousel-box">
                            <div class="d-flex" style="align-items:center;">
                                <img src='../Soap Image Assets/Folly Shores.jpg' alt='Folly Shores' class="d-block" id="img" style="width: 90vw; max-width:850px; margin:auto;"/>
                                <div class="carousel-caption d-none d-md-block" style="bottom:auto;">
                                    <h3 style="color:#FFFFFF; -webkit-text-stroke: 1px black; -webkit-text-fill-color: white; font-size: 1.8rem; font-weight: bold; margin:auto;">Folly Shores</h3>
                                    <p style="color:#FFFFFF; -webkit-text-stroke: 1px black; -webkit-text-fill-color: white; font-size: 1.5rem; font-weight: bold; margin:auto;">$9.99</p>
                                    <p style="color:#FFFFFF; -webkit-text-stroke: 1px black; -webkit-text-fill-color: white; font-size: 1.5rem; font-weight: bold; margin:auto;">Summer beach fun with a<br>hint of green apple.</p>
                                    <a href="product.php?product_id=<?php echo find_product_id_by_name("Folly Shores"); ?>">
                                    <button class="btn btn-primary" style="background-color: #1EBBD7; border: white solid 2px; width:150px; margin-top:10px;">View Item</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row" id="carousel-box">
                            <div class='d-flex' style="align-items:center;">
                                <img src='../Soap Image Assets/Nautical Winds.jpg' alt='Nautical Winds' class="d-block" id="img" style="width: 90vw; max-width:850px; margin:auto;"/>
                                <div class="carousel-caption d-none d-md-block" id="block" style="bottom:auto;">
                                    <h3 style="color:#FFFFFF; -webkit-text-stroke: 1px black; -webkit-text-fill-color: white; font-size:1.8rem; font-weight:bold; margin:auto;">Nautical Winds</h3>
                                    <p style="color:#FFFFFF; -webkit-text-stroke: 1px black; -webkit-text-fill-color: white; font-size:1.5rem; font-weight: bold; margin:auto;">$9.99</p>
                                    <p style="color:#FFFFFF; -webkit-text-stroke: 1px black; -webkit-text-fill-color: white; font-size:1.5rem; font-weight: bold; margin:auto;">Fresh nautical<br>scent.</p>
                                    <a href="product.php?product_id=<?php echo find_product_id_by_name("Nautical Winds"); ?>">
                                    <button class="btn btn-primary" style="background-color: #1EBBD7; border: white solid 2px; margin-top:10px;">View Item</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row" id="carousel-box">
                            <div class='d-flex' style="align-items:center;">
                                <img src='../Soap Image Assets/Cucumber Melon.jpg' alt='Cucumber Melon' class="d-block" id="img" style="width: 90vw; max-width:850px; margin:auto;"/>
                                <div class="carousel-caption d-none d-md-block" id="block" style="bottom:auto;">
                                    <h3 style="color:#FFFFFF; -webkit-text-stroke: 1px black; -webkit-text-fill-color: white; font-size: 1.8rem; font-weight:bold; margin:auto;">Cucumber Melon</h3>
                                    <p style="color:#FFFFFF; -webkit-text-stroke: 1px black; -webkit-text-fill-color: white; font-size:1.5rem; font-weight: bold; margin:auto;">$9.99</p>
                                    <p style="color:#FFFFFF; -webkit-text-stroke: 1px black; -webkit-text-fill-color: white; font-size:1.5rem; font-weight: bold; margin:auto;">Smells like a<br>day at the spa.</p>
                                    <a href="product.php?product_id=<?php echo find_product_id_by_name("Cucumber Melon"); ?>">
                                    <button class="btn btn-primary" style="background-color: #1EBBD7; border: white solid 2px; margin-top:10px;">View Item</button>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
        </div>
    </main>
<?php
    include "structure/footer.php";
?>