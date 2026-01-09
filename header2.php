<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solvior Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Mont:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="button.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Mont', serif;
        }

        .top-bar {
            background: #121c27;
            color: white;
            padding: 8px 0;
            font-size: 13px;
            position: fixed;
            width: 100%;
            left: 0;
            z-index: 1001;
            transition: all 0.4s ease;
        }

        .top-bar.scrolled {
            display: none;
            background: #121c27;
            color: white;
        }

        .top-bar a {
            color: white;
            text-decoration: none;
            font-weight: 700;
            transition: color 0.4s ease;
        }

        .top-bar.scrolled a {
            color: white;
        }

        .top-bar a:hover {
            color: #D4AF37;
        }

        .top-bar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .container {
            max-width: 100%;
            padding-left: 70px;
            padding-right: 70px;
        }

        .top-bar-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .top-bar-right {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .top-bar i {
            font-size: 12px;
        }

        .social-icons {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .social-icons a {
            color: white;
            font-size: 13px;
            transition: color 0.3s;
        }

        .top-bar.scrolled .social-icons a {
            color: white;
        }

        .social-icons a:hover {
            color: #D4AF37;
        }

        .main-nav {
            background: white;
            padding: 12px 0;
            position: fixed;
            width: 100%;
            left: 0;
            z-index: 1000;
            transition: all 0.4s ease;
            margin-top: 38px;
        }

        .main-nav.scrolled {
            background: white;
            padding: 10px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: -10px;
        }


        .main-nav.scrolled .nav-menu a {
            color: black;
        }

        .main-nav.scrolled .explore-btn {
            color: black;
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        /* LOGO */
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            text-decoration: none;
            font-size: 24px;
            font-weight: 600;
        }

        .logo-icon {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
        }

        /* MENU */
        .nav-menu {
            display: flex;
            align-items: center;
            gap: 35px;
            list-style: none;
            margin: 0;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: color 0.4s ease;
        }

        .nav-menu a:hover {
            color: #D4AF37;
        }

        .nav-menu a.active {
            color: #D4AF37;
        }

        .nav-menu i {
            font-size: 10px;
            font-weight: bold;
        }

        /* RIGHT SIDE BUTTONS */
        .nav-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* EXPLORE (text button) */
        .explore-btn {
            background: transparent;
            border: none;
            color: white;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 15px;
            transition: color 0.4s ease;
        }

        .explore-btn:hover {
            color: #D4AF37;
        }

        /* GOLD BUTTON */
        .quote-btn {
            background: #D4AF37;
            color: black;
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            transition: background 0.3s, box-shadow 0.3s;
        }

        .quote-btn:hover {
            background: #C19B2D;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .quote-btn i {
            font-size: 16px;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {
            .nav-menu {
                gap: 20px;
                font-size: 14px;
            }

            .top-bar-right {
                gap: 15px;
                font-size: 12px;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Top Info Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-left">
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="top-bar-right">
                    <div>
                        <i class="fas fa-envelope" style="margin-right:8px;"></i> info@wingscapital.com
                    </div>
                    <div>
                        <i class="fas fa-map-marker-alt" style="margin-right:8px;"></i> 123 Business St, Dubai, UAE
                    </div>
                    <div>
                        <i class="fas fa-phone" style="margin-right:8px;"></i> +971 4 123 4567
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="main-nav">
        <div class="container">
            <div class="navbar-content">
                <a href="#" class="logo">
                    <div class="logo-icon">
                     <img src="assets/images/wings logo.png" alt="" srcset="">
                    </div>
                </a>

                <ul class="nav-menu">
                    <li><a href="#" style="font-family: 'Lato', sans-serif;font-weight: 700;">Home <i class="fas fa-chevron-down"></i></a></li>
                    <li><a href="#" style="font-weight:700;">Services <i class="fas fa-chevron-down"></i></a></li>
                    <li><a href="#" style="font-weight:700;">Pages <i class="fas fa-chevron-down"></i></a></li>
                    <li><a href="#" style="font-weight:700;">Portfolio <i class="fas fa-chevron-down"></i></a></li>
                    <li><a href="#" style="font-weight:700;">Blog <i class="fas fa-chevron-down"></i></a></li>
                    <li><a href="#" style="font-weight:700;" class="active">Contact</a></li>
                </ul>

                <div class="nav-right">
                    <button class="explore-btn">
                        Request Loan
                    </button>
                  <div class="submit-button">
                <button type="submit" class="tj-primary-btn">
                    <span class="btn_inner">
                        <div class="btn_icon">
                            <span>
                                <i class="bi bi-arrow-right"></i>
                                <i class="bi bi-arrow-right"></i>
                            </span>
                        </div>
                        <span class="btn_text"><span>Send message</span></span>
                    </span>
                </button>
            </div>
                </div>
            </div>
        </div>
    </nav>

    <script>
        window.addEventListener("scroll", function() {
            const nav = document.querySelector(".main-nav");
            const topBar = document.querySelector(".top-bar");
            
            if (window.scrollY > 30) {
                nav.classList.add("scrolled");
                topBar.classList.add("scrolled");
            } else {
                nav.classList.remove("scrolled");
                topBar.classList.remove("scrolled");
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>