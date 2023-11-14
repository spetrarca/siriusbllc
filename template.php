<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sirius B Communications, LLC - Home</title>
    <!--import bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/customcss/mycss.css" />
</head>

<body>

    <!--nav bar start-->
    <nav class="navbar sticky-top navbar-dark navbar-expand-lg"
        style="z-index: 1000; background-color:darkblue; color: white">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: white;" href="#">SB,LLC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" style="color:white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="managed-services.php" style="color:white">Managed Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service-offerings.php" style="color:white">Service Offerings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="uc-offerings.php" style="color:white">Cloud Communications
                            Offerings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php" style="color:white">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="msa.php" style="color:white">Master Service Agreement</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navBarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color:white">Privacy Policies</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: darkblue;">
                            <li><a class="dropdown-item custom-hover-style" href="#" style="color:white">Privacy
                                    Policy</a></li>
                            <li><a class="dropdown-item custom-hover-style" href="#" style="color:white">CCPA - Privacy
                                    Notice for CA Residents</a></li>
                            <li><a class="dropdown-item custom-hover-style" href="#" style="color:white">GDPR Privacy
                                    Request</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar end-->

    <!-- logo-->

    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4"><img src="./assets/images/siriusbllc-crop.png" alt="" style="max-width: 98%;"></div>
            <div class="col-4"></div>
        </div>
    </div>

    <!--main page content goes here-->

    <?php
    //get database connection config
    require_once('./config/config.php');
    ?>

    <!--footer starts here-->
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col"><a href="https://www.oracle.com/communications/"><img
                        src="./assets/images/oracle-partner-logo.png" alt="" class="img-fluid;"></a>
            </div>
            <div class="col"><a href="https://ribboncommunications.com/"><img src="./assets/images/ribbon-black.jpg"
                        alt="" class="img-fluid"></a>
            </div>
            <div class="col"><a
                    href="https://azure.microsoft.com/en-us/resources/cloud-computing-dictionary/what-is-azure"><img
                        src="./assets/images/Partner-Logo-Microsoft-Azure.png" alt="" class="img-fluid"></a>
            </div>
        </div>
        <div class="row">
            <div class="col align-self-center">
                <p>Get in touch with us at: <a href="mailto:sales@siriusbllc.com">sales@siriusbllc.com</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col align-self-center"><a
                    href="https://www.linkedin.com/company/sirius-b-communications-llc/"><img class="img-fluid-li"
                        src="./assets/images/linkedin.png" alt=""></a></div>
        </div>
    </div>




    <!--import bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>