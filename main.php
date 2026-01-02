<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Wings Capital Management Consultancies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon"
        href="assets/images/main/Wings.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="button.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="uikit.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato', serif;
        }

        .badge-custom {
            background: rgba(212, 175, 55, 0.12);
            /* soft gold tint */
            color: #0f172a;
            /* deep navy text */
            font-weight: 500;
            padding: 4px 14px;
            /* slimmer + elegant */
            border-radius: 30px;
            /* more rounded */
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            /* smaller, modern */
        }



        .dot-bg-left,
        .dot-bg-right {
            position: absolute;
            top: 50%;
            width: 260px;
            height: 260px;
            transform: translateY(-50%);
            background-image: radial-gradient(#6ea8ff 2px, transparent 2px);
            background-size: 18px 18px;
            opacity: 0.4;
            z-index: -1;
        }


        .dot-bg-left {
            left: -40px;
        }


        .dot-bg-right {
            right: -40px;
        }


        .hero-title {
            font-size: 72px;
            color: #211a02;
            font-family: 'Lato', serif;
            font-weight: 600;
            line-height: 68px;
        }


        .hero-title span {
            color: #D4AF37;
        }


        .hero-subtext {
            font-size: 18px;
            max-width: 760px;
            margin: 25px auto;
            color: #4b5568;
        }


        .btn-custom {
            background: #06122e;
            color: #fff;
            padding: 14px 28px;
            border-radius: 50px;
            font-size: 18px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }


        .btn-custom:hover {
            background: #0b1b42;
            color: #fff;
        }


        .btn-alt {
            background: #0d6efd;
            color: #fff;
        }
    </style>

</head>

<body>

    <div class="col-12">
        <div class="row">
            <?php include 'header.php'; ?>

            <div class="col-12 justify-content-center d-flex fancy-grid-section" style="margin-top: 150px;">
                <div class="row">
                    <section class="py-5 text-center">
                        <div class="container">


                            <div class="badge-custom mx-auto mb-3">
                                <img src="https://cdn-icons-png.flaticon.com/512/992/992700.png" width="18" />
                                Trusted partner in business excellence
                            </div>


                            <h1 class="hero-title">
                                Business growth through
                            </h1>
                            <h1 class="hero-title">
                                <span>strategic</span> thinking
                            </h1>

                            <p class="hero-subtext">
                                Transform your business with expert consultancy services our team </br>of seasoned consultants unparalleled.
                            </p>


                            <div class="hero-btn-area wow fadeInUp animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp; opacity: 1;">
                                <a href="contact.html" class="tj-primary-btn me-3">
                                    <div class="btn_inner">
                                        <div class="btn_icon">
                                            <span>
                                                <i class="bi bi-arrow-right"></i>
                                                <i class="bi bi-arrow-right"></i>
                                            </span>
                                        </div>
                                        <div class="btn_text">
                                            <span>Book consultation</span>
                                        </div>
                                    </div>
                                </a>
                                <a href="about.html" class="tj-primary-btn">
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
                    </section>

                    <img src="assets/images/shapes/h4-hero-shape-1.svg" alt="Shapes">
                </div>
            </div>


              <div class="col-12" style="background-color: #0c0c0c;margin-top:80px;">
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
    <?php include 'footer.php'; ?>
        </div>
    </div>



</body>

</html>