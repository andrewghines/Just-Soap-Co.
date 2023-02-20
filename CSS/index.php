<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden; margin:0px; padding:0px; height:100%; width:100%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../CSS/styles.css'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Markazi+Text&display=swap" rel="stylesheet">
</head>
<body style="margin:0px; padding:0px;">
    <header style="padding:0px; margin: 0px;">
            <nav class="navbar navbar-expand-lg" style="background-color: #1EBBD7; height:15vh; margin: 0px; padding: 0px;">
                <div class="container-fluid" style="background-color: #1EBBD7;">
                    <a class="navbar-brand" href="#"><img src='../Soap Image Assets\logo-color-crop.png' alt="Logo" id='logo' class="navbar-brand" style="width:130px; height: auto;"/></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href='./index.php'><strong>Home</strong></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href='./about.php'>About</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href='./soaps.php'>Soaps</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href='./login.php'>Log In</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href='./cart.php'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    </header>
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
                                <img src='../Soap Image Assets/Folly_Shores.jpg' alt='Folly Shores' class="d-block" id="img" style="width: 90vw; max-width:850px; margin:auto;"/>
                                <div class="carousel-caption d-none d-md-block" style="bottom:auto;">
                                    <h3 style="color:#FFFFFF; -webkit-text-stroke: 1px black; -webkit-text-fill-color: white; font-size: 1.8rem; font-weight: bold; margin:auto;">Folly Shores</h3>
                                    <p style="color:#FFFFFF; -webkit-text-stroke: 1px black; -webkit-text-fill-color: white; font-size: 1.5rem; font-weight: bold; margin:auto;">$9.99</p>
                                    <p style="color:#FFFFFF; -webkit-text-stroke: 1px black; -webkit-text-fill-color: white; font-size: 1.5rem; font-weight: bold; margin:auto;">Summer beach fun with a<br>hint of green apple.</p>
                                    <button class="btn btn-primary" style="background-color: #1EBBD7; border: white solid 2px; width:150px; margin-top:10px;">View Item</button>
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
                                    <button class="btn btn-primary" style="background-color: #1EBBD7; border: white solid 2px; margin-top:10px;">View Item</button>
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
                                    <button class="btn btn-primary" style="background-color: #1EBBD7; border: white solid 2px; margin-top:10px;">View Item</button>
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
    <footer class="text-center text-white" style=" width:auto; height: 35vh; background-color: #323639; margin:0px; border-top:5px solid #FFFFFF;">
        <div class="container" width:100%;>
            <form style = "margin-top: 20px;">
                <label style="font-family: 'Markazi Text', serif;">Stay in the Loop!</label>
                <br>
                <input type='email' placeholder="Enter your Email"/>
                <input type='submit'/>
            </form>
        </div>
        <div class="row justify-content-between" style="margin-top:20px;">
            <div class="col">
                <p><strong>Contact Us</strong></p>
            </div>
            <div class="col">
                <p>250 Main St<p>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col">
                <p>justsoapco@email.com<p>
            </div>
            <div class="col">
                <p>City, State<p>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg>
            </div>
            <div class="col">
                <p>Zip<p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>