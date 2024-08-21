<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ranchers.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Open+Sans:wght@300&family=Phudu&family=Roboto:ital,wght@0,100;0,500;1,100&display=swap"
        rel="stylesheet">
    <!-- AOS Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <title>Good Fellas Eat Here - Ranchers</title>
    <link rel="shortcut icon" href="logo/footer-logo.png" type="image/x-icon">
    <style>
        .about-sec {
    background-image: url('background image/bg-13.jfif');
    min-height: 500px;
    min-width: 100vw;
    background-size: cover;
    background-position: center;
    content: "";
    z-index: -1;
    opacity: 0.8;
}
    </style>
</head>

<body class="bg-dark">

    <?php include('partials/_dbconnected.php'); ?>

    <?php include('partials/_header.php'); ?>

    <!-- Home Section -->
    <div class="container-fluid p-0">
        <img src="background image/bg-8.png" class="img-fluid w-100"  data-aos="fade-left"alt="">
    </div>

    <!-- Story Section -->
    <div class="container-fluid bg-dark">
        <div class="container">
            <h1 class="text-warning text-center pt-5 fs-1 pb-2 fw-bolder"> A TALE UNTOLD</h1>
            <p class="text-center text-light" data-aos="fade-left">
                One night aftr’ a long day ov’ showdowns, a couple of cowboys came together to cook up sum monstrous burgers
                to fill up their empty bellies. Texas Jack, one of them, said to ye others “I want meself a meal like this
                every single day!”. Bill, who was cookin’ up the finger licking meat thought why not? So, he started cooking
                up the biggest, messiest and mightiest burgers the town had ever devoured!
            </p>
            <p class="text-center text-light mt-2 pb-5" data-aos="fade-right">
                And with this came “Ranchers”, the ranch where all cowboys came after a hard day to re-fuel themselves with
                the juiciest and meatiest burgers in all of town.
            </p>
        </div>
    </div>
    <div class="container-fluid bg-dark p-0 m-0">
        <div class="container">
            <h1 class="text-warning text-center  fs-1  fw-bolder"> Why we are irresistible?</h1>
            <h1 class="text-light text-center  fs-5 pt-2 fw-bold">No cowboy has ever gone back unsatisfied from the Ranch.</h1>
           
        </div>

        <div class="row mt-5 pb-5">
            <div class="col-4"><img src="background image/bg-9.png" data-aos="fade-up-left" class="img-fluid" alt=""></div>
            <div class="col-4"><img src="background image/bg-10.png" data-aos="fade-up-left" class="img-fluid" alt=""></div>
            <div class="col-4"><img src="background image/bg-11.png" data-aos="fade-up-left" class="img-fluid" alt=""></div>
        </div>
    </div>

    
        
    <di class="container-fluid" >
        <div class=" pt-5 about-sec" >
        <h1 class="text-warning text-center mt-5 fs-1 pt-5 fw-bolder"> Happy Cowpok's</h1>
        <p class="text-light pt-2 text-center">We make sure ya’ll keep on coming back fr’ more!</p>
        </div>
    


    </div>
    <div class="container-fluid p-0 text-center pt-lg-3 pt-5">
        <img src="background image/bg-12.png" class="img-fluid "  data-aos="fade-left"alt="">
    </div>
    <?php include('contact.php'); ?>

    <!-- AOS Library Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 100,
            duration: 2000,
        });
    </script>
    

    <?php include('partials/_footer.php'); ?>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
