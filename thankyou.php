<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rose Water Dessert Bar | Booking Received</title>
    <link rel="icon" type="image/png" href="assets/images/logo/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--Bootstrap 4.5.0-->
    <link rel="stylesheet" href="assets/styles/style.css">
    <!--Main Stylesheet-->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <script src="assets/js/1351.js"></script>
    <!--Font Awesome Script-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Font Awesome 4.7.0-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--Font Awesome 4.5.0-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js"
        integrity="sha512-4WpSQe8XU6Djt8IPJMGD9Xx9KuYsVCEeitZfMhPi8xdYlVA5hzRitm0Nt1g2AZFS136s29Nq4E4NVvouVAVrBw=="
        crossorigin="anonymous"></script>
</head>


<body class="thankyoucover">


    <?php 
    $value=$_GET['source'];
    
        if($value == "contact") {
                $msg = "Your Message Has Been Received";
        }
        else if ($value = "booking") {
            $msg = "Your Booking Has Been Received";
        }
    
    ?>
    <div id="landingcover" class="container-fluid thankyoucover">
        <!--Navigation Bar Starts-->
        <div class="nav-cover navbar justify-content-between navbar-expand-md row">
            <div class="site-logo d-flex justify-content-left col-md-4 col-sm-12">
                <img src="assets/images/logo/logo.png" alt="" id="s-logo">
            </div>

            <div class="nav navbar justify-content-center navbar-expand-md col-md-8 ">
                <button class="navbar-toggler d-md-none d-sm-block" id="nav-btn" data-toggle="collapse"
                    data-target="#m-nav">
                    <i class="fad fa-bars"></i>
                </button>

                <div class="main-nav collapse navbar-collapse navbar nav justify-content-center" id="m-nav">
                    <ul class="sec-nav d-flex">
                        <li class="list-group-item lf-p-li lf-s text-black-50"><a href="index.html">Home</a></li>
                        <li class="list-group-item lf-p-li lf-s text-black-50"><a href="admin.php">Menu </a></li>
                        <li class="list-group-item lf-p-li lf-s text-black-50"><a href="reservation.html">Book</a></li>
                        <li class="list-group-item lf-p-li lf-s text-black-50"><a href="">Contact&nbsp;Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Navigation Bar Ends-->

        <!--Slide Content Starts-->
        <div class="slider-content text-center">
            <h1 class="slider-header"><?php echo($msg); ?></h1>
            <h4 class="slider-sub"> You'll receive a confirmation soon.</h4>
            <div class="container-fluid d-flex flex-row justify-content-center">
                <div class="row d-flex flex-row justify-content-center ft-b-group" role="group"
                    aria-label="Basic example">
                    <button class="col-sm-8 ft-btn book-button ty-btn" onclick="location.href='index.html';"><i
                            class="far fa-angle-left"></i> Go Back &nbsp;</button>
                </div>
            </div>
        </div>
        <!--Slide Content Ends-->

    </div>



</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
    integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd"
    crossorigin="anonymous"></script>

</html>