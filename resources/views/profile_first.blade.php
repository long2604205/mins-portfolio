<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Morgan - Marketing Professional & Actor</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --gradient-primary: linear-gradient(135deg, #d2b48c 0%, #deb887 25%, #f5deb3 50%, #deb887 75%, #d2b48c 100%);
            --gradient-secondary: linear-gradient(45deg, #cd853f 0%, #d2b48c 50%, #deb887 100%);
            --gradient-tertiary: linear-gradient(90deg, #a0522d 0%, #cd853f 50%, #d2b48c 100%);
            --gradient-overlay: linear-gradient(135deg, rgba(210, 180, 140, 0.9) 0%, rgba(222, 184, 135, 0.8) 50%, rgba(245, 222, 179, 0.9) 100%);
            --gradient-card: linear-gradient(145deg, rgba(245, 222, 179, 0.3) 0%, rgba(222, 184, 135, 0.2) 100%);
            --text-primary: #4a3728;
            --text-secondary: #6b4e37;
            --text-light: #8b6f47;
            --text-white: #ffffff;
            --shadow-light: 0 5px 15px rgba(74, 55, 40, 0.1);
            --shadow-medium: 0 10px 30px rgba(74, 55, 40, 0.15);
            --shadow-heavy: 0 15px 40px rgba(74, 55, 40, 0.2);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--gradient-primary);
            background-attachment: fixed;
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Navigation Styles */
        .navbar {
            background: var(--gradient-overlay) !important;
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-medium);
            transition: all 0.3s ease;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(74, 55, 40, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--text-primary) !important;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);
        }

        .navbar-nav .nav-link {
            color: var(--text-primary) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
            position: relative;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.2);
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--text-secondary) !important;
            transform: translateY(-1px);
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--gradient-tertiary);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }

        /* Section Styles */
        .section {
            padding: 80px 0;
            background: var(--gradient-primary);
            position: relative;
        }

        .section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--gradient-card);
            pointer-events: none;
        }

        .section-content {
            position: relative;
            z-index: 2;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-primary);
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.3);
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient-tertiary);
            border-radius: 2px;
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: var(--gradient-primary);
            padding: 120px 0 80px;
            position: relative;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--gradient-overlay);
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.3);
        }

        .hero-content .lead {
            font-size: 1.3rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.2);
        }

        .hero-image {
            position: relative;
            z-index: 2;
        }

        .hero-image img {
            border-radius: 20px;
            box-shadow: var(--shadow-heavy);
            transition: transform 0.3s ease;
            border: 3px solid rgba(255, 255, 255, 0.3);
        }

        .hero-image:hover img {
            transform: scale(1.02);
        }

        /* Custom Buttons */
        .btn-custom-primary {
            background: var(--gradient-tertiary);
            border: none;
            color: var(--text-white);
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-medium);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .btn-custom-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-heavy);
            color: var(--text-white);
            filter: brightness(1.1);
        }

        .btn-custom-outline {
            border: 2px solid var(--text-primary);
            color: var(--text-primary);
            padding: 10px 28px;
            border-radius: 50px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .btn-custom-outline:hover {
            background: var(--text-primary);
            color: var(--text-white);
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        /* Card Styles */
        .custom-card {
            background: var(--gradient-card);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: var(--shadow-medium);
            transition: all 0.3s ease;
            margin-bottom: 2rem;
            overflow: hidden;
        }

        .custom-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-heavy);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .custom-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .custom-card:hover img {
            transform: scale(1.05);
        }

        .custom-card .card-body {
            padding: 1.5rem;
            background: var(--gradient-card);
        }

        .custom-card h5 {
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: 1rem;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);
        }

        .custom-card p {
            color: var(--text-secondary);
            margin-bottom: 1rem;
        }

        .custom-card .badge {
            background: var(--gradient-tertiary);
            color: var(--text-white);
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            margin-right: 5px;
            margin-bottom: 5px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        /* Physical Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .stat-item {
            background: var(--gradient-card);
            backdrop-filter: blur(15px);
            padding: 1.5rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: var(--shadow-light);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .stat-item i {
            font-size: 2rem;
            color: var(--text-light);
            margin-bottom: 1rem;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);
        }

        .stat-item h5 {
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: 0.5rem;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);
        }

        .stat-item p {
            color: var(--text-secondary);
            margin: 0;
            font-weight: 500;
        }

        /* Testimonials */
        .testimonial-card {
            background: var(--gradient-card);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-medium);
            text-align: center;
            height: 100%;
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-heavy);
        }

        .testimonial-card .quote {
            font-size: 1.1rem;
            color: var(--text-secondary);
            font-style: italic;
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .testimonial-card .author {
            color: var(--text-primary);
            font-weight: 600;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);
        }

        .testimonial-card .position {
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .testimonial-card .stars {
            color: #b8860b;
            margin-bottom: 1rem;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);
        }

        /* Contact Form */
        .contact-form {
            background: var(--gradient-card);
            backdrop-filter: blur(15px);
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: var(--shadow-medium);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .form-control {
            border-radius: 12px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 12px 15px;
            transition: all 0.3s ease;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            color: var(--text-primary);
        }

        .form-control:focus {
            border-color: var(--text-primary);
            box-shadow: 0 0 0 0.2rem rgba(74, 55, 40, 0.25);
            background: rgba(255, 255, 255, 0.2);
        }

        .form-control::placeholder {
            color: var(--text-light);
        }

        .form-label {
            color: var(--text-primary);
            font-weight: 500;
            margin-bottom: 0.5rem;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);
        }

        /* Social Links */
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: var(--gradient-tertiary);
            color: var(--text-white);
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.2rem;
            box-shadow: var(--shadow-light);
        }

        .social-links a:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-medium);
            filter: brightness(1.1);
        }

        /* Footer */
        .footer {
            background: var(--gradient-overlay);
            backdrop-filter: blur(10px);
            padding: 2rem 0;
            text-align: center;
            color: var(--text-primary);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Carousel Controls */
        .carousel-control-prev,
        .carousel-control-next {
            background: var(--gradient-card);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            top: 50%;
            transform: translateY(-50%);
        }

        .carousel-control-prev {
            left: -25px;
        }

        .carousel-control-next {
            right: -25px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(1);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .section {
                padding: 60px 0;
            }

            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 1rem;
            }

            .hero-section {
                padding: 100px 0 60px;
            }

            .carousel-control-prev,
            .carousel-control-next {
                display: none;
            }
        }

        /* Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Scroll Progress Bar */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: var(--gradient-tertiary);
            z-index: 9999;
            transition: width 0.3s ease;
        }

        /* Skills/Badge Styling */
        .skills-container .badge {
            background: var(--gradient-tertiary);
            color: var(--text-white);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin: 5px;
            display: inline-block;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            box-shadow: var(--shadow-light);
        }

        /* Load More Button Styles */
        .load-more-btn {
            position: relative;
            overflow: hidden;
            min-width: 200px;
            transition: all 0.3s ease;
        }

        .load-more-btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        .load-more-btn .btn-text,
        .load-more-btn .btn-loading {
            transition: all 0.3s ease;
        }

        .load-more-info {
            font-size: 0.9rem;
            color: var(--text-light) !important;
        }

        /* Spin Animation */
        .spin-animation {
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* New Portfolio Cards (initially hidden) */
        .portfolio-card-hidden {
            display: none;
            opacity: 0;
            transform: translateY(30px);
        }

        .portfolio-card-show {
            display: block;
            animation: slideInUp 0.6s ease forwards;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Pulse effect for loading */
        .pulse-effect {
            animation: pulse 1.5s ease-in-out infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* About Me Photo Styles */
        .about-photo {
            position: relative;
            display: inline-block;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-heavy);
            transition: all 0.3s ease;
        }

        .about-photo:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 50px rgba(74, 55, 40, 0.25);
        }

        .about-image {
            border-radius: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
            max-width: 350px;
        }

        .photo-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: var(--gradient-overlay);
            backdrop-filter: blur(10px);
            padding: 1rem;
            transform: translateY(100%);
            transition: all 0.3s ease;
        }

        .about-photo:hover .photo-overlay {
            transform: translateY(0);
        }

        .photo-text h5 {
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: 0.25rem;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);
        }

        .photo-text p {
            color: var(--text-secondary);
            margin: 0;
            font-size: 0.9rem;
        }

        /* About Content Styles */
        .about-content {
            background: var(--gradient-card);
            backdrop-filter: blur(15px);
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--shadow-light);
        }

        .personal-highlights {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 1.5rem;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .highlight-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
            color: var(--text-secondary);
        }

        .highlight-item i {
            font-size: 1.2rem;
            margin-right: 0.75rem;
            color: var(--text-light) !important;
        }

        .highlight-item span {
            font-size: 0.95rem;
        }

        /* Values Section */
        .values-section {
            background: var(--gradient-card);
            backdrop-filter: blur(15px);
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--shadow-light);
        }

        .value-card {
            text-align: center;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            height: 100%;
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .value-icon {
            font-size: 2.5rem;
            color: var(--text-light);
            margin-bottom: 1rem;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);
        }

        .value-card h6 {
            color: var(--text-primary);
            font-weight: 600;
            margin-bottom: 1rem;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);
        }

        .value-card p {
            color: var(--text-secondary);
            font-size: 0.9rem;
            line-height: 1.6;
            margin: 0;
        }

        /* Responsive adjustments for About section */
        @media (max-width: 768px) {
            .about-content {
                padding: 1.5rem;
                margin-top: 2rem;
            }

            .personal-highlights {
                padding: 1rem;
            }

            .values-section {
                padding: 1.5rem;
            }

            .value-card {
                padding: 1rem;
                margin-bottom: 1rem;
            }

            .about-image {
                max-width: 280px;
            }
        }
    </style>
</head>
<body>
<!-- Scroll Progress Bar -->
<div class="scroll-progress"></div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#home">Alex Morgan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#marketing">Marketing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#acting">Acting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Home Section -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="section-content">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="fade-in">Alex Morgan</h1>
                    <p class="lead fade-in">Marketing Strategist & Professional Actor</p>
                    <p class="fade-in">Bringing brands to life through strategic marketing and captivating performances. With a passion for storytelling that bridges the gap between business strategy and creative expression.</p>
                    <div class="d-flex gap-3 flex-wrap fade-in">
                        <a href="#marketing" class="btn btn-custom-primary">View Marketing Work</a>
                        <a href="#acting" class="btn btn-custom-outline">Acting Portfolio</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center hero-image fade-in">
                    <img src="{{ asset('/portfolio/photo/photo_1.png') }}" alt="Alex Morgan Professional Headshot" class="img-fluid" style="max-width: 400px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section">
    <div class="container">
        <div class="section-content">
            <h2 class="section-title fade-in">About Me</h2>

            <!-- Personal Introduction with Photo -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <div class="about-photo fade-in">
                        <img src="{{ asset('portfolio/photo/photo_about.jpg') }}" alt="Alex Morgan - Professional Photo" class="img-fluid about-image">
                        <div class="photo-overlay">
                            <div class="photo-text">
                                <h5>Alex Morgan</h5>
                                <p>Creative Professional</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-content fade-in">
                        <h3 class="mb-3" style="color: var(--text-primary); text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);">My Story</h3>
                        <p class="lead">I'm a versatile creative professional with over 7 years of experience in marketing strategy and 5 years in professional acting. My unique blend of analytical thinking and creative expression allows me to craft compelling narratives that resonate with audiences across all mediums.</p>

                        <p>My journey began in the corporate world, where I discovered my passion for storytelling through brand development and strategic marketing. This naturally evolved into acting, where I found another powerful medium to connect with people and tell meaningful stories.</p>

                        <p>Whether I'm developing a brand campaign that drives measurable results or bringing a character to life on stage or screen, I approach each project with dedication, creativity, and a deep understanding of human psychology and storytelling.</p>

                        <div class="personal-highlights mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="highlight-item">
                                        <i class="bi bi-award text-primary"></i>
                                        <span><strong>7+ Years</strong> Marketing Experience</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="highlight-item">
                                        <i class="bi bi-star text-primary"></i>
                                        <span><strong>5+ Years</strong> Acting Experience</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="highlight-item">
                                        <i class="bi bi-people text-primary"></i>
                                        <span><strong>50+ Clients</strong> Served</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="highlight-item">
                                        <i class="bi bi-camera-reels text-primary"></i>
                                        <span><strong>25+ Productions</strong> Featured In</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Personal Values & Approach -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="values-section fade-in">
                        <h4 class="text-center mb-4" style="color: var(--text-primary); text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);">My Approach</h4>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="value-card">
                                    <i class="bi bi-lightbulb value-icon"></i>
                                    <h6>Creative Innovation</h6>
                                    <p>Bringing fresh perspectives and innovative solutions to every project, whether it's a marketing campaign or a character portrayal.</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="value-card">
                                    <i class="bi bi-graph-up value-icon"></i>
                                    <h6>Results-Driven</h6>
                                    <p>Focused on delivering measurable outcomes and meaningful impact in both marketing strategies and artistic performances.</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="value-card">
                                    <i class="bi bi-heart value-icon"></i>
                                    <h6>Authentic Connection</h6>
                                    <p>Building genuine connections with audiences, clients, and collaborators through honest storytelling and transparent communication.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Physical Stats Subsection -->
            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="text-center mb-4 fade-in" style="color: var(--text-primary); text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.3);">Physical Stats</h3>
                    <div class="stats-grid">
                        <div class="stat-item fade-in">
                            <i class="bi bi-rulers"></i>
                            <h5>Height</h5>
                            <p>5'9" (175 cm)</p>
                        </div>
                        <div class="stat-item fade-in">
                            <i class="bi bi-speedometer2"></i>
                            <h5>Weight</h5>
                            <p>165 lbs (75 kg)</p>
                        </div>
                        <div class="stat-item fade-in">
                            <i class="bi bi-palette"></i>
                            <h5>Hair Color</h5>
                            <p>Dark Brown</p>
                        </div>
                        <div class="stat-item fade-in">
                            <i class="bi bi-eye"></i>
                            <h5>Eye Color</h5>
                            <p>Hazel</p>
                        </div>
                        <div class="stat-item fade-in">
                            <i class="bi bi-person-badge"></i>
                            <h5>Build</h5>
                            <p>Athletic</p>
                        </div>
                        <div class="stat-item fade-in">
                            <i class="bi bi-globe"></i>
                            <h5>Ethnicity</h5>
                            <p>Caucasian</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skills Section -->
            <div class="row mt-5">
                <div class="col-md-6 fade-in">
                    <h4 class="mb-3" style="color: var(--text-primary); text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);">Marketing Expertise</h4>
                    <div class="skills-container">
                        <span class="badge">Digital Strategy</span>
                        <span class="badge">Brand Development</span>
                        <span class="badge">Content Marketing</span>
                        <span class="badge">Social Media</span>
                        <span class="badge">Campaign Management</span>
                        <span class="badge">Analytics & ROI</span>
                        <span class="badge">Market Research</span>
                        <span class="badge">Creative Direction</span>
                    </div>
                </div>
                <div class="col-md-6 fade-in">
                    <h4 class="mb-3" style="color: var(--text-primary); text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.3);">Acting Skills</h4>
                    <div class="skills-container">
                        <span class="badge">Method Acting</span>
                        <span class="badge">Voice Acting</span>
                        <span class="badge">Stage Performance</span>
                        <span class="badge">Commercial Acting</span>
                        <span class="badge">Improvisation</span>
                        <span class="badge">Character Development</span>
                        <span class="badge">Script Analysis</span>
                        <span class="badge">On-Camera Technique</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Marketing Portfolio -->
<section id="marketing" class="section">
    <div class="container">
        <div class="section-content">
            <h2 class="section-title fade-in">Marketing Portfolio</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="custom-card fade-in">
                        <img src="{{ asset('portfolio/photo/photo_maketing.jpg') }}" alt="Tech Startup Brand Launch">
                        <div class="card-body">
                            <h5>Tech Startup Brand Launch</h5>
                            <p>Complete brand strategy and launch campaign for a fintech startup, resulting in 300% user acquisition growth in 6 months.</p>
                            <div class="mb-2">
                                <span class="badge">Brand Strategy</span>
                                <span class="badge">Digital Marketing</span>
                                <span class="badge">Content Creation</span>
                            </div>
                            <small class="text-muted">ROI: 450% • Duration: 6 months</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="custom-card fade-in">
                        <img src="{{ asset('portfolio/photo/maketing_2.jpg') }}" alt="Viral Social Media Campaign">
                        <div class="card-body">
                            <h5>Viral Social Media Campaign</h5>
                            <p>Created and executed a multi-platform social campaign that reached 5M+ users and generated 100K+ new followers.</p>
                            <div class="mb-2">
                                <span class="badge">Social Media</span>
                                <span class="badge">Viral Marketing</span>
                                <span class="badge">Influencer Relations</span>
                            </div>
                            <small class="text-muted">Reach: 5M+ • Engagement: 12%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="custom-card fade-in">
                        <img src="{{ asset('portfolio/photo/maketing_3.jpg') }}" alt="E-commerce Optimization">
                        <div class="card-body">
                            <h5>E-commerce Optimization</h5>
                            <p>Redesigned customer journey and implemented conversion optimization strategies, increasing sales by 180%.</p>
                            <div class="mb-2">
                                <span class="badge">E-commerce</span>
                                <span class="badge">CRO</span>
                                <span class="badge">UX Strategy</span>
                            </div>
                            <small class="text-muted">Conversion Rate: +180% • Revenue: +$2M</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="custom-card fade-in">
                        <img src="{{ asset('portfolio/photo/maketing_4.jpg') }}" alt="Content Marketing Strategy">
                        <div class="card-body">
                            <h5>Content Marketing Strategy</h5>
                            <p>Developed comprehensive content strategy for B2B SaaS company, increasing organic traffic by 250%.</p>
                            <div class="mb-2">
                                <span class="badge">Content Strategy</span>
                                <span class="badge">SEO</span>
                                <span class="badge">Lead Generation</span>
                            </div>
                            <small class="text-muted">Traffic: +250% • Leads: +400%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="custom-card fade-in">
                        <img src="{{ asset('portfolio/photo/maketing_5.jpg') }}" alt="Complete Brand Overhaul">
                        <div class="card-body">
                            <h5>Complete Brand Overhaul</h5>
                            <p>Led complete rebranding initiative for established retail chain, modernizing their image and increasing market share.</p>
                            <div class="mb-2">
                                <span class="badge">Rebranding</span>
                                <span class="badge">Market Research</span>
                                <span class="badge">Creative Direction</span>
                            </div>
                            <small class="text-muted">Market Share: +15% • Brand Recognition: +60%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="custom-card fade-in">
                        <img src="{{ asset('portfolio/photo/photo_maketing.jpg') }}" alt="Product Launch Event">
                        <div class="card-body">
                            <h5>Product Launch Event</h5>
                            <p>Orchestrated multi-city product launch events with integrated digital campaigns, generating $5M in pre-orders.</p>
                            <div class="mb-2">
                                <span class="badge">Event Marketing</span>
                                <span class="badge">PR</span>
                                <span class="badge">Integrated Campaigns</span>
                            </div>
                            <small class="text-muted">Pre-orders: $5M • Media Coverage: 50+ outlets</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Section for Marketing -->
            <div class="text-center mt-4 fade-in">
                <button id="loadMoreMarketing" class="btn btn-custom-primary load-more-btn">
                    <span class="btn-text">Load More Projects</span>
                    <span class="btn-loading d-none">
                            <i class="bi bi-arrow-clockwise spin-animation"></i>
                            Loading...
                        </span>
                </button>
                <p class="load-more-info mt-2 text-muted">Showing 6 of 12 projects</p>
            </div>
</section>

<!-- Acting Portfolio -->
<section id="acting" class="section">
    <div class="container">
        <div class="section-content">
            <h2 class="section-title fade-in">Acting Portfolio</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="custom-card fade-in">
                        <img src="{{ asset('portfolio/photo/maketing_2.jpg') }}" alt="Hamlet Theater Performance">
                        <div class="card-body">
                            <h5>"Hamlet" - Lead Role</h5>
                            <p>Portrayed the title character in Shakespeare's Hamlet at the prestigious Metropolitan Theater. Critically acclaimed performance with sold-out shows.</p>
                            <div class="mb-2">
                                <span class="badge">Theater</span>
                                <span class="badge">Shakespeare</span>
                                <span class="badge">Lead Role</span>
                            </div>
                            <small class="text-muted">Metropolitan Theater • 2023 • 45 performances</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="custom-card fade-in">
                        <img src="/placeholder.svg?height=250&width=400" alt="National TV Commercial">
                        <div class="card-body">
                            <h5>National TV Commercial</h5>
                            <p>Featured as the lead spokesperson in a national advertising campaign for a major automotive brand, aired during prime time.</p>
                            <div class="mb-2">
                                <span class="badge">Commercial</span>
                                <span class="badge">Spokesperson</span>
                                <span class="badge">National Campaign</span>
                            </div>
                            <small class="text-muted">Ford Motors • 2023 • National broadcast</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="custom-card fade-in">
                        <img src="/placeholder.svg?height=250&width=400" alt="Independent Film City Lights">
                        <div class="card-body">
                            <h5>"City Lights" - Supporting Role</h5>
                            <p>Supporting role in award-winning independent drama that premiered at Sundance Film Festival and won Best Cinematography.</p>
                            <div class="mb-2">
                                <span class="badge">Independent Film</span>
                                <span class="badge">Drama</span>
                                <span class="badge">Festival Circuit</span>
                            </div>
                            <small class="text-muted">Sundance Film Festival • 2022 • Award Winner</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="custom-card fade-in">
                        <img src="/placeholder.svg?height=250&width=400" alt="Downtown Mysteries TV Series">
                        <div class="card-body">
                            <h5>"Downtown Mysteries" - Recurring</h5>
                            <p>Recurring character Detective Sarah Chen in popular crime drama series, appearing in 8 episodes across two seasons.</p>
                            <div class="mb-2">
                                <span class="badge">Television</span>
                                <span class="badge">Crime Drama</span>
                                <span class="badge">Recurring Role</span>
                            </div>
                            <small class="text-muted">NBC • 2021-2022 • 8 episodes</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="custom-card fade-in">
                        <img src="/placeholder.svg?height=250&width=400" alt="Space Adventures Voice Acting">
                        <div class="card-body">
                            <h5>Animated Series Voice Work</h5>
                            <p>Voice of main character Luna in children's animated series "Space Adventures," broadcast on Disney Channel for 3 seasons.</p>
                            <div class="mb-2">
                                <span class="badge">Voice Acting</span>
                                <span class="badge">Animation</span>
                                <span class="badge">Main Character</span>
                            </div>
                            <small class="text-muted">Disney Channel • 2020-2023 • 36 episodes</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="custom-card fade-in">
                        <img src="/placeholder.svg?height=250&width=400" alt="Chicago Musical Theater">
                        <div class="card-body">
                            <h5>"Chicago" - Velma Kelly</h5>
                            <p>Played Velma Kelly in the Broadway revival of Chicago, showcasing singing, dancing, and acting abilities in this iconic role.</p>
                            <div class="mb-2">
                                <span class="badge">Musical Theater</span>
                                <span class="badge">Broadway</span>
                                <span class="badge">Principal Role</span>
                            </div>
                            <small class="text-muted">Broadway Theater • 2021 • 120 performances</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Section for Acting -->
            <div class="text-center mt-4 fade-in">
                <button id="loadMoreActing" class="btn btn-custom-primary load-more-btn">
                    <span class="btn-text">Load More Roles</span>
                    <span class="btn-loading d-none">
                            <i class="bi bi-arrow-clockwise spin-animation"></i>
                            Loading...
                        </span>
                </button>
                <p class="load-more-info mt-2 text-muted">Showing 6 of 10 roles</p>
            </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="section">
    <div class="container">
        <div class="section-content">
            <h2 class="section-title fade-in">What People Say</h2>
            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="testimonial-card fade-in">
                                    <div class="stars mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="quote">"Alex's marketing strategies transformed our brand completely. The ROI we achieved exceeded all expectations, and the creative campaigns were absolutely brilliant."</p>
                                    <div class="author">Sarah Johnson</div>
                                    <div class="position">CEO, TechStart Inc.</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="testimonial-card fade-in">
                                    <div class="stars mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="quote">"Working with Alex on our theater production was incredible. Their dedication to the craft and ability to bring depth to every character is remarkable."</p>
                                    <div class="author">Michael Rodriguez</div>
                                    <div class="position">Theater Director</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="testimonial-card fade-in">
                                    <div class="stars mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="quote">"Alex's performance in our commercial campaign was outstanding. Professional, charismatic, and delivered exactly what we needed for our brand message."</p>
                                    <div class="author">Lisa Chen</div>
                                    <div class="position">Creative Director, AdVantage</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="testimonial-card fade-in">
                                    <div class="stars mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="quote">"The content marketing strategy Alex developed for us increased our organic traffic by 300%. Their understanding of audience psychology is exceptional."</p>
                                    <div class="author">David Park</div>
                                    <div class="position">Marketing Manager, GrowthCo</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="testimonial-card fade-in">
                                    <div class="stars mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="quote">"Alex brought such authenticity to the role. Their preparation and commitment to character development made our film much stronger."</p>
                                    <div class="author">Emma Thompson</div>
                                    <div class="position">Film Director</div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="testimonial-card fade-in">
                                    <div class="stars mb-3">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <p class="quote">"The brand positioning strategy Alex created helped us stand out in a crowded market. Sales increased by 200% in the first quarter alone."</p>
                                    <div class="author">Robert Kim</div>
                                    <div class="position">Founder, RetailMax</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section">
    <div class="container">
        <div class="section-content">
            <h2 class="section-title fade-in">Let's Work Together</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="contact-form fade-in">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="projectType" class="form-label">Project Type</label>
                                <select class="form-control" id="projectType" required>
                                    <option value="">Select Project Type</option>
                                    <option value="marketing">Marketing Consultation</option>
                                    <option value="acting">Acting Opportunity</option>
                                    <option value="both">Both Marketing & Acting</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" required placeholder="Tell me about your project..."></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-custom-primary">Send Message</button>
                            </div>
                        </form>
                    </div>

                    <div class="social-links fade-in">
                        <a href="#" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" title="Twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" title="IMDb"><i class="bi bi-film"></i></a>
                        <a href="#" title="Email"><i class="bi bi-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Alex Morgan. All rights reserved. | Marketing Professional & Actor</p>
    </div>
</footer>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JavaScript -->
<script>
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Active navigation link highlighting
    window.addEventListener('scroll', function() {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.clientHeight;
            if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });
    });

    // Scroll progress bar
    window.addEventListener('scroll', function() {
        const scrollProgress = document.querySelector('.scroll-progress');
        const scrollTop = window.pageYOffset;
        const docHeight = document.body.offsetHeight - window.innerHeight;
        const scrollPercent = (scrollTop / docHeight) * 100;
        scrollProgress.style.width = scrollPercent + '%';
    });

    // Fade in animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe all fade-in elements
    document.querySelectorAll('.fade-in').forEach(el => {
        observer.observe(el);
    });

    // Contact form handling
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form data
        const firstName = document.getElementById('firstName').value;
        const lastName = document.getElementById('lastName').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const projectType = document.getElementById('projectType').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;

        // Simple validation
        if (firstName && lastName && email && projectType && subject && message) {
            // Show success message
            alert(`Thank you, ${firstName}! Your message has been sent successfully. I'll get back to you within 24 hours.`);
            this.reset();
        } else {
            alert('Please fill in all required fields.');
        }
    });

    // Navbar background enhancement on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.style.background = 'linear-gradient(135deg, rgba(210, 180, 140, 0.95) 0%, rgba(222, 184, 135, 0.9) 50%, rgba(245, 222, 179, 0.95) 100%)';
            navbar.style.backdropFilter = 'blur(15px)';
        } else {
            navbar.style.background = 'linear-gradient(135deg, rgba(210, 180, 140, 0.9) 0%, rgba(222, 184, 135, 0.8) 50%, rgba(245, 222, 179, 0.9) 100%)';
            navbar.style.backdropFilter = 'blur(10px)';
        }
    });

    // Auto-advance testimonials carousel
    const testimonialsCarousel = document.getElementById('testimonialsCarousel');
    if (testimonialsCarousel) {
        const carousel = new bootstrap.Carousel(testimonialsCarousel, {
            interval: 6000,
            wrap: true
        });
    }

    // Add subtle parallax effect to hero section
    window.addEventListener('scroll', function() {
        const heroSection = document.getElementById('home');
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.5;

        if (heroSection) {
            heroSection.style.transform = `translateY(${rate}px)`;
        }
    });

    // Initialize all animations on page load
    window.addEventListener('load', function() {
        // Trigger initial fade-in animations
        setTimeout(() => {
            document.querySelectorAll('.fade-in').forEach((el, index) => {
                setTimeout(() => {
                    if (el.getBoundingClientRect().top < window.innerHeight) {
                        el.classList.add('visible');
                    }
                }, index * 100);
            });
        }, 300);
    });

    // Load More Functionality
    const loadMoreButtons = {
        marketing: {
            button: document.getElementById('loadMoreMarketing'),
            currentCount: 6,
            totalCount: 12,
            section: 'marketing'
        },
        acting: {
            button: document.getElementById('loadMoreActing'),
            currentCount: 6,
            totalCount: 10,
            section: 'acting'
        }
    };

    // Additional portfolio data
    const additionalPortfolioData = {
        marketing: [
            {
                image: '/placeholder.svg?height=250&width=400',
                title: 'Mobile App Marketing',
                description: 'Comprehensive mobile app launch strategy resulting in 500K+ downloads in first month.',
                badges: ['App Marketing', 'User Acquisition', 'ASO'],
                stats: 'Downloads: 500K+ • Rating: 4.8/5'
            },
            {
                image: '/placeholder.svg?height=250&width=400',
                title: 'B2B Lead Generation',
                description: 'Developed multi-channel lead generation system increasing qualified leads by 300%.',
                badges: ['B2B Marketing', 'Lead Generation', 'Automation'],
                stats: 'Leads: +300% • Conversion: 25%'
            },
            {
                image: '/placeholder.svg?height=250&width=400',
                title: 'Influencer Campaign',
                description: 'Orchestrated influencer marketing campaign with 50+ creators, reaching 10M+ audience.',
                badges: ['Influencer Marketing', 'Social Media', 'Brand Awareness'],
                stats: 'Reach: 10M+ • Engagement: 8.5%'
            },
            {
                image: '/placeholder.svg?height=250&width=400',
                title: 'Email Marketing Automation',
                description: 'Built automated email sequences increasing customer lifetime value by 150%.',
                badges: ['Email Marketing', 'Automation', 'CRM'],
                stats: 'CLV: +150% • Open Rate: 35%'
            },
            {
                image: '/placeholder.svg?height=250&width=400',
                title: 'Video Marketing Campaign',
                description: 'Created viral video marketing campaign generating 2M+ views and 50K+ shares.',
                badges: ['Video Marketing', 'Viral Content', 'Creative Strategy'],
                stats: 'Views: 2M+ • Shares: 50K+'
            },
            {
                image: '/placeholder.svg?height=250&width=400',
                title: 'International Expansion',
                description: 'Led marketing strategy for international expansion into 5 new markets.',
                badges: ['International Marketing', 'Market Research', 'Localization'],
                stats: 'Markets: 5 • Revenue: +$3M'
            }
        ],
        acting: [
            {
                image: '/placeholder.svg?height=250&width=400',
                title: 'Web Series - "Tech Life"',
                description: 'Lead role in popular web series about startup culture, garnering 1M+ views per episode.',
                badges: ['Web Series', 'Comedy', 'Lead Role'],
                stats: 'YouTube • 2023 • 12 episodes'
            },
            {
                image: '/placeholder.svg?height=250&width=400',
                title: 'Radio Drama Series',
                description: 'Voice acting in award-winning radio drama series broadcast nationally.',
                badges: ['Radio', 'Voice Acting', 'Drama'],
                stats: 'NPR • 2022 • 8 episodes'
            },
            {
                image: '/placeholder.svg?height=250&width=400',
                title: 'Corporate Training Videos',
                description: 'Featured in series of corporate training videos for Fortune 500 companies.',
                badges: ['Corporate', 'Training', 'Spokesperson'],
                stats: 'Multiple Companies • 2021-2023'
            },
            {
                image: '/placeholder.svg?height=250&width=400',
                title: 'Podcast Host',
                description: 'Host of "Creative Minds" podcast featuring interviews with industry professionals.',
                badges: ['Podcast', 'Host', 'Interview'],
                stats: 'Spotify • 2020-Present • 50+ episodes'
            }
        ]
    };

    // Load more functionality
    function setupLoadMore(type) {
        const config = loadMoreButtons[type];
        if (!config.button) return;

        config.button.addEventListener('click', function() {
            loadMoreItems(type);
        });
    }

    function loadMoreItems(type) {
        const config = loadMoreButtons[type];
        const button = config.button;
        const btnText = button.querySelector('.btn-text');
        const btnLoading = button.querySelector('.btn-loading');
        const infoText = button.parentElement.querySelector('.load-more-info');

        // Show loading state
        button.disabled = true;
        button.classList.add('pulse-effect');
        btnText.classList.add('d-none');
        btnLoading.classList.remove('d-none');

        // Simulate loading delay
        setTimeout(() => {
            const portfolioContainer = document.querySelector(`#${type} .row`);
            const additionalItems = additionalPortfolioData[type];
            const itemsToLoad = Math.min(3, additionalItems.length - (config.currentCount - 6));

            // Add new portfolio items
            for (let i = 0; i < itemsToLoad; i++) {
                const itemIndex = (config.currentCount - 6) + i;
                if (itemIndex < additionalItems.length) {
                    const item = additionalItems[itemIndex];
                    const portfolioCard = createPortfolioCard(item);
                    portfolioContainer.appendChild(portfolioCard);

                    // Trigger animation
                    setTimeout(() => {
                        portfolioCard.classList.add('portfolio-card-show');
                    }, i * 100);
                }
            }

            config.currentCount += itemsToLoad;

            // Update info text
            infoText.textContent = `Showing ${config.currentCount} of ${config.totalCount} ${type === 'marketing' ? 'projects' : 'roles'}`;

            // Hide loading state
            button.disabled = false;
            button.classList.remove('pulse-effect');
            btnText.classList.remove('d-none');
            btnLoading.classList.add('d-none');

            // Hide button if all items loaded
            if (config.currentCount >= config.totalCount) {
                button.style.display = 'none';
                infoText.innerHTML = `<i class="bi bi-check-circle text-success"></i> All ${type === 'marketing' ? 'projects' : 'roles'} loaded`;
            }

            // Update button text for remaining items
            const remaining = config.totalCount - config.currentCount;
            if (remaining > 0) {
                btnText.textContent = `Load More ${type === 'marketing' ? 'Projects' : 'Roles'} (${remaining} remaining)`;
            }

        }, 1500); // 1.5 second loading delay for effect
    }

    function createPortfolioCard(item) {
        const col = document.createElement('div');
        col.className = 'col-lg-4 col-md-6 mb-4 portfolio-card-hidden';

        const badgesHtml = item.badges.map(badge => `<span class="badge">${badge}</span>`).join('');

        col.innerHTML = `
                <div class="custom-card fade-in">
                    <img src="${item.image}" alt="${item.title}">
                    <div class="card-body">
                        <h5>${item.title}</h5>
                        <p>${item.description}</p>
                        <div class="mb-2">
                            ${badgesHtml}
                        </div>
                        <small class="text-muted">${item.stats}</small>
                    </div>
                </div>
            `;

        return col;
    }

    // Initialize load more functionality
    setupLoadMore('marketing');
    setupLoadMore('acting');

    // Add smooth scroll to new items
    function scrollToNewItems(container) {
        const newItems = container.querySelectorAll('.portfolio-card-show');
        if (newItems.length > 0) {
            setTimeout(() => {
                newItems[0].scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }, 600);
        }
    }
</script>
</body>
</html>
