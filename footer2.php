<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultant Footer</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }

        .cta-banner {
            background: linear-gradient(135deg, #0066ff 0%, #0052cc 100%);
            padding: 50px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-banner::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 15s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .cta-banner h1 {
            color: white;
            font-size: 4rem;
            font-weight: 700;
            margin: 0;
            letter-spacing: 2px;
            position: relative;
            z-index: 1;
        }

        .cta-button {
            background: white;
            color: #0066ff;
            border: none;
            padding: 15px 35px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            position: absolute;
            right: 80px;
            top: 50%;
            transform: translateY(-50%);
            transition: all 0.3s ease;
            z-index: 2;
        }

        .cta-button:hover {
            transform: translateY(-50%) scale(1.05);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .cta-button .icon {
            width: 30px;
            height: 30px;
            background: #0066ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .footer-main {
            background: #0a1628;
            color: #8b96a5;
            padding: 60px 0 40px;
        }

        .footer-title {
            color: white;
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .office-section h6 {
            color: #6b7b94;
            font-size: 0.9rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .office-section p {
            margin-bottom: 8px;
            line-height: 1.6;
            color: #8b96a5;
        }

        .office-section .phone {
            color: white;
            font-weight: 500;
        }

        .office-divider {
            margin: 30px 0;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #8b96a5;
            text-decoration: none;
            transition: color 0.3s ease;
            display: inline-block;
        }

        .footer-links a:hover {
            color: white;
        }

        .new-badge {
            background: #0066ff;
            color: white;
            font-size: 0.65rem;
            padding: 2px 8px;
            border-radius: 10px;
            margin-left: 8px;
            font-weight: 700;
        }

        .newsletter-section {
            background: #0f1f38;
            padding: 40px;
            border-radius: 10px;
        }

        .newsletter-input {
            background: #1a2d4d;
            border: 1px solid #2a3f5f;
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            width: 100%;
        }

        .newsletter-input::placeholder {
            color: #6b7b94;
        }

        .newsletter-input:focus {
            outline: none;
            border-color: #0066ff;
            background: #1a2d4d;
        }

        .newsletter-button {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: #0066ff;
            border: none;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s ease;
        }

        .newsletter-button:hover {
            background: #0052cc;
        }

        .go-top {
            position: fixed;
            right: 30px;
            bottom: 30px;
            background: #1a2d4d;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 8px;
            border: 1px solid #2a3f5f;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 0.7rem;
            transition: all 0.3s ease;
            writing-mode: vertical-rl;
            text-orientation: mixed;
        }

        .go-top:hover {
            background: #0066ff;
            border-color: #0066ff;
        }

        .footer-bottom {
            background: #060f1f;
            padding: 25px 0;
            margin-top: 40px;
        }

        .footer-bottom .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .copyright {
            color: #6b7b94;
            margin: 0;
        }

        .copyright strong {
            color: white;
        }

        .social-icons {
            display: flex;
            gap: 15px;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background: #1a2d4d;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8b96a5;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #0066ff;
            color: white;
        }

        .footer-bottom-links {
            display: flex;
            gap: 20px;
            margin: 0;
            list-style: none;
            padding: 0;
        }

        .footer-bottom-links a {
            color: #8b96a5;
            text-decoration: none;
        }

        .footer-bottom-links a:hover {
            color: white;
        }

        @media (max-width: 768px) {
            .cta-banner h1 {
                font-size: 2.5rem;
            }
            
            .cta-button {
                position: static;
                transform: none;
                margin-top: 30px;
            }
            
            .cta-button:hover {
                transform: scale(1.05);
            }

            .footer-bottom .container {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- CTA Banner -->
    <div class="cta-banner">
        <h1>GET CONSULTANT NOW!</h1>
        <button class="cta-button">
            <span class="icon">+</span>
            Lets talk now
        </button>
    </div>

    <!-- Main Footer -->
    <footer class="footer-main">
        <div class="container">
            <div class="row">
                <!-- Our Offices -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-title">Our offices</h5>
                    <div class="office-section">
                        <h6>Headquarters - USA</h6>
                        <p>993 Renner Burg, West Rond,<br>MT 94251-030</p>
                        <p class="phone">+1 (009) 544-7818</p>
                    </div>
                    <div class="office-divider"></div>
                    <div class="office-section">
                        <h6>Operations - Canada</h6>
                        <p>Suite 452 8082 Boner Parge,<br>Elviraton, CA 48998</p>
                    </div>
                </div>

                <!-- Resources -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-title">Resourses</h5>
                    <ul class="footer-links">
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Recognitions</a></li>
                        <li><a href="#">Careers <span class="new-badge">NEW</span></a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Error 404</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-title">Services</h5>
                    <ul class="footer-links">
                        <li><a href="#">Strategic planning</a></li>
                        <li><a href="#">Market research</a></li>
                        <li><a href="#">Business process</a></li>
                        <li><a href="#">Financial management</a></li>
                        <li><a href="#">Change management</a></li>
                        <li><a href="#">IT consulting</a></li>
                        <li><a href="#">Leadership</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="newsletter-section">
                        <h5 class="footer-title">Subscribe to our newsletter</h5>
                        <div style="position: relative;">
                            <input type="email" class="newsletter-input" placeholder="Enter email">
                            <button class="newsletter-button">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <p class="copyright">© 2025 <strong>Solvior</strong> All right reserved.</p>
            <div class="social-icons">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <ul class="footer-bottom-links">
                <li><a href="#">Policy & privacy</a></li>
                <li><a href="#">Terms & conditions</a></li>
            </ul>
        </div>
    </div>

    <!-- Go to Top Button -->
    <div class="go-top">
        <i class="fas fa-arrow-up"></i>
        <span style="margin-top: 5px; font-size: 0.6rem;">GO TOP</span>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>