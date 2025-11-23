<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/css/solvior-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/2.0.4/venobox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/8.5.24/mmenu.css">

    <link rel="icon"
        href="assets/images/main/Wings.png">

    <link rel="stylesheet" href="main.css">

    <style>
        .contact-card {
            border: 1px solid #e7e7e7;
            padding: 40px 20px;
            text-align: center;
            background: #fff;
        }

        .contact-icon {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: #d4af3743;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }

        .contact-icon span {
            color: #333;
            font-size: 2rem;
            transition: color 0.3s;
        }

        /* Hover effect */
        .contact-card:hover .contact-icon {
            background-color: #D4AF37;
            /* gold */
        }

        .contact-card:hover .contact-icon span {
            color: #fff;
            animation: shake 0.5s;
        }

        /* Shake animation */
        @keyframes shake {
            0% {
                transform: translateX(0);
            }

            20% {
                transform: translateX(-5px);
            }

            40% {
                transform: translateX(5px);
            }

            60% {
                transform: translateX(-5px);
            }

            80% {
                transform: translateX(5px);
            }

            100% {
                transform: translateX(0);
            }
        }

        .map-box iframe {
            width: 100%;
            height: 50%;
            border: 0;
        }
    </style>
    <style>
        .hero-section {
            position: relative;
            height: 550px;
            background: url('assets/images/pages/people.png') center center / cover no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.72);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .breadcrumb-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            backdrop-filter: blur(5px);
            font-size: 12px;
        }

        /* Minimal input style */
        .minimal-input {
            width: 100%;
            border: none;
            border-bottom: 1px solid #dcdcdc;
            padding: 8px 0;
            font-size: 15px;
            outline: none;
            transition: all 0.3s ease;
        }

        .minimal-input:focus {
            border-bottom: 1px solid #0d6efd;
            /* blue or your brand colour */
        }

        /* For labels */
        .custom-label {
            font-size: 14px;
            color: #333;
            margin-bottom: 4px;
        }

        /* Minimal select */
        .minimal-select {
            border: none;
            border-bottom: 1px solid #dcdcdc;
            background: transparent;
            padding: 8px 0;
            font-size: 15px;
            outline: none;
            transition: all 0.3s ease;
        }

        .minimal-select:focus {
            border-bottom: 1px solid #0d6efd;
            box-shadow: none;
        }

        /* Remove Bootstrap default background for select */
        .minimal-select option {
            background: #fff;
            color: #333;
        }
    </style>
</head>

<body>


    <div class="container-fluid">
        <div class="row">

            <?php include 'header.php'; ?>

            <div class="hero-section d-flex justify-content-center align-items-center text-center">
                <div class="hero-content p-4">
                    <h1 class="fw-bold">Contact Us</h1>
                    <p>
                        <a href="home.php" class="breadcrumb-badge text-decoration-none mt-3">
                            Home / Contact us
                        </a>
                    </p>
                </div>
            </div>


            <div class="col-12 p-5" style="margin-top:50px;">
                <div class="row justify-content-center align-content-center">
                    <!-- Top Section -->
                    <div class="col-10 text-center justify-content-center align-content-center">

                        <p class=" fw-bold d-flex align-items-center justify-content-center gap-2" style="color: #D4AF37;">
                            <span style="font-size: 10px;">•</span>
                            CONTACT US
                            <span style="font-size: 10px;">•</span>
                        </p>
                        <h1 class="fw-bold">Our contact information</h1>

                        <div class="row mt-5 g-4">

                            <!-- Email -->
                            <div class="col-md-3">
                                <div class="contact-card">
                                    <div class="contact-icon">
                                        <span uk-icon="icon: mail; ratio: 2"></span>
                                    </div>
                                    <h4 class="fw-bold">Email us</h4>
                                    <p class="mt-3">solvior@gmail.com<br>support@gmail.com</p>
                                </div>
                            </div>

                            <!-- Call -->
                            <div class="col-md-3">
                                <div class="contact-card">
                                    <div class="contact-icon">
                                        <span uk-icon="icon: receiver; ratio: 2"></span>
                                    </div>
                                    <h4 class="fw-bold">Call us</h4>
                                    <p class="mt-3">+526-8214-5622<br>+226-3565-2552</p>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="col-md-3">
                                <div class="contact-card">
                                    <div class="contact-icon">
                                        <span uk-icon="icon: location; ratio: 2"></span>
                                    </div>
                                    <h4 class="fw-bold">Our Location</h4>
                                    <p class="mt-3">
                                        993 Renner Burg, West Rond,<br>
                                        MT 94251-030
                                    </p>
                                </div>
                            </div>

                            <!-- Live Chat -->
                            <div class="col-md-3">
                                <div class="contact-card">
                                    <div class="contact-icon">
                                        <span uk-icon="icon: comments; ratio: 2"></span>
                                    </div>
                                    <h4 class="fw-bold">Live chat</h4>
                                    <p class="mt-3">livechat@solvior.com<br><a href="#" class="text-primary">Need help?</a></p>
                                </div>
                            </div>

                        </div>

                        <!-- Bottom Section -->
                        <div class="col-12 tj-contact-area">
                            <div class="row g-4">

                                <!-- Form -->
                                <div class="col-md-6 contact-form-one">
                                    <div class="contact-card h-100">
                                        <h2 class="mb-4 text-start p-4">
                                            Feel free to <span style="color: #D4AF37;">get in touch</span> or </br> visit our location.
                                        </h2>

                                        <div class="col-12 px-4 pb-4">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-input">
                                                            <input type="text" id="first" name="name" placeholder="Full name*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-input">
                                                            <input type="email" id="emailOne" name="email" placeholder="Email address*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-input">
                                                            <input type="tel" id="tel" name="tel" placeholder="Phone number*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-input">
                                                            <div class="tj-nice-select-box">
                                                                <div class="tj-select">
                                                                    <select class="nice-select" style="display:none;">
                                                                        <option>Chose a option</option>
                                                                        <option value="1">IT consulting</option>
                                                                        <option value="2">Market research</option>
                                                                        <option value="3">Business process</option>
                                                                        <option value="4">Business consultancy</option>
                                                                        <option value="5">Digital marketing</option>
                                                                        <option value="6">Branding design</option>
                                                                    </select>

                                                                    <div class="nice-select" tabindex="0">
                                                                        <span class="current">Chose a option</span>
                                                                        <ul class="list">
                                                                            <li data-value="Chose a option" class="option selected">Chose a option</li>
                                                                            <li data-value="1" class="option">IT consulting</li>
                                                                            <li data-value="2" class="option">Market research</li>
                                                                            <li data-value="3" class="option">Business process</li>
                                                                            <li data-value="4" class="option">Business consultancy</li>
                                                                            <li data-value="5" class="option">Digital marketing</li>
                                                                            <li data-value="6" class="option">Branding design</li>
                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-input input-textarea">
                                                            <textarea id="message" name="message" placeholder="Type message"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="submit-button justify-content-start align-content-start">
                                                        <button type="submit" class="tj-primary-btn">
                                                            <span class="btn_inner">
                                                                <span class="btn_icon">
                                                                    <span>
                                                                        <i class="bi bi-arrow-right"></i>
                                                                        <i class="tji-arrow-right"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="btn_text"><span>Send message</span></span>
                                                            </span>
                                                        </button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>

                              

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/js/uikit-icons.min.js"></script>

</body>

</html>