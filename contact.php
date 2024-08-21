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
<div class="container-fluid pt-5 pb-5 bg-dark">
        <div class="container pb-5" id="contact">
            <?php
            if(isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($conn, $_POST['email']);

                // Check if a message already exists for this email
                $check_query = "SELECT COUNT(*) as count FROM `feedback` WHERE `email` = '$email'";
                $check_result = mysqli_query($conn, $check_query);
                $row = mysqli_fetch_assoc($check_result);
                $count = $row['count'];

                if($count > 0) {
                    echo '<p class="text-center text-light pt-5">Your message has already been sent. Please wait for our response.</p>';
                } else {
                    $name = mysqli_real_escape_string($conn, $_POST['name']);
                    $phone = mysqli_real_escape_string($conn, $_POST['number']);
                    $message = mysqli_real_escape_string($conn, $_POST['message']);
                    $insert_query = "INSERT INTO `feedback` (`name`, `email`, `phone`, `message`, `timestamp`) 
                                     VALUES ('$name', '$email', '$phone', '$message', NOW())";
                    $insert_result = mysqli_query($conn, $insert_query);

                    if($insert_result) {
                        echo '<p class="text-center text-light pt-5">Your message has been sent successfully. Please wait for our response.</p>';
                    } else {
                        echo '<p class="text-center text-danger pt-5">Error sending message. Please try again later.</p>';
                    }
                }
            } else {
                echo '
                <form action="" method="post"> 
                    <h1 class="text-warning text-center pt-5">HITS US UP</h1>
                    <p class="text-center text-light">If you have any feedback or questions, just hit us up!</p>
                    <div class="row text-center contact-1">
                        <div class="col-12">
                            <input type="text" name="name" class="form-control" required placeholder="Name">
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-6 col-12 contact-2 d-flex justify-content-md-end">
                            <input type="email" name="email" required class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-6 col-12 contact-2 d-flex justify-content-md-start">
                            <input type="number" name="number" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-12">
                            <textarea class="form-control" name="message" rows="4" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" name="submit" value="Submit" class="btn-3 mt-4 mb-3">
                    </div>
                </form>';
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</body>
</html>