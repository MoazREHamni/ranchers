
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ranchers.css">
    <!-- .........Bootstrap link.............. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ....................ICON LINK......... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ....................GOOGLE FOnTS......... -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Open+Sans:wght@300&family=Phudu&family=Roboto:ital,wght@0,100;0,500;1,100&display=swap"
        rel="stylesheet">
    <title>Good Fellas Eat Here - Ranchers</title>
    <link rel="shortcut icon" href="logo/footer-logo.png" type="image/x-icon">
</head>

<body>

<?php include('partials/_dbconnected.php'); ?>

  <?php include('partials/_header.php'); ?>

    <!-- ....................HOME SECTION................ -->

    <div class="container-fluid m-0 p-0 " id="home">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner w-100">
                <div class="carousel-item active">
                    <img src="background image/Banner-2-Desktop.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="background image/bg-4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="background image/bg-3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- ..................... FEATURED DEAL...................... -->
    <div class="container-fluid  pb-5" style="background-color: black;">
        <h1 class="text-warning text-center pt-5 fw-bolder">FEATURED DEALS</h1>
        <div class="container">


            <div class="row mt-4">
                <div class="col-md-4 col-sm-12 ">
                    <div class="card border-0 bg-dark">
                        <img src="deals/deal-1.jpeg" class="card-img-top rounded-top rounded-bottom img-fluid"
                            alt="...">
                        <div class="card-body text-center ">
                            <h5 class="card-title fw-bold text-warning">BEIF BURGER</h5>
                            <p class="card-text  text-light">Time: 15 - 20 Minutes | Services: 1</p>
                            <p class="fw-bold fs-4 text-light">$10.50 <strong
                                    class="fw-bold text-secondary fs-5 text-decoration-line-through">$11.70</strong>
                            </p>
                            <hr style="opacity: 0.1;"">
       <div> <button class=" btn-1 mt-2">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 ">
                <div class="card border-0 bg-dark">
                    <img src="deals/deal-2.jpg" class="card-img-top rounded-top rounded-bottom img-fluid" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-warning">CHIKEN BURGER</h5>
                        <p class="card-text text-light ">Time: 30 - 45 Minutes | Services: 1</p>
                        <p class="fw-bold fs-4 text-danger text-light">$9.20 <strong
                                class="fw-bold text-secondary fs-5 text-decoration-line-through">$10.50</strong>
                            <hr style="opacity: 0.1;"">  
       <div> <button class=" btn-1 mt-2">Order Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 ">
            <div class="card border-0 bg-dark">
                <img src="deals/deal-1.jpeg" class="card-img-top rounded-top rounded-bottom img-fluid" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold text-warning">BEIF BURGER</h5>
                    <p class="card-text text-light">Time: 10 - 15 Minutes | Services: 1</p>
                    <p class="fw-bold fs-4 text-danger text-light">$12.50 <strong
                            class="fw-bold text-secondary fs-5 text-decoration-line-through">$13.20</strong>
                        <hr style="opacity: 0.1;">
                    <div> <button class="btn-1 mt-2">Order Now</button></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>




    <!-- ....................AD NUMBER !...................... -->


    <div class="container-fluid pt-3 pb-3" id="bg-1">

        <div class="row  ">
            <div class="col-md-2 col-sm-12 d-flex justify-content-center ">
                <img src="logo/footer-logo.png" class="img-fluid " alt="">
            </div>
            <div class="col-md-8 col-sm-12 text-center my-auto">
                <h3 class="text-warning fs-4">BRINGING ON YOUR FAVOURITES FROM RANCH AT YOUR DOORSTEP</h3>
                <p class="text-light mt-0 fs-4">Order Now And Munch With Few Clicks</p>
            </div>
            <div class="col-md-2 col-sm-12 text-center text-md-start my-auto">
                <button class=" btn-2 mb-2">Order Now</button>
            </div>
        </div>
    </div>


     <!-- ......................M    E    N     U ....................... -->

    <div class="container-fluid bg-dark">
        <h1 class="text-warning text-center pt-5 fw-bolder fs-1">HAVE A BITE OF OUR BEST</h1>
        <div class="container pb-5">
            <div class="row d-flex mt-5">
                <div class=" col-lg-3 col-md-6 col-sm-12">
                    <img src="bite/bite-1.png" class="img-fluid" alt="">
                    <p class="fw-bold text-light text-center pt-2">BIG BANG</p>
                    <div class="d-flex justify-content-center">
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-12">
                    <img src="bite/bite-2.png" class="img-fluid" alt="">
                    <p class="fw-bold text-light text-center pt-2">TEXAS JACK</p>
                    <div class="d-flex justify-content-center">
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-12">
                    <img src="bite/bite-3.png" class="img-fluid" alt="">
                    <p class="fw-bold text-light text-center pt-2">FRIZZA</p>
                    <div class="d-flex justify-content-center">
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-12">
                    <img src="bite/bite-4.png" class="img-fluid" alt="">
                    <p class="fw-bold text-light text-center pt-2">RANCHEESE</p>
                    <div class="d-flex justify-content-center">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- ..........................AD NUMBER 2.................... -->


    <div class="container-fluid" id="last">
        <div class="row pt-5 last-img">
            <div class="col-md-6 col-sm-12 text-center text-md-end fs-1 my-auto me-5 fw-bolder">
                <h4 class="text-light ">SURE TO KEEP Y'LL</h4>
                <h1 class="text-light ">COMING BACK</h1>
                <h1 class="text-light ">FOR MORE</h1>
            </div>
            <div class="col-md-3 col-sm-12 mt-5 d-flex justify-content-center"><img
                    src="logo/frizza-compress-768x758-1-1.webp" alt="" width="350px" class="img-fluid"></div>
            <div class="col-3"></div>
        </div>
    </div>







    <!-- ,...................................CONTACT,............................... -->




   
    <?php include('contact.php'); ?>
    <?php include('partials/_footer.php'); ?>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>
