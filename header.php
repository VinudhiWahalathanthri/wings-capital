<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solvior Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">




    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lato', serif;
        }



        .top-bar {
            background: #262626ff;
            color: white;
            padding: 9px 0;
            font-size: 14px;
        }

        .top-bar a {
            color: black;
            text-decoration: none;
            font-weight: 700;
        }

        .top-bar a:hover {
            color: #000;
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
            gap: 5px;
        }

        .top-bar-right {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .top-bar i {
            font-size: 12px;
        }

        .main-nav {
            background: transparent;
            padding: 25px 0;
            position: fixed;
            width: 100%;
            left: 0;
            z-index: 1000;
            transition: all 0.4s ease;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            margin-top: 30px;
        }

        .main-nav.scrolled {
            background: #202020ff;
            top: 0;
            padding: 12px 0;
            margin-top: 0;
        }


        .main-nav.scrolled .nav-menu a {
            color: #ffffffff;
        }

        .main-nav.scrolled .explore-btn {
            color: #000;
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
            color: black;
            text-decoration: none;
            font-size: 24px;
            font-weight: 600;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: #D4AF37;
            /* gold */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
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
            color: black;
            text-decoration: none;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #D4AF37;
            /* gold hover */
        }

        .nav-menu a.active {
            color: #C19B2D;
            /* darker gold */
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
            color: black;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 15px;
            transition: color 0.3s;
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
            /* darker gold */
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
                    <i class="fas fa-check-circle"></i>
                    <span>Trusted partner in business excellence</span>
                    <a href="#"><span style="font-family: 'Lato', sans-serif;color: #eee;text-decoration: underline;">Join us now</span> <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="top-bar-right">
                    <div>
                        <i class="far fa-clock" style="margin-right:10px;"></i> Mon - Friday : 9:00 - 18:00
                    </div>
                    <div>
                        <i class="far fa-envelope" style="margin-right:10px;"></i> support@solvior.com
                    </div>
                    <div>
                        <i class="fas fa-globe" style="margin-right:10px;"></i> English <i class="fas fa-chevron-down"></i>
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
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <span>Solvior</span>
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
                        Request Loan <i class="fas fa-search"></i>
                    </button>
                    <button class="quote-btn">
                        <i class="fas fa-arrow-right"></i>
                        Book Consultation
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <script>
        window.addEventListener("scroll", function() {
            const nav = document.querySelector(".main-nav");
            if (window.scrollY > 30) {
                nav.classList.add("scrolled");
            } else {
                nav.classList.remove("scrolled");
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>