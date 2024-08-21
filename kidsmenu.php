<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Good Fellas Eat Here - Ranchers</title>
    <link rel="shortcut icon" href="logo/footer-logo.png" type="image/x-icon">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .image-container {
            position: relative;
            overflow: hidden;
        }

        .image-container img {
            display: block;
            width: 100%;
            height: auto;
        }
        .image-container:hover .icon-container {
    opacity: 1;
    transform: translateY(-50%); /* Move icons up to 50% of their height */
}

        .icon-container {
    position: absolute;
    bottom: 50px;
    left: 50%;
    transform: translateX(-50%);
    transition: opacity 0.3s ease, transform 0.5s ease; /* Added transform transition */
    opacity: 0; /* Initially hide the icons */
    background-color: #f92;
    transform: translateY(100%); /* Start with icons below the image */
}

        .icon-container i {
            font-size: 24px;
            margin: 10px;
            color: #ffffff;
            /* Adjust icon color */
        }
        i:hover{
            color:whitesmoke;
        }

.icon-container i:hover::after {
  content: "View Cart"; /* Text to display on hover */
  position: absolute;
  bottom: 40px; /* Adjust the position relative to the icon */
  left: 50%; /* Center horizontally */
  transform: translateX(-50%);
  background-color: #333; /* Background color */
  color: white; /* Text color */
  padding: 5px 10px; /* Padding around the text */
  border-radius: 5px; /* Rounded corners */
  font-size: 14px; /* Adjust font size */
  white-space: nowrap; /* Prevent text wrapping */
  opacity: 0; /* Initially hidden */
  pointer-events: none; /* Allow clicks to go through */
  transition: opacity 0.3s ease; /* Smooth transition */
}

.icon-container i:hover::after {
  opacity: 1; /* Show on hover */
}
        
    </style>
</head>

<body>

    <?php include ('partials/_dbconnected.php'); ?>
    <?php include ('partials/_header.php'); ?>

    <!-- HOME SECTION -->
    <div class="container-fluid m-0 p-0">
        <img src="background image/bg-18.png" class="img-fluid w-100" alt="">
    </div>

    <!-- KIDDY CORNER SECTION -->
    <div class="container-fluid p-0  pt-5" style="background-color: #f94;">
        <h1 class="text-light text-center fs-1  fw-bolder">KIDDY CORNER</h1>
        <h1 class="text-light text-center mt-3 fs-6  pb-4">The perfect meals to satisfy your children’s cravings!</h1>

        <div class="container px-5">
            <div class="row">
                <div class="col-lg-4 col-12 image-container" onmouseover="showIcons(this)" onmouseout="hideIcons(this)">
                    <img src="deals/kid-1.png" class="img-fluid" alt="">
                    <div class="icon-container">
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa fa-search"></i>
                    </div>
                    <p class="fw-bold text-light text-center pt-2">Rancheese</p>
                </div>
                <div class="col-lg-4 col-12 image-container" onmouseover="showIcons(this)" onmouseout="hideIcons(this)">
                    <img src="deals/kid-3.webp" class="img-fluid" alt="">
                    <p class="fw-bold text-light text-center pt-2">Fries</p>
                    <div class="icon-container">
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-12 image-container" onmouseover="showIcons(this)" onmouseout="hideIcons(this)">
                    <img src="deals/kid-4.png" class="img-fluid" alt="">
                    <p class="fw-bold text-light text-center pt-2">Chicken Pieces</p>
                    <div class="icon-container">
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 image-container" onmouseover="showIcons(this)" onmouseout="hideIcons(this)">
                    <img src="deals/kid-4.png" class="img-fluid" alt="">
                    <p class="fw-bold text-light text-center pt-2">Whackerrr</p>
                    <div class="icon-container">
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-12 image-container" onmouseover="showIcons(this)" onmouseout="hideIcons(this)">
                    <img src="deals/kid-5.png" class="img-fluid" alt="">
                    <p class="fw-bold text-light text-center pt-2">Kids Meal</p>
                    <div class="icon-container">
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-12 image-container" onmouseover="showIcons(this)" onmouseout="hideIcons(this)">
                    <img src="deals/kid-6.png" class="img-fluid" alt="">
                    <p class="fw-bold text-light text-center pt-2">Cheeky Fries</p>
                    <div class="icon-container">
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 image-container" onmouseover="showIcons(this)" onmouseout="hideIcons(this)">
                    <img src="deals/kid-7.png" class="img-fluid" alt="">
                    <p class="fw-bold text-light text-center pt-2">Messy Wings</p>
                    <div class="icon-container">
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-12 image-container" onmouseover="showIcons(this)" onmouseout="hideIcons(this)">
                    <img src="deals/kid-8.png" class="img-fluid" alt="">
                    <p class="fw-bold text-light text-center pt-2">frizza</p>
                    <div class="icon-container">
                        <i class="fa fa-shopping-cart"></i>
                        <i class="fa fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for showing/hiding icons -->
    <script>
        function showIcons(element) {
            var iconContainer = element.querySelector(".icon-container");
            iconContainer.style.opacity = "1";
        }

        function hideIcons(element) {
            var iconContainer = element.querySelector(".icon-container");
            iconContainer.style.opacity = "0";
        }
    </script>
     <?php include('contact.php'); ?>
     <?php include('partials/_footer.php'); ?>

    <!-- Bootstrap and Popper.js scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>
