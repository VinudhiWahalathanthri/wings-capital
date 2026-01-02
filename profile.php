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
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <link rel="icon"
        href="assets/images/main/Wings.png">

    <link rel="stylesheet" href="button.css">

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">

    <style>
        body {
            font-family: 'Lato', serif;
        }

        .contact-card {
            position: relative;
            border: 1px solid #ced7e0;
            padding: 40px 30px;
            background: #fff;
            overflow: hidden;
            transition: background 0.3s ease;
        }

        /* ICON LEFT */
        .contact-icon {
            width: 90px;
            height: 90px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 20px;
            transition: color 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .contact-icon svg {
            color: #364052;
            stroke: #364052;
            transition: 0.3s ease;
        }

        .contact-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #f7e7b3, #e3c26f);
            opacity: 0.25;
            transition: left 0.5s ease;
            z-index: 1;
        }

        .contact-card:hover::before {
            left: 0;
        }

        .contact-card:hover .contact-icon svg {
            /* color: #d4a017;
            stroke: #d4a017; */
            animation: shake 0.5s;
        }

        @keyframes shake {
            0% {
                transform: translateX(0);
            }

            20% {
                transform: translateX(-4px);
            }

            40% {
                transform: translateX(4px);
            }

            60% {
                transform: translateX(-4px);
            }

            80% {
                transform: translateX(4px);
            }

            100% {
                transform: translateX(0);
            }
        }

        .contact-card:hover {
            transform: none;
        }

        .map-box iframe {
            width: 100%;
            height: 50%;
            border: 0;
        }


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
                    <h1 style="font-size:57px;font-family: 'Lato';">About Us</h1>
                    <p>
                        <a href="home.php" class="breadcrumb-badge text-decoration-none mt-3">
                            Home / About Us
                        </a>
                    </p>
                </div>
            </div>


            <div class="col-12 p-5" style="margin-top:50px;">
                <div class="row justify-content-center align-content-center">

                    <div class="col-lg-9 col-md-12 justify-content-center align-content-center">
                        <div class="col-12">


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class=" fw-bold d-flex align-items-center justify-content-start gap-2 gold-text">
                                            <span>•</span>
                                            OUR LEADERS
                                            <span>•</span>
                                        </p>
                                        <h1 class="heading-black">Nipuna Wahalathanthrige</h1>
                                        <h3 class=" text-secondary">Group Chief Executive Officer</h3>


                                        <p class="mt-4 paragraph-dark uk-text-justify">Nipuna Wahalathanthrige currently serves as the Strategic Business Partner of United Stars Group, an international trading, investment, and financial management company, while also leading Wings Capital Management Consultancies Co as the CEO in the UAE. At United Stars Group, he delivers strategic leadership to entrepreneurs, helping them tackle the complexities of global markets. With Wings Capital Management, he oversees a comprehensive portfolio of specialized subsidiaries including Wings Digital, Wings Aviation, Wings Agro, Wings Medi Corp, Wings Merchant Services, and Wings Maritime Logistic Partnership Services, providing tailored business solutions across multiple sectors. With a strong foundation in business dynamics, investment strategy, and financial planning, Nipuna is committed to steering companies toward sustainable growth and success across diverse markets worldwide.
                                        </p>

                                        </a>
                                    </div>

                                    <div class="col-lg-5 " style="margin-left:100px;">
                                        <img src="assets/images/nipuna.png" style="height:100%;" alt="CEO Image" class="img-fluid rounded">
                                    </div>

                                </div>
                            </div>

                            <p class="mt-5 paragraph-dark uk-text-justify">Nipuna Wahalathanthrige has been officially appointed as the Project Investment and Finance Advisor to the Sri Lanka–China Business Council. In this capacity, he plays a pivotal role in fostering bilateral economic collaboration between Sri Lankan and Chinese enterprises. Through this appointment, he has also established his position as a Senior Consultant representing Sri Lankan Small and Medium Enterprises (SMEs), providing strategic advisory services to facilitate their entry and sustainable growth within various Chinese business sectors. His role is instrumental in promoting cross-border investment opportunities, financial planning, and project development, ensuring that Sri Lankan SMEs are competitively positioned in the global market—particularly in the context of China’s evolving economic landscape.
                                Nipuna has been instrumental in facilitating a strategic public-private partnership agreement with the Regional Airports Company Limited (RACL) of the Maldives. This collaboration focuses on the development and deployment of advanced aviation infrastructure, including vertiports and droneports, to enhance domestic air mobility and connectivity across the Maldivian archipelago. Nipuna’s engagement ensures a no-cost model to the government, while securing international investment and introducing cutting-edge technology to support the country's sustainable transport and tourism goals.</p>

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


            <?php include 'footer.php'; ?>


        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/js/uikit-icons.min.js"></script>

</body>

</html>