<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultant Footer</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Lato', sans-serif;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lato';
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #ffe600de 0%, #0052cc 100%);
            padding: 60px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -10%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .cta-section::after {
            content: '';
            position: absolute;
            bottom: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .cta-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .cta-title {
            font-size: 56px;
            font-weight: 700;
            color: white;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: white;
            color: #0a0e1a;
            padding: 18px 36px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .cta-icon {
            width: 24px;
            height: 24px;
            background: #0066ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
        }

        /* Footer Section */
        .footer {
            background: #0a0e1a;
            padding: 80px 20px 0;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 60px;
            padding-bottom: 60px;
            border-bottom: 1px solid #1a1f2e;
        }

        .footer-column h3 {
            color: white;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 16px;
        }

        .footer-column ul li a {
            color: #8892a6;
            text-decoration: none;
            font-size: 15px;
            transition: color 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .footer-column ul li a:hover {
            color: #0066ff;
        }

        .new-badge {
            background: #0066ff;
            color: white;
            font-size: 10px;
            font-weight: 700;
            padding: 3px 8px;
            border-radius: 10px;
            text-transform: uppercase;
        }

        .office-section {
            margin-bottom: 40px;
        }

        .office-label {
            color: #8892a6;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .office-address {
            color: #c5cbd6;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 8px;
        }

        .office-phone {
            color: #c5cbd6;
            font-size: 15px;
        }

        /* Newsletter */
        .newsletter-form {
            position: relative;
        }

        .newsletter-input {
            width: 100%;
            background: #141824;
            border: 1px solid #1a1f2e;
            padding: 16px 50px 16px 20px;
            border-radius: 8px;
            color: white;
            font-size: 15px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .newsletter-input::placeholder {
            color: #4a5568;
        }

        .newsletter-input:focus {
            border-color: #0066ff;
        }

        .newsletter-submit {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            background: #0066ff;
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .newsletter-submit:hover {
            background: #0052cc;
        }

        .newsletter-submit svg {
            width: 20px;
            height: 20px;
            fill: white;
        }

        /* Bottom Bar */
        .footer-bottom {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .copyright {
            color: #8892a6;
            font-size: 14px;
        }

        .copyright strong {
            color: white;
            font-weight: 600;
        }

        .social-links {
            display: flex;
            gap: 12px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: #141824;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8892a6;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #0066ff;
            color: white;
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            color: #8892a6;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #0066ff;
        }

        /* Scroll to Top Button */
        .scroll-top {
            position: fixed;
            bottom: 40px;
            right: 40px;
            width: 50px;
            height: 50px;
            background: #0066ff;
            border: none;
            border-radius: 50%;
            color: white;
            font-size: 12px;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2px;
            transition: all 0.3s ease;
            writing-mode: vertical-rl;
            text-orientation: mixed;
        }

        .scroll-top:hover {
            background: #0052cc;
            transform: translateY(-4px);
        }

        @media (max-width: 1024px) {
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 40px;
            }

            .cta-content {
                flex-direction: column;
                gap: 30px;
            }

            .cta-title {
                font-size: 42px;
            }
        }

        @media (max-width: 640px) {
            .footer-content {
                grid-template-columns: 1fr;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }


        }
    </style>
</head>

<body>
    <section class="cta-section">
        <div class="cta-content">
            <h1 style="font-family: 'Lato';font-weight: 700;color:antiquewhite; font-size: 64px;">GET CONSULTANT NOW!</h1>
            <div class="submit-button justify-content-start align-content-start">
                <button type="submit" class="tj-primary-btn">
                    <span class="btn_inner">
                        <span class="btn_icon">
                            <span>
                                <i class="bi bi-arrow-right"></i>
                                <i class="bi bi-arrow-right"></i>
                            </span>
                        </span>
                        <span class="btn_text"><span>Send message</span></span>
                    </span>
                </button>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <!-- Our offices -->
            <div class="footer-column">
                <h3>Our offices</h3>
                <div class="office-section">
                    <div class="office-label">Headquarters - USA</div>
                    <div class="office-address">993 Renner Burg, West Rond,<br>MT 94251-030</div>
                    <div class="office-phone">+1 (009) 544-7818</div>
                </div>
                <div class="office-section">
                    <div class="office-label">Operations - Canada</div>
                    <div class="office-address">Suite 452 8082 Boner Parge,<br>Elviraton, CA 48998</div>
                </div>
            </div>

            <!-- Resources -->
            <div class="footer-column">
                <h3>Resources</h3>
                <ul style="margin-left: -30px;">
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
            <div class="footer-column">
                <h3>Services</h3>
                <ul style="margin-left: -30px;">
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
            <div class="footer-column">
                <h3>Subscribe to our newsletter</h3>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Enter email">
                    <button type="submit" class="newsletter-submit">
                        <svg viewBox="0 0 24 24">
                            <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="copyright">
                © 2025 <strong>Solvior</strong> All right reserved.
            </div>

            <div class="social-links">
                 <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <div class="footer-links">
                <a href="#">Policy & privacy</a>
                <span style="color: #8892a6;">•</span>
                <a href="#">Terms & conditions</a>
            </div>
        </div>
    </footer>


</body>

</html>