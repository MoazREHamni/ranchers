<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Fellas Eat Here - Ranchers</title>
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Open+Sans:wght@300&family=Phudu&family=Roboto:ital,wght@0,100;0,500;1,100&display=swap"
        rel="stylesheet">
    <!-- AOS Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <!-- Custom Styles -->
    <style>
        .f-sec {
            background-image: url('background image/bg-17.png');
            min-height: 800px;
            min-width: 100vw;
            background-size: cover;
            background-position: center;
            content: "";
            z-index: -1;
            opacity: 0.7;
            padding-top: 250px
        }

        .f-sec2 {
            background-color: black;
            opacity: 0.6 !important;
            border-radius: 15px;
        }

        .f-sec3 {
            background-image: url('background image/bg-15.png');
            opacity: 1;
        }

        .map {
            width: 100%;
            height: 300px;
            /* Adjust height as needed */
        }
    </style>
</head>

<body style="background-color: black;">

    <?php include ('partials/_dbconnected.php'); ?>

    <?php include ('partials/_header.php'); ?>

    <!-- Home Section -->
    <div class="container-fluid f-sec">
        <div class="container">


            <div class="row">
                <div class="col-lg-7 d-lg-flex d-none text-end pt-5" data-aos="fade-right">
                    <img src="background image/bg-14.png" class="img-fluid" alt="">
                </div>
                <div class="col-5 f-sec2 mb-lg-2 pb-lg-0 pb-5  " data-aos="fade-left">
                    <h1 class="text-warning fs-1 fw-bloder text-center mt-4">YEE <br>HAWWW</h1>
                    <p class="text-center text-light fs-6">Be a part of expanding the Ranch!</p>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: black;">


        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-6 col-12 f-sec3 d-flex flex-column align-items-center justify-content-center"
                    data-aos="fade-up">
                    <img src="background image/Sherif-star.png" class="img-fluid" alt="">
                    <h1 class="text-warning fs-1 fw-bloder " data-aos="fade-left">BE YOUR OWEN SHERIF</h1>
                    <p class="text-light" data-aos="fade-left">Here is yer chance fr’ carrying forward the legacy of
                        Ranchers and takin’ it to new places.
                        Ranchers is home to the most mouthwatering recipes that are sure to make customers coming back
                        fr’ more!</p>
                </div>
                <div class="col-lg-6 col-12 m-0 p-0 pt-5">
                    <img src="background image/bg-16.png" data-aos="fade-left" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <h1 class="text-warning fs-1 fw-bloder pt-5 pb-5 text-center " data-aos="fade-left">INTRODUCING NEW LOOK<br>
            i-8 MARKAZ</h1>

        <div class="map"></div>


    </div>
    <div class="container">
        <h1 class="text-warning fs-1 fw-bloder pt-5 pb-5 text-center " data-aos="fade-left">INTRODUCING NEW LOOK<br>
            i-8 MARKAZ</h1>

        <div class="map"></div>


    </div>
    <div class="container pb-5">
        <h1 class="text-warning fs-1 fw-bloder pt-5 pb-5 text-center " data-aos="fade-left">INTRODUCING NEW LOOK<br>
            i-8 MARKAZ</h1>

        <div class="map"></div>


    </div>









    <?php include ('contact.php'); ?>

    <!-- JavaScript section -->
    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <!-- AOS Library Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 100,
            duration: 1500,
        });
    </script>
    <!-- Your Leaflet map initialization and other scripts -->
    <script>
    // Wait for the document to be fully loaded before initializing the map
    document.addEventListener('DOMContentLoaded', function () {
        // Find all elements with class 'map'
        var mapElements = document.getElementsByClassName('map');

        // Initialize Leaflet map for each element with class 'map'
        Array.prototype.forEach.call(mapElements, function(element) {
            var map = L.map(element, {
                center: [31.4504, 73.1350], // Coordinates of Faisalabad (adjust as needed)
                zoom: 12, // Initial zoom level (adjust as needed)
                zoomControl: false // Disable default zoom control
            });

            // Add OpenStreetMap tile layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: 'Map data &copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Example: Adding a marker for Rancher Faisalabad
            var marker = L.marker([31.4504, 73.1350]).addTo(map)
                .bindPopup('<b>Rancher Faisalabad</b><br>Great food awaits!')
                .openPopup();

            // Customize zoom control with + and - buttons only
            L.control.zoom({
                position: 'bottomright'
            }).addTo(map);

            // Disable scroll wheel zoom, enable Ctrl + scroll zoom
            map.scrollWheelZoom.disable();
            map.on('focus', () => { map.scrollWheelZoom.enable(); });
            map.on('blur', () => { map.scrollWheelZoom.disable(); });
        });
    });
</script>




    <?php include ('partials/_footer.php'); ?>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
</body>

</html>