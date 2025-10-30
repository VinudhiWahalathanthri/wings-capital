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
    <link rel="stylesheet" href="uikit.css">

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
                                    bottom: 20px;
                                    transform: translateX(-50%);
                                    z-index: 1;
                                    border-radius: 4px;
                                    "></div>
                            </div>

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

                <div class="col-12" style="background-color: #0c0c0c;margin-top:100px;">
                    <div class="row mb-5">
                        <div class="col-12 mb-5" style="margin-top: -120px;">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 rounded-3 d-flex justify-content-center align-items-center">
                                    <img
                                        src="./assets/images/dubai.png"
                                        alt="Market Image"
                                        class="img-fluid rounded-3 text-center"
                                        style="width: 90%; height: 500px; border-radius: 10px;">
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                <div class="container text-center py-5" style="max-width:1200px;">

  <h1 style="font-size:46px; font-weight:700; line-height:1.2;">
    International expansion <br>
    consultants <span style="color:#4BE3A3;">trusted by</span> <br>
    <span style="color:#4BE3A3;">over 100 companies</span>
  </h1>

  <p style="font-size:16px; max-width:700px; margin:20px auto; color:#555;">
    Over 20 years, we’ve built strong relationships with some great companies. 
    We’re proud to work with a range of established brands and emerging startups 
    across Poland, Scandinavia and beyond.
  </p>

  <div class="row text-center justify-content-center mt-4">

    <!-- 15 logos (same image for now) -->
    <!-- Row 1 -->
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>

    <!-- Row 2 -->
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>

    <!-- Row 3 -->
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>
    <div class="col-4 col-md-2 py-3">
      <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
    </div>

  </div>
</div>


                <section class="py-5">
                    <div class="container">
                        <!-- Header Row -->
                        <div class="row align-items-center mb-5">
                            <div class="col-md-8">
                                <h6 class="text-uppercase fw-bold text-muted mb-2">Our Services</h6>
                                <h2 class="fw-bold" style="font-size: 2.5rem;">
                                    We’re Transforming Companies for<br>
                                    <span class="fst-italic" style="font-weight: 500;font-family: Times New Roman;">Global Success</span>
                                    <div style="
            background-color: #fff5b2d2;
            width: 25%;
            height: 25px;
            margin-top:-25px;
          "></div>
                                </h2>
                            </div>
                            <div class="col-md-4 border-start border-3 ps-4" style="border-color: #B8871B;">
                                <p class="mb-0 fw-semibold fs-5">
                                    Serving Businesses from Sweden, Poland, USA,<br>
                                    Germany, UK, Finland, Norway, and more
                                </p>
                            </div>
                        </div>

                        <!-- Services Cards -->
                        <div class="row g-4">
                            <!-- Card 1 (Active / Highlighted) -->
                            <div class="col-md-4" uk-scrollspy="cls: uk-animation-float; target: > div; delay: 200; repeat: false">
                                <div class="p-4 rounded-3 text-white custom-card-highlight">
                                    <div class="mb-3" style="width: 40px; height: 40px; background: white; border-radius: 6px;"></div>
                                    <h5 class="fw-bold">Wealth Management</h5>
                                    <p class="mb-4">
                                        Helping clients grow, manage, and protect their wealth through tailored financial strategies,
                                        including investment planning and portfolio diversification.
                                    </p>
                                    <a href="#" class="text-white fw-semibold text-decoration-none">Learn More</a>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-md-4" uk-scrollspy="cls: uk-animation-fade; target: > div; delay: 400; repeat: false">
                                <div class="p-4 rounded-3 custom-card">
                                    <div class="mb-3" style="width: 40px; height: 40px; background: #E6B84A; border-radius: 6px;"></div>
                                    <h5 class="fw-bold">Wealth Management</h5>
                                    <p class="mb-4">
                                        Helping clients grow, manage, and protect their wealth through tailored financial strategies,
                                        including investment planning and portfolio diversification.
                                    </p>
                                    <a href="#" class="text-warning fw-semibold text-decoration-none">Learn More</a>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-md-4" uk-scrollspy="cls: uk-animation-fade; target: > div; delay: 600; repeat: false">
                                <div class="p-4 rounded-3 custom-card">
                                    <div class="mb-3" style="width: 40px; height: 40px; background: #E6B84A; border-radius: 6px;"></div>
                                    <h5 class="fw-bold">Wealth Management</h5>
                                    <p class="mb-4">
                                        Helping clients grow, manage, and protect their wealth through tailored financial strategies,
                                        including investment planning and portfolio diversification.
                                    </p>
                                    <a href="#" class="text-warning fw-semibold text-decoration-none">Learn More</a>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-md-4" uk-scrollspy="cls: uk-animation-fade; target: > div; delay: 800; repeat: false">
                                <div class="p-4 rounded-3 custom-card">
                                    <div class="mb-3" style="width: 40px; height: 40px; background: #E6B84A; border-radius: 6px;"></div>
                                    <h5 class="fw-bold">Wealth Management</h5>
                                    <p class="mb-4">
                                        Helping clients grow, manage, and protect their wealth through tailored financial strategies,
                                        including investment planning and portfolio diversification.
                                    </p>
                                    <a href="#" class="text-warning fw-semibold text-decoration-none">Learn More</a>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div class="col-md-4" uk-scrollspy="cls: uk-animation-fade; target: > div; delay: 1000; repeat: false">
                                <div class="p-4 rounded-3 custom-card">
                                    <div class="mb-3" style="width: 40px; height: 40px; background: #E6B84A; border-radius: 6px;"></div>
                                    <h5 class="fw-bold">Wealth Management</h5>
                                    <p class="mb-4">
                                        Helping clients grow, manage, and protect their wealth through tailored financial strategies,
                                        including investment planning and portfolio diversification.
                                    </p>
                                    <a href="#" class="text-warning fw-semibold text-decoration-none">Learn More</a>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div class="col-md-4" uk-scrollspy="cls: uk-animation-fade; target: > div; delay: 1200; repeat: false">
                                <div class="p-4 rounded-3 custom-card">
                                    <div class="mb-3" style="width: 40px; height: 40px; background: #E6B84A; border-radius: 6px;"></div>
                                    <h5 class="fw-bold">Wealth Management</h5>
                                    <p class="mb-4">
                                        Helping clients grow, manage, and protect their wealth through tailored financial strategies,
                                        including investment planning and portfolio diversification.
                                    </p>
                                    <a href="#" class="text-warning fw-semibold text-decoration-none">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="col-12 p-5  justify-content-center align-items-center" style="background-color:#fbfbfb;">
                    <div class="row justify-content-center align-items-center">
                        <div class="row justify-content-center align-items-center">

                            <!-- Left Image Placeholder -->
                            <div class="col-md-4 mb-4 mb-md-0 position-relative">
                                <div style="width:100%; height:350px; background:#ddd;"></div>

                                <!-- Badge -->
                                <div style="
        position:absolute; 
        top:15px; left:15px; 
        background:#e8b948; 
        padding:10px 15px; 
        border-radius:5px;
        color:#fff;
        font-weight:600;
      ">
                                    <span style="font-size:22px; display:block;">25</span>
                                    <span style="font-size:12px;">Years of Experience</span>
                                </div>
                            </div>

                            <!-- Right Content -->
                            <div class="col-md-6">

                                <p style="font-size:12px; letter-spacing:2px; color:#777;">ABOUT US</p>
                                <h2 style="font-weight:700;">Who We Are</h2>
                                <p style="font-style:italic; color:#555;">Wings Capital Management Consultancies</p>

                                <p style="color:#666; font-size:15px; line-height:1.7;">
                                    Welcome to Business Boost 360. At Business Boost 360, we are a dedicated team of experts
                                    passionate about empowering small and medium enterprises (SMEs) to thrive in the global
                                    marketplace. With our comprehensive services, including export consulting, market research,
                                    branding, website development, and more, we aim to be the driving force behind SMEs' export.
                                    Partner with us to unlock opportunities, achieve sustainable growth, and make a positive
                                    impact on the global economy.
                                </p>

                                <!-- Buttons & Phone -->
                                <div class="d-flex align-items-center mt-3">
                                    <a href="#" class="btn" style="background:#e8b948; color:#fff; padding:10px 20px; border-radius:5px;">
                                        Book Consultation
                                    </a>

                                    <div class="d-flex align-items-center ms-4">
                                        <div style="
            width:40px; 
            height:40px; 
            border:1px solid #e8b948; 
            border-radius:50%;
            display:flex; 
            align-items:center; 
            justify-content:center;
            margin-right:10px;
          ">
                                            <i class="bi bi-telephone-fill" style="color:#e8b948;"></i>
                                        </div>
                                        <div>
                                            +94 (77) 795–7751<br>
                                            <small style="color:#777;">Call for Support</small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="container py-5">

                    <!-- Title -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 style="font-weight:700;">Recent blog posts</h2>
                        <a href="#" style="font-size:14px; color:#1a73e8; text-decoration:none;">See all posts</a>
                    </div>

                    <!-- Featured Post -->
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <img src="assets/images/dubai.png"
                                style="width:100%; height:300px; object-fit:cover; border-radius:10px;">
                        </div>

                        <div class="col-md-6 d-flex flex-column justify-content-center">
                            <small style="color:#666;">30 Mar 2024</small>
                            <h3 style="font-weight:700; margin-top:10px;">
                                International Marketing and Sales : Creating a Powerful LinkedIn Profile for Export Success
                            </h3>
                            <p style="color:#666; font-size:14px; line-height:1.6;">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem ullam, nam fugit necessitatibus unde atque sint ipsum nobis assumenda ipsa velit officiis architecto eius sequi aliquid expedita reiciendis quos nesciunt.
                            </p>
                            <a href="#" class="btn btn-outline-dark rounded-pill"
                                style="width:max-content; padding:5px 15px;">
                                Read More
                            </a>
                        </div>
                    </div>

                    <!-- Blog Grid -->
                    <div class="row g-4">

                        <!-- Card 1 -->
                        <div class="col-md-4">
                            <img src="assets/images/dubai.png"
                                style="width:100%; height:240px; object-fit:cover; border-radius:12px;">
                            <small style="color:#666; display:block; margin-top:10px;">30 Mar 2024</small>
                            <h6 style="font-weight:700; margin-top:5px;">
                                International Marketing and Sales : Creating a Powerful LinkedIn Profile for Export Success
                            </h6>
                            <p style="color:#666; font-size:14px;">
                                At Explore Markets, we specialize in supporting businesses expanding into Central
                                and Eastern Europe (CEE).
                            </p>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-4">
                            <img src="assets/images/dubai.png"
                                style="width:100%; height:240px; object-fit:cover; border-radius:12px;">
                            <small style="color:#666; display:block; margin-top:10px;">30 Mar 2024</small>
                            <h6 style="font-weight:700; margin-top:5px;">
                                International Marketing and Sales : Creating a Powerful LinkedIn Profile for Export Success
                            </h6>
                            <p style="color:#666; font-size:14px;">
                                At Explore Markets, we specialize in supporting businesses expanding into Central
                                and Eastern Europe (CEE).
                            </p>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-md-4">
                            <img src="assets/images/dubai.png"
                                style="width:100%; height:240px; object-fit:cover; border-radius:12px;">
                            <small style="color:#666; display:block; margin-top:10px;">30 Mar 2024</small>
                            <h6 style="font-weight:700; margin-top:5px;">
                                International Marketing and Sales : Creating a Powerful LinkedIn Profile for Export Success
                            </h6>
                            <p style="color:#666; font-size:14px;">
                                At Explore Markets, we specialize in supporting businesses expanding into Central
                                and Eastern Europe (CEE).
                            </p>
                        </div>
                    </div>

                </div>

                <style>
                    .custom-card-highlight {
                        background-color: #E6B84A;
                        color: white;
                        transition: transform 0.3s ease, border 0.3s ease;
                        border: 2px solid transparent;
                    }

                    .custom-card {
                        background-color: #F8F8F8;
                        transition: transform 0.3s ease, border 0.3s ease;
                        border: 2px solid transparent;
                    }

                    /* Hover effect */
                    .custom-card-highlight:hover,
                    .custom-card:hover {
                        border-color: #B8871B;
                        transform: translateY(-10px);
                        box-shadow: 0 10px 20px rgba(184, 135, 27, 0.3);
                        cursor: pointer;
                    }
                </style>
            </div>
        </div>
        <script src="script"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="uikit.js"></script>
        <script src="uikit.min.js"></script>
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