<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Wings Capital Management Consultancies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="./assets/images/wings logo.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="uikit.css">
    <link rel="stylesheet" href="new-home.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <style>
        * {
            font-family: 'Montserrat';
        }


        .hero-section {
            height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .hero-background .bg-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero-background .bg-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.68);
        }

        .bg-image-1 {
            background-image: url('./resources/dubai.png');
            /* animation: zoomFade 24s infinite; */
        }

        .bg-image-2 {
            background-image: url('./resources/srilanka.png');
            /* animation: zoomFade 24s infinite 8s; */
            opacity: 0;
        }

        .bg-image-3 {
            background-image: url('./resources/dubai.png');
            /* animation: zoomFade 24s infinite 16s; */
            opacity: 0;
        }

        @keyframes zoomFade {
            0% {
                /* opacity: 0; */
                transform: scale(1);
            }

            4% {
                opacity: 1;
                transform: scale(1);
            }

            29% {
                opacity: 1;
                transform: scale(1.1);
            }

            33% {
                /* opacity: 0; */
                transform: scale(1.1);
            }

            100% {
                transform: scale(1.1);
            }
        }

        .hero-content {
            position: relative;
            z-index: 10;
        }

        /* ===== TABLET ===== */
        @media (max-width: 992px) {

            .hero-section {
                height: auto;
                padding: 80px 0;
            }

            .hero-section .col-10 {
                margin-top: 80px !important;
            }

            .hero-section h1 {
                font-size: 36px !important;
            }

            .hero-section p {
                font-size: 20px !important;
            }

            .hero-section img {
                width: 70px;
            }

            /* News layout: 2 per row */
            .hero-section .row>.col-3,
            .hero-section .row>.col-2 {
                flex: 0 0 48%;
                max-width: 48%;
            }
        }


        /* ===== MOBILE ===== */
        @media (max-width: 576px) {

            .hero-section {
                padding: 60px 20px;
                text-align: center;
            }

            .hero-section .col-10 {
                margin-top: 40px !important;
            }

            .hero-section img {
                position: static !important;
                margin-bottom: 20px;
            }

            .hero-section .mt-5.ms-5 {
                margin-left: 0 !important;
                margin-top: 20px !important;
            }

            .hero-section h1 {
                font-size: 28px !important;
                line-height: 1.3;
            }

            .hero-section p {
                font-size: 18px !important;
            }

            /* News stacked vertically */
            .hero-section .row>.col-3,
            .hero-section .row>.col-2 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .hero-section .col-12[style*="margin-top:180px"] {
                margin-top: 60px !important;
            }
        }
    </style>

</head>

<body>

    <div class="container-fluid p-0">
        <div class="row">

            <?php include 'header.php'; ?>

            <div class="col-12 hero-section d-flex justify-content-center align-items-center">
                <!-- Background Image Fade -->
                <div class="hero-background">
                    <div class="bg-image bg-image-1"></div>
                    <div class="bg-image bg-image-2"></div>
                    <div class="bg-image bg-image-3"></div>
                </div>

                <!-- Content with Scrollspy -->
                <div class="col-10 hero-content" style="padding: 20px; margin-top: 150px;">
                    <img style="position: absolute;" src="./resources/corner.png" width="90" uk-scrollspy="cls: uk-animation-fade; delay: 500; duration: 1000">
                    <div class="mt-5 ms-5">
                        <h1 class="text-white fw-bold" style="font-size: 48px; margin-top:-10px; font-family: 'Montserrat';" uk-scrollspy="cls: uk-animation-slide-left; delay: 800; duration: 1200">Global Investment <br> Bank & Management<br>Consultancies Firm</h1>
                        <p class="text-white mt-3 fw-bold" style="font-size: 30px;" uk-scrollspy="cls: uk-animation-slide-left; delay: 1100; duration: 1200">With deep roots in Asia</p>
                    </div>

                    <div class="col-12" style="margin-top:180px;">
                        <div class="row" style="gap:10px;">
                            <div class="col-3" uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 1400; duration: 1000">
                                <h3 class="fw-bold" style="color:#edc667;">News</h3>
                                <p class="text-white" style="font-size: 15px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur pariatur, cupiditate sunt dolo</p>
                            </div>

                            <div class="col-3" uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 1700; duration: 1000">
                                <h3 class="fw-bold" style="color:#edc667;">News</h3>
                                <p class="text-white" style="font-size: 15px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur pariatur, cupiditate sunt dolo</p>
                            </div>
                            <div class="col-2" uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 2000; duration: 1000">
                                <h3 class="fw-bold" style="color:#edc667;">News</h3>
                                <p class="text-white" style="font-size: 15px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur pariatur, cupiditate sunt dolo</p>
                            </div>
                            <div class="col-3" uk-scrollspy="cls: uk-animation-slide-bottom-small; delay: 2300; duration: 1000">
                                <h3 class="fw-bold" style="color:#edc667;">News</h3>
                                <p class="text-white" style="font-size: 15px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur pariatur, cupiditate sunt dolo</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


              <div class="col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class=" fw-bold d-flex align-items-center justify-content-start gap-2 gold-text">
                                        <span>•</span>
                                        ABOUT OUR COMPANY
                                        <span>•</span>
                                    </p>
                                    <h1 class="heading-black">Crafting success tailored solution for each & every challenges</h1>

                                </div>
                                <div class="col-lg-6">
                                    <p class="mt-4 paragraph-dark">Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value through our strategic inset, innovative approaches. Our mission is to empower businesses of all sizes to thrive. </br>
                                    </p>
                                    <p class="mt-4 paragraph-dark"> Committed to the delivering exceptional in the value through our strategic inset, innovative approaches empower.</p>

                                    <a href="about.html" class="tj-primary-btn mt-4">
                                        <div class="btn_inner">
                                            <div class="btn_icon">
                                                <span>
                                                    <i class="bi bi-arrow-right"></i>
                                                    <i class="bi bi-arrow-right"></i>
                                                </span>
                                            </div>
                                            <div class="btn_text">
                                                <span>Learn more</span>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>