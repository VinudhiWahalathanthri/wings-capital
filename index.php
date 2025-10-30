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
            padding-top: 20px;
            padding-bottom: 20px;
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
            padding-top: 80px;
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
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
                <!-- Navbar section -->
                <nav class="navbar navbar-expand-lg navbar-dark navbar-transparent navbar-fixed">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img style="width: 262px;" src="./assets/images/logoGold.png" id="logo-img" /></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto gap-4">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="events-and-media.php">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Honors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Services</a>
                                </li>
                            </ul>
                            <div class="d-flex">
                                <a href="secureLogin.php" class="btn h-btn me-2" style="background-color:rgb(255, 255, 255);border: thin solid #A4A4A4;">Secure Login</a>
                                <a href="consult.php" class="btn h-btn me-2" style="background-color: #FBAF37; ">Book Consultation</a>
                            </div>
                        </div>
                    </div>
                </nav>

                <!--  Main Hero Section -->
                <div class="col-12 bg-dark-wood">
                    <div class="row">
                        <div class="col-md-12 min-vh-100" style="padding-left: 60px; padding-right: 60px;">
                           
                        </div>
                    </div>
                </div>


                <?php include "./components/footer.php" ?>
            </div>
        </div>
        <script src="script"> </script>
        <!-- Bootstrap JS and your custom JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // JavaScript for navbar scroll effect
            document.addEventListener("DOMContentLoaded", function() {
                var navbar = document.querySelector('.navbar');
                var logoImg = document.getElementById('logo-img');
                var originalLogoSrc = logoImg.src;
                var whiteBgLogoSrc = originalLogoSrc.replace('logoGold.png', 'logo.png'); // Assuming you have a dark version of the logo

                // Function to handle scroll events
                function handleScroll() {
                    if (window.scrollY > 50) {
                        navbar.classList.add('navbar-scrolled');
                        // Optionally change logo to dark version when background is white
                        // logoImg.src = whiteBgLogoSrc;
                    } else {
                        navbar.classList.remove('navbar-scrolled');
                        // Return to original logo when transparent
                        // logoImg.src = originalLogoSrc;
                    }
                }

                // Add scroll event listener
                window.addEventListener('scroll', handleScroll);

                // Initial check in case page is loaded scrolled down
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

            // Call the animation function when the page loads
            window.addEventListener('load', () => {
                animateNumber('consultationCount', 30); // Change 30 to any number you want
                animateNumber('successfullRes', 96); // Change 30 to any number you want
                animateNumber('satisfiedCus', 30); // Change 30 to any number you want
                animateNumber('awardsRec', 30); // Change 30 to any number you want
            });
        </script>

</body>

</html>