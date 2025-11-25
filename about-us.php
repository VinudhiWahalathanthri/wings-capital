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
                    <h1 class="fw-bold" style="font-size:64px;">About Us</h1>
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

                        <div class="row g-4" style="margin-top:100px;">

                            <!-- Email -->
                            <div class="col-md-3">
                                <div class="contact-card">
                                    <div class="contact-icon">
                                        <svg width="81" height="81" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="currentcolor" stroke-width="1.01408" d="M5.00704 5.00704 L75.99294 5.00704 L75.99294 75.99294 L5.00704 75.99294 Z" class="bQDqtfGb_0" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 283.944px, 286px;"></path>
                                            <path d="M29.8525 5.00684H75.9932V51.1475C75.9932 64.869 64.869 75.9932 51.1475 75.9932H5.00684V29.8525C5.00684 16.131 16.131 5.00684 29.8525 5.00684Z" stroke="currentcolor" stroke-width="1.01408" class="bQDqtfGb_1" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 262.628px, 265px;"></path>
                                            <path transform="rotate(-90 21.2258 43.0137)" stroke="currentcolor" stroke-width="1.01408" d="M21.2258 43.0137 L41.9925 43.0137 L41.9925 63.7804 L21.2258 63.7804 Z" class="bQDqtfGb_2" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 83.0668px, 86px;"></path>
                                            <path transform="rotate(-90 29.6067 51.3907)" stroke="currentcolor" stroke-width="1.01408" d="M29.6067 51.3907 L50.373400000000004 51.3907 L50.373400000000004 72.1574 L29.6067 72.1574 Z" class="bQDqtfGb_3" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 83.0668px, 86px;"></path>
                                            <path transform="rotate(-90 37.9875 59.7679)" stroke="currentcolor" stroke-width="1.01408" d="M37.9875 59.7679 L58.7542 59.7679 L58.7542 80.5346 L37.9875 80.5346 Z" class="bQDqtfGb_4" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 83.0668px, 86px;"></path>
                                            <style data-made-with="vivus-instant">
                                                .bQDqtfGb_0 {
                                                    stroke-dasharray: 284 286;
                                                    stroke-dashoffset: 285;
                                                    animation: bQDqtfGb_draw 2000ms ease-in-out 0ms forwards;
                                                }

                                                .bQDqtfGb_1 {
                                                    stroke-dasharray: 263 265;
                                                    stroke-dashoffset: 264;
                                                    animation: bQDqtfGb_draw 2000ms ease-in-out 250ms forwards;
                                                }

                                                .bQDqtfGb_2 {
                                                    stroke-dasharray: 84 86;
                                                    stroke-dashoffset: 85;
                                                    animation: bQDqtfGb_draw 2000ms ease-in-out 500ms forwards;
                                                }

                                                .bQDqtfGb_3 {
                                                    stroke-dasharray: 84 86;
                                                    stroke-dashoffset: 85;
                                                    animation: bQDqtfGb_draw 2000ms ease-in-out 750ms forwards;
                                                }

                                                .bQDqtfGb_4 {
                                                    stroke-dasharray: 84 86;
                                                    stroke-dashoffset: 85;
                                                    animation: bQDqtfGb_draw 2000ms ease-in-out 1000ms forwards;
                                                }

                                                @keyframes bQDqtfGb_draw {
                                                    100% {
                                                        stroke-dashoffset: 0;
                                                    }
                                                }

                                                @keyframes bQDqtfGb_fade {
                                                    0% {
                                                        stroke-opacity: 1;
                                                    }

                                                    94.44444444444444% {
                                                        stroke-opacity: 1;
                                                    }

                                                    100% {
                                                        stroke-opacity: 0;
                                                    }
                                                }
                                            </style>
                                        </svg>
                                    </div>
                                    <h4 class="box-heading">Quick solution</h4>
                                    <p class="mt-3 box-paragraph">Our consultancy excels in providing quick solutions tailored to your business challenges</p>
                                </div>
                            </div>

                            <!-- Call -->
                            <div class="col-md-3">
                                <div class="contact-card">
                                    <div class="contact-icon">
                                        <svg width="80" height="81" viewBox="0 0 80 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M55.9566 12.5783L48.228 7.7002L40.0008 2.9502L7.0918 21.9502V59.9502L40.0008 78.9502L72.9097 59.9502V21.9502L64.6825 17.2002L60.5689 14.8252" stroke="currentcolor" stroke-width="0.997241" class="GZoqilTp_0" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 222.889px, 225px;"></path>
                                            <path d="M29.9767 66.0692L33.319 67.9975L40.0037 71.854L66.7422 56.4279V25.5758L40.0037 10.1497L13.2651 25.5758V56.4279L19.9498 60.2844L25.5437 63.4383" stroke="currentcolor" stroke-width="0.997241" class="GZoqilTp_1" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 180.027px, 183px;"></path>
                                            <path d="M45.2607 37.9136V43.9868L40.001 47.022L34.7432 43.9868V37.9136L40.001 34.8774L45.2607 37.9136Z" stroke="currentcolor" stroke-width="0.997241" class="GZoqilTp_2" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 36.4346px, 39px;"></path>
                                            <path d="M40.0009 38.4575L42.16 39.7041V42.1972L40.0009 43.4437L37.8418 42.1972V39.7041L40.0009 38.4575Z" fill="currentcolor" class="GZoqilTp_3" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 14.9586px, 17px;"></path>
                                            <path stroke="currentcolor" stroke-width="0.997241" d="M39.5053,35.1326L39.5053,21.005" class="GZoqilTp_4" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 14.1276px, 17px;"></path>
                                            <path stroke="currentcolor" stroke-width="0.997241" d="M45.8203,40.4516L59.9479,40.4516" class="GZoqilTp_5" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 14.1276px, 17px;"></path>
                                            <path stroke="currentcolor" stroke-width="0.997241" d="M20.0527,40.4516L34.1803,40.4516" class="GZoqilTp_6" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 14.1276px, 17px;"></path>
                                            <path stroke="currentcolor" stroke-width="0.997241" d="M40.3295,60.895L40.3295,46.7674" class="GZoqilTp_7" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 14.1276px, 17px;"></path>
                                            <style data-made-with="vivus-instant">
                                                .GZoqilTp_0 {
                                                    stroke-dasharray: 223 225;
                                                    stroke-dashoffset: 224;
                                                    animation: GZoqilTp_draw 2000ms ease-in-out 0ms forwards;
                                                }

                                                .GZoqilTp_1 {
                                                    stroke-dasharray: 181 183;
                                                    stroke-dashoffset: 182;
                                                    animation: GZoqilTp_draw 2000ms ease-in-out 142ms forwards;
                                                }

                                                .GZoqilTp_2 {
                                                    stroke-dasharray: 37 39;
                                                    stroke-dashoffset: 38;
                                                    animation: GZoqilTp_draw 2000ms ease-in-out 285ms forwards;
                                                }

                                                .GZoqilTp_3 {
                                                    stroke-dasharray: 15 17;
                                                    stroke-dashoffset: 16;
                                                    animation: GZoqilTp_draw 2000ms ease-in-out 428ms forwards;
                                                }

                                                .GZoqilTp_4 {
                                                    stroke-dasharray: 15 17;
                                                    stroke-dashoffset: 16;
                                                    animation: GZoqilTp_draw 2000ms ease-in-out 571ms forwards;
                                                }

                                                .GZoqilTp_5 {
                                                    stroke-dasharray: 15 17;
                                                    stroke-dashoffset: 16;
                                                    animation: GZoqilTp_draw 2000ms ease-in-out 714ms forwards;
                                                }

                                                .GZoqilTp_6 {
                                                    stroke-dasharray: 15 17;
                                                    stroke-dashoffset: 16;
                                                    animation: GZoqilTp_draw 2000ms ease-in-out 857ms forwards;
                                                }

                                                .GZoqilTp_7 {
                                                    stroke-dasharray: 15 17;
                                                    stroke-dashoffset: 16;
                                                    animation: GZoqilTp_draw 2000ms ease-in-out 1000ms forwards;
                                                }

                                                @keyframes GZoqilTp_draw {
                                                    100% {
                                                        stroke-dashoffset: 0;
                                                    }
                                                }

                                                @keyframes GZoqilTp_fade {
                                                    0% {
                                                        stroke-opacity: 1;
                                                    }

                                                    94.44444444444444% {
                                                        stroke-opacity: 1;
                                                    }

                                                    100% {
                                                        stroke-opacity: 0;
                                                    }
                                                }
                                            </style>
                                        </svg>
                                    </div>
                                    <h4 class="box-heading">Expert advice</h4>
                                    <p class="mt-3 box-paragraph">Our consultancy excels in providing quick solutions tailored to your business challenges</p>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="col-md-3">
                                <div class="contact-card">
                                    <div class="contact-icon">
                                        <svg width="80" height="81" viewBox="0 0 80 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke="currentcolor" d="M 40.5,5.5 L 40.5,5.5 A 35,35,0,0,1,75.5,40.5 L 75.5,40.5 A 35,35,0,0,1,40.5,75.5 L 40.5,75.5 A 35,35,0,0,1,5.5,40.5 L 5.5,40.5 A 35,35,0,0,1,40.5,5.5" class="GAqZQeDS_0" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 219.942px, 222px;"></path>
                                            <path stroke="currentcolor" d="M 40.5,13.5 L 40.5,13.5 A 27,27,0,0,1,67.5,40.5 L 67.5,40.5 A 27,27,0,0,1,40.5,67.5 L 40.5,67.5 A 27,27,0,0,1,13.5,40.5 L 13.5,40.5 A 27,27,0,0,1,40.5,13.5" class="GAqZQeDS_1" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 169.67px, 172px;"></path>
                                            <path stroke="currentcolor" d="M 40.5,22.5 L 40.5,22.5 A 18,18,0,0,1,58.5,40.5 L 58.5,40.5 A 18,18,0,0,1,40.5,58.5 L 40.5,58.5 A 18,18,0,0,1,22.5,40.5 L 22.5,40.5 A 18,18,0,0,1,40.5,22.5" class="GAqZQeDS_2" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 113.113px, 116px;"></path>
                                            <path stroke="currentcolor" d="M 40.5,37.5 L 40.5,37.5 A 19,19,0,0,1,59.5,56.5 L 59.5,56.5 A 19,19,0,0,1,40.5,75.5 L 40.5,75.5 A 19,19,0,0,1,21.5,56.5 L 21.5,56.5 A 19,19,0,0,1,40.5,37.5" class="GAqZQeDS_3" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 119.397px, 122px;"></path>
                                            <style data-made-with="vivus-instant">
                                                .GAqZQeDS_0 {
                                                    stroke-dasharray: 220 222;
                                                    stroke-dashoffset: 221;
                                                    animation: GAqZQeDS_draw 2000ms ease-in-out 0ms forwards;
                                                }

                                                .GAqZQeDS_1 {
                                                    stroke-dasharray: 170 172;
                                                    stroke-dashoffset: 171;
                                                    animation: GAqZQeDS_draw 2000ms ease-in-out 333ms forwards;
                                                }

                                                .GAqZQeDS_2 {
                                                    stroke-dasharray: 114 116;
                                                    stroke-dashoffset: 115;
                                                    animation: GAqZQeDS_draw 2000ms ease-in-out 666ms forwards;
                                                }

                                                .GAqZQeDS_3 {
                                                    stroke-dasharray: 120 122;
                                                    stroke-dashoffset: 121;
                                                    animation: GAqZQeDS_draw 2000ms ease-in-out 1000ms forwards;
                                                }

                                                @keyframes GAqZQeDS_draw {
                                                    100% {
                                                        stroke-dashoffset: 0;
                                                    }
                                                }

                                                @keyframes GAqZQeDS_fade {
                                                    0% {
                                                        stroke-opacity: 1;
                                                    }

                                                    94.44444444444444% {
                                                        stroke-opacity: 1;
                                                    }

                                                    100% {
                                                        stroke-opacity: 0;
                                                    }
                                                }
                                            </style>
                                        </svg>
                                    </div>
                                    <h4 class="box-heading">Strategic planning</h4>
                                    <p class="mt-3 box-paragraph">
                                        Our consultancy excels in providing quick solutions tailored to your business challenges
                                    </p>
                                </div>
                            </div>

                            <!-- Live Chat -->
                            <div class="col-md-3">
                                <div class="contact-card">
                                    <div class="contact-icon">
                                        <svg width="80" height="81" viewBox="0 0 80 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M64 10L77.5 39L64 70.5H35L48.5 39L35 10H14.5L2 39L14.5 70.5H25" stroke="currentcolor" class="idsUcHxq_0" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 257.987px, 260px;"></path>
                                            <path d="M32 39.1488L27.9355 48H21.7634L18 39.1488L21.7634 31H27.9355L32 39.1488Z" stroke="currentcolor" class="idsUcHxq_1" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 49.7841px, 52px;"></path>
                                            <path d="M54.7559 39.4811L63.9362 39.4361L49.9626 70.6671" stroke="currentcolor" class="idsUcHxq_2" style="opacity: 1; visibility: visible; stroke-dashoffset: 0px; stroke-dasharray: 43.395px, 46px;"></path>
                                            <style data-made-with="vivus-instant">
                                                .idsUcHxq_0 {
                                                    stroke-dasharray: 258 260;
                                                    stroke-dashoffset: 259;
                                                    animation: idsUcHxq_draw 2000ms ease-in-out 0ms forwards;
                                                }

                                                .idsUcHxq_1 {
                                                    stroke-dasharray: 50 52;
                                                    stroke-dashoffset: 51;
                                                    animation: idsUcHxq_draw 2000ms ease-in-out 500ms forwards;
                                                }

                                                .idsUcHxq_2 {
                                                    stroke-dasharray: 44 46;
                                                    stroke-dashoffset: 45;
                                                    animation: idsUcHxq_draw 2000ms ease-in-out 1000ms forwards;
                                                }

                                                @keyframes idsUcHxq_draw {
                                                    100% {
                                                        stroke-dashoffset: 0;
                                                    }
                                                }

                                                @keyframes idsUcHxq_fade {
                                                    0% {
                                                        stroke-opacity: 1;
                                                    }

                                                    94.44444444444444% {
                                                        stroke-opacity: 1;
                                                    }

                                                    100% {
                                                        stroke-opacity: 0;
                                                    }
                                                }
                                            </style>
                                        </svg>
                                    </div>
                                    <h4 class="box-heading">Efficient operations</h4>
                                    <p class="mt-3 box-paragraph">Our consultancy excels in providing quick solutions tailored to your business challenges</p>
                                </div>
                            </div>

                        </div>

                        <section class="tj-evolute-area" style="margin-top:150px;">
                            <div class="container-xxl-fluid  p-0 d-none d-xxl-block">
                                <div class="row g-0">
                                    <div class="col-lg-7">
                                        <div class="tj-evolute">
                                            <span class="tj-evolute-title mb-30 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp; opacity: 1;"><i class="tji-star-2"></i>Our evolution</span>
                                            <div class="desc mb-60 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; opacity: 1;">
                                                "Founded in 2021 by Nipuna Wahalathanthri en. our firm started with our great vision to bring
                                                innovative solutions of businesses facing unprecedented challenges. That began as a small
                                                consultings firm quickly evolved into a trusted partner for companies around the globe . Our
                                                journey into began with a simple idea thats offer unparalleled consulting services empower Our
                                                core values of integrity, innovation, and excellence guide everything we do leading the wave in
                                                consulting's."
                                            </div>
                                            <div class="tj-evolute-counter">
                                                <div class="counter-item">
                                                    <div class="number"><span class="odometer odometer-auto-theme" data-count="93">
                                                            <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span></div>
                                                        </span>%</div>
                                                    <span class="sub-title">Complete project</span>
                                                </div>
                                                <div class="counter-item">
                                                    <div class="number"><span class="odometer odometer-auto-theme" data-count="20">
                                                            <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div>
                                                        </span>M</div>
                                                    <span class="sub-title">Reach worldwide</span>
                                                </div>
                                                <div class="counter-item">
                                                    <div class="number"><span class="odometer odometer-auto-theme" data-count="8">
                                                            <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span></div>
                                                        </span>.5x</div>
                                                    <span class="sub-title">Faster growth</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="tj-evolute-image hover:shine">
                                            <img src="assets/images/NipunaWithShiekofujera.png" alt="evolute">
                                            <div class="about-video-box style-2">
                                                <div class="video-box">
                                                    <a class="circle video-popup vbox-item" data-autoplay="true" data-vbtype="video" data-maxwidth="1200px" href="https://www.youtube.com/watch?v=GGf1JjSAKP4"><i class="fa-sharp fa-solid fa-play"></i>
                                                    </a>
                                                </div>
                                                <span class="sub-title">Click for watch</span>
                                                <h5 class="title">See our latest video</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container d-xxl-none">
                                <div class="row rg-50 align-items-center">
                                    <div class="col-xl-6 col-12">
                                        <div class="tj-evolute">
                                            <span class="tj-evolute-title mb-30"><i class="tji-star-2"></i>Our evolution</span>
                                            <div class="desc mb-60">
                                                "Founded in 2002 by Burdee Ncolase en. our firm started with our great vision to bring
                                                innovative solutions of businesses facing unprecedented challenges. That began as a small
                                                consultings firm quickly evolved into a trusted partner for companies around the globe . Our
                                                journey into began with a simple idea thats offer unparalleled consulting services empower Our
                                                core values of integrity, innovation, and excellence guide everything we do leading the wave in
                                                consulting's."
                                            </div>
                                            <div class="tj-evolute-counter">
                                                <div class="counter-item">
                                                    <div class="number"><span class="odometer odometer-auto-theme" data-count="93">
                                                            <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">9</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">3</span></span></span></span></span></div>
                                                        </span>%</div>
                                                    <span class="sub-title">Complete project</span>
                                                </div>
                                                <div class="counter-item">
                                                    <div class="number"><span class="odometer odometer-auto-theme" data-count="20">
                                                            <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div>
                                                        </span>M</div>
                                                    <span class="sub-title">Reach worldwide</span>
                                                </div>
                                                <div class="counter-item">
                                                    <div class="number"><span class="odometer odometer-auto-theme" data-count="8">
                                                            <div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span></div>
                                                        </span>.5x</div>
                                                    <span class="sub-title">Faster growth</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-12">
                                        <div class="tj-evolute-image">
                                            <img src="assets/images/footer.png" alt="evolute">
                                            <div class="about-video-box style-2">
                                                <div class="video-box">
                                                    <a class="circle video-popup vbox-item" data-autoplay="true" data-vbtype="video" data-maxwidth="1200px" href="https://www.youtube.com/watch?v=GGf1JjSAKP4"><i class="fa-sharp fa-solid fa-play"></i>
                                                    </a>
                                                </div>
                                                <span class="sub-title">Click for watch</span>
                                                <h5 class="title">See our latest video</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>
            </div>

            <div class="col-12 p-5 mt-5" style="background-color: #333;">
                <div class="row justify-content-center align-content-center">
                    <div class="col-lg-9 col-md-12 justify-content-center align-content-center">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class=" fw-bold d-flex align-items-center justify-content-start gap-2 gold-text">
                                        <span>•</span>
                                        ABOUT OUR COMPANY
                                        <span>•</span>
                                    </p>
                                    <h1 class="heading-black text-white">Crafting success tailored solution for each & every challenges</h1>

                                </div>
                                <div class="col-lg-6">
                                    <p class="mt-4 paragraph-dark text-white">Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value through our strategic inset, innovative approaches. Our mission is to empower businesses of all sizes to thrive. </br>
                                    </p>
                                </div>
                                <img src="assets/images/pages/map.png" alt="signature" class="mt-5" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row justify-content-center align-content-center">
                    <div class="col-lg-10 p-5 mt-5">
                        <div class="row justify-content-center align-content-center">
                            <div class="col-lg-9 col-md-12 justify-content-center align-content-center">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <h1 class="heading-black text-center">International expansion <br />
                                                consultants <span style="color: #e3be42ff;">trusted by over 100 companies</span></h1>

                                        </div>
                                    </div>
                                </div>

                                <div class="row text-center justify-content-center mt-4">
                                    <div class="col-4 col-md-2 py-3">
                                        <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
                                    </div>
                                    <div class="col-4 col-md-2 py-3">
                                        <img src="assets/images/partners/blueskies.png" style="width:100%; object-fit:contain;">
                                    </div>
                                    <div class="col-4 col-md-2 py-3">
                                        <img src="assets/images/partners/crisalion.png" style="width:100%; object-fit:contain;">
                                    </div>
                                    <div class="col-4 col-md-2 py-3">
                                        <img src="assets/images/partners/kookiejar.png" style="width:100%; object-fit:contain;">
                                    </div>
                                    <div class="col-4 col-md-2 py-3">
                                        <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
                                    </div>

                                    <!-- Row 2 -->
                                    <div class="col-4 col-md-2 py-3">
                                        <img src="assets/images/partners/Airchateau.png" style="width:100%; object-fit:contain;">
                                    </div>
                                    <div class="col-4 col-md-2 py-3">
                                        <img src="assets/images/partners/blueskies.png" style="width:100%; object-fit:contain;">
                                    </div>
                                    <div class="col-4 col-md-2 py-3">
                                        <img src="assets/images/partners/crisalion.png" style="width:100%; object-fit:contain;">
                                    </div>
                                    <div class="col-4 col-md-2 py-3">
                                        <img src="assets/images/partners/kookiejar.png" style="width:100%; object-fit:contain;">
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

                            <div class="container py-5">

                                <!-- Title -->
                                <div class="d-flex justify-content-between align-items-center mb-4">
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
                                                <p class="mt-4 paragraph-dark">Our mission is to empowers businesses off all size to thrive in an businesses ever changing marketplace. We are committed to the delivering exceptional in the value through our strategic inset. </br>
                                                    <a href="#" style="font-size:14px; color:#1a73e8; text-decoration:none;">See all posts</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Featured Post -->
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <img src="assets/images/dubai.png"
                                            style="width:100%; height:300px; object-fit:cover;">
                                    </div>

                                    <div class="col-md-6 d-flex flex-column justify-content-start">
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
                                            style="width:100%; height:240px; object-fit:cover; ">
                                        <small style="color:#666; display:block; margin-top:10px;">30 Mar 2024</small>
                                        <h6 style="font-weight:700; margin-top:5px;">
                                            International Marketing and Sales : Creating a Powerful LinkedIn Profile for Export Success
                                        </h6>
                                        <p style="color:#666; font-size:14px;">
                                            At Explore Markets, we specialize in supporting businesses expanding into Central
                                            and Eastern Europe (CEE).
                                        </p>
                                        <a href="#" class="btn btn-outline-dark rounded-pill"
                                            style="width:max-content; padding:5px 15px;">
                                            Read More
                                        </a>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="col-md-4">
                                        <img src="assets/images/dubai.png"
                                            style="width:100%; height:240px; object-fit:cover; ">
                                        <small style="color:#666; display:block; margin-top:10px;">30 Mar 2024</small>
                                        <h6 style="font-weight:700; margin-top:5px;">
                                            International Marketing and Sales : Creating a Powerful LinkedIn Profile for Export Success
                                        </h6>
                                        <p style="color:#666; font-size:14px;">
                                            At Explore Markets, we specialize in supporting businesses expanding into Central
                                            and Eastern Europe (CEE).
                                        </p>
                                        <a href="#" class="btn btn-outline-dark rounded-pill"
                                            style="width:max-content; padding:5px 15px;">
                                            Read More
                                        </a>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="col-md-4">
                                        <img src="assets/images/dubai.png"
                                            style="width:100%; height:240px; object-fit:cover;">
                                        <small style="color:#666; display:block; margin-top:10px;">30 Mar 2024</small>
                                        <h6 style="font-weight:700; margin-top:5px;">
                                            International Marketing and Sales : Creating a Powerful LinkedIn Profile for Export Success
                                        </h6>
                                        <p style="color:#666; font-size:14px;">
                                            At Explore Markets, we specialize in supporting businesses expanding into Central
                                            and Eastern Europe (CEE).
                                        </p>
                                        <a href="#" class="btn btn-outline-dark rounded-pill"
                                            style="width:max-content; padding:5px 15px;">
                                            Read More
                                        </a>
                                    </div>
                                </div>

                            </div>


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