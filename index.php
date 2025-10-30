<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nipuna Wahalathanthrige</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="./assets/images/icon.png">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .bg-dark-wood {
            background-image: url('./assets/images/main/start.png');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .partners-section {
            margin-top: 50px;
            justify-content: center;
        }

        .partner-logo {
            height: 76px;
            object-fit: contain;
            margin: 10px 15px;
            transition: transform 0.3s;
        }

        .partner-logo:hover {
            transform: scale(1.05);
        }

        .image {
            width: 100%;
            height: auto;
            transition: transform 0.3s;
        }

        .image:hover {
            transform: scale(1.01);
        }

        /* Navbar styles */
        .navbar {
            /* padding-bottom: 20px; */
            transition: all 0.5s ease;
        }

        .navbar-scrolled {
            background-color: white !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .navbar-scrolled .nav-link {
            color: #333 !important;
        }

        .navbar-scrolled .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .navbar-transparent {
            background-color: transparent;
        }

        /* Fixed navbar positioning */
        .navbar-fixed {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            left: 0;
            right: 0;
            padding-left: 60px;
            padding-right: 60px;
        }

        /* Add padding to body to prevent content from hiding under fixed navbar */
        body.fixed-nav {
            padding-top: 50px;
        }

        .experience-container {
            text-align: left;
        }

        .experience-box {
            width: 50px;
            height: 50px;
            border: 2px solid #f9b233;
            /* Yellow border */
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .experience-number {
            font-size: 40px;
            font-family: 'Lato-Bold';
        }

        .experience-text {
            font-size: 18px;
            font-weight: 600;
        }

        li::marker {
            color: #f9b233;
        }

        .text-gold {
            color: #cea844;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark navbar-transparent navbar-fixed">
                    <div class="container-fluid position-relative">

                        <!-- Left: Logo -->
                        <a class="navbar-brand" href="#">
                            <img style="width: 100px;" src="./assets/images/main/Wings.png" id="logo-img" />
                        </a>

                        <!-- Mobile toggle -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Center: Nav links -->
                        <div class="collapse navbar-collapse justify-content-center" style="margin-left:-120px;" id="navbarNav">
                            <ul class="navbar-nav gap-4 ">
                                <li class="nav-item"><a class="nav-link text-black" href="#">Home</a></li>
                                <li class="nav-item"><a class="nav-link text-black" href="events-and-media.php">News</a></li>
                                <li class="nav-item"><a class="nav-link text-black" href="about.php">About</a></li>
                                <li class="nav-item"><a class="nav-link text-black" href="#">Honors</a></li>
                                <li class="nav-item"><a class="nav-link text-black" href="#">Gallery</a></li>
                                <li class="nav-item"><a class="nav-link text-black" href="#">Services</a></li>
                            </ul>
                        </div>

                        <!-- Right: Buttons -->
                        <div class="d-flex align-items-center position-absolute end-0 me-3">
                            <a href="secureLogin.php"
                                class="btn h-btn me-2 rounded-1 d-flex align-items-center justify-content-center"
                                style="background-color: rgb(255, 255, 255); border: thin solid #A4A4A4; text-align: center; height: 40px; min-width: 130px;">
                                Request Loan
                            </a>

                            <a href="consult.php"
                                class="btn h-btn me-2 pe-4 ps-4 gold-btn rounded-1 d-flex align-items-center justify-content-center"
                                style="height: 40px; min-width: 150px;">
                                Book Consultation
                            </a>
                        </div>

                        <!-- Gold button style -->
                        <style>
                            .gold-btn {
                                background: linear-gradient(to right, #FFD97A, #CFA02E);
                                color: #000;
                                padding: 10px;
                                border-radius: 4px;
                                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
                                transition: all 0.2s ease-in-out;
                            }

                            .gold-btn:hover {
                                background: linear-gradient(to right, #FFE08A, #D4A937);
                                box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
                                transform: translateY(-1px);
                            }

                            .gold-btn:active {
                                background: linear-gradient(to right, #D4A937, #B8871B);
                                transform: translateY(1px);
                                box-shadow: inset 0 2px 3px rgba(0, 0, 0, 0.2);
                            }
                        </style>
                    </div>
                </nav>

                <div class="col-md-12" style="margin-bottom: 89px; margin-top: 120px;">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6 position-relative text-center">

                            <h1 class="text-center" style="font-size: 60px; font-family: 'Lato-Bold'; margin-top: 65px;">
                                Meet and Explore Markets
                            </h1>

                            <div class="position-relative d-inline-block">
                                <h1 class="text-center fst-italic" style="font-size: 60px; font-family: 'Lato-Bold'; position: relative; z-index: 2;">
                                    According to your reach
                                </h1>
                                <div style="
          background-color: #fff5b2d2;
          width: 85%;
          height: 25px;
          position: absolute;
          left: 50%;
          bottom: 5px;
          transform: translateX(-50%);
          z-index: 1;
          border-radius: 4px;
        "></div>
                            </div>

                            <!-- Paragraph -->
                            <div class="text-center" style="margin-top: 40px;">
                                <p style="font-size: 18px; color: #323232;">
                                    Musk founded Space Exploration Technologies, or SpaceX, in May 2002.
                                    Musk is chief executive officer (CEO) and chief technology officer (CTO) of the Hawthorne, California-based company.
                                    SpaceX develops and manufactures space launch vehicles with a focus on advancing the state of rocket technology.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>




            </div>
        </div>
        <script src="script"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var navbar = document.querySelector('.navbar');
                var logoImg = document.getElementById('logo-img');
                var originalLogoSrc = logoImg.src;
                var whiteBgLogoSrc = originalLogoSrc.replace('logoGold.png', 'logo.png');

                function handleScroll() {
                    if (window.scrollY > 50) {
                        navbar.classList.add('navbar-scrolled');
                    } else {
                        navbar.classList.remove('navbar-scrolled');
                    }
                }
                window.addEventListener('scroll', handleScroll);
                handleScroll();
            });
        </script>
        <script>
            function animateNumber(id, endValue, duration = 1000) {
                const element = document.getElementById(id);
                let startValue = 0;
                const stepTime = Math.abs(Math.floor(duration / endValue));
                const increment = endValue > startValue ? 1 : -1;

                const timer = setInterval(() => {
                    startValue += increment;
                    element.textContent = startValue;
                    if (startValue === endValue) {
                        clearInterval(timer);
                    }
                }, stepTime);
            }
            window.addEventListener('load', () => {
                animateNumber('consultationCount', 30);
                animateNumber('successfullRes', 96);
                animateNumber('satisfiedCus', 30);
                animateNumber('awardsRec', 30);
            });
        </script>

</body>

</html>