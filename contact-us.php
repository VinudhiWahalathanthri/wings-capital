<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- UIkit -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.10/dist/css/uikit.min.css" />

    <style>
        /* Only small required styles */
        .contact-card {
            border: 1px solid #e7e7e7;
            border-radius: 8px;
            padding: 40px 20px;
            text-align: center;
            background: #fff;
        }

        .contact-icon {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: #eaf2ff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            margin-bottom: 20px;
        }

        .map-box iframe {
            width: 100%;
            height: 500px;
            border: 0;
        }
    </style>
</head>

<body>


    <div class="container-fluid">
        <div class="row">

            <?php include 'header.php'; ?>

            <div class="col-12 justify-content-center align-items-center text-center" style="background-color:#f1f6f5;height:300px;">
                <div class="row">
                    <div class="col-12" style="background-color:#f1f6f5;">
                        <div class="row justify-content-center align-items-center h-100" uk-scrollspy="target: > div; cls: uk-animation-slide-top; delay: 500">
                            <div class="col-md-6 col-sm-8 col-10  text-center p-5 ">

                                <h1 class="fw-bold" style="font-family: Royce;">Shopping Cart</h1>
                                <p><a href="home.php" class="text-decoration-none text-secondary">Home / Shopping Cart</a> / Cart Details</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Top Section -->
            <div class="container text-center mt-5">


                <p class="text-primary fw-bold">• CONTACT US •</p>
                <h1 class="fw-bold">Our contact information</h1>

                <div class="row mt-5 g-4">

                    <!-- Email -->
                    <div class="col-md-3">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <span uk-icon="icon: mail; ratio: 2"></span>
                            </div>
                            <h4 class="fw-bold">Email us</h4>
                            <p>solvior@gmail.com<br>support@gmail.com</p>
                        </div>
                    </div>

                    <!-- Call -->
                    <div class="col-md-3">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <span uk-icon="icon: receiver; ratio: 2"></span>
                            </div>
                            <h4 class="fw-bold">Call us</h4>
                            <p>+526-8214-5622<br>+226-3565-2552</p>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="col-md-3">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <span uk-icon="icon: location; ratio: 2"></span>
                            </div>
                            <h4 class="fw-bold">Our Location</h4>
                            <p>
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
                            <p>livechat@solvior.com<br><a href="#" class="text-primary">Need help?</a></p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Bottom Section -->
            <div class="container mt-5">
                <div class="row g-4">

                    <!-- Form -->
                    <div class="col-lg-6 p-4" style="border:1px solid #e7e7e7; border-radius:8px;">
                        <h2 class="fw-bold mb-4">
                            Feel free to <span class="text-primary">get in touch</span> or visit our location.
                        </h2>

                        <form>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Full name*</label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Email address*</label>
                                    <input type="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Phone number*</label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Choose a option</label>
                                    <select class="form-select">
                                        <option selected disabled>Select</option>
                                        <option>General Inquiry</option>
                                        <option>Support</option>
                                        <option>Feedback</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Type message</label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>

                            <button class="btn btn-primary px-5 py-2 d-flex align-items-center" style="border-radius:40px;">
                                <span uk-icon="icon: arrow-right"></span>
                                <span class="ms-2">Send message</span>
                            </button>

                        </form>
                    </div>

                    <!-- Map -->
                    <div class="col-lg-6 map-box">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48319.26803365535!2d-74.026675!3d40.713955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250b864eaa23f%3A0xbbb6b7f02dc045a!2sNew%20York%2C%20USA!5e0!3m2!1sen!2slk!4v1700000000000"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
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