<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Bungee+Tint&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">


    <style>
        * {
            box-sizing: border-box;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        body {
            overflow: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        .bg-image {
            background-image: url('https://images.unsplash.com/photo-1459749411175-04bf5292ceea?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            margin-top: 120px;
            padding: 0 1rem;
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }

        .intro-text {
            width: 100%;
            margin-bottom: 2rem;
        }

        .intro-text h1 {
            font-family: "Bungee Tint", sans-serif;
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .intro-text p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .navbar-brand {
            font-family: "Bungee Tint", sans-serif;
            font-size: 2rem;
            color: #ff6b6b !important;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .nav-link {
            font-weight: 600;
            color: white !important;
            padding: 0.5rem 1rem;
            margin: 0 0.3rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1030;
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            max-width: 320px;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .card-img-top {
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-weight: 600;
            color: #ff6b6b;
            margin-bottom: 1rem;
        }

        .card-text {
            color: #555;
            line-height: 1.6;
        }

        footer {
            background-color: rgba(0, 0, 0, 0.85);
            color: white;
            position: relative;
            z-index: 2;
            padding: 3rem 0 2rem;
            margin-top: auto;
        }

        footer h5 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #ff6b6b;
        }

        footer p {
            font-size: 1rem;
            max-width: 600px;
            margin: 0 auto 1.5rem;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: rgb(187, 3, 3);
        }

        .social-icons {
            margin-bottom: 1.5rem;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .social-icons i {
            font-size: 1.2rem;
        }

        .footer-links a {
            margin: 0 15px;
            position: relative;
        }

        .footer-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: rgb(255, 0, 0);
            transition: width 0.3s ease;
        }

        .footer-links a:hover::after {
            width: 100%;
        }

        .cta-btn {
            background-color: rgb(187, 3, 3);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 50px;
            margin-top: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
        }

        .cta-btn:hover {
            background-color: rgb(255, 144, 0);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 107, 107, 0.4);
        }

        @media (max-width: 991px) {
            .navbar-collapse {
                background-color: rgba(0, 0, 0, 0.9);
                padding: 1rem;
                border-radius: 10px;
                margin-top: 0.5rem;
            }

            .nav-link {
                margin: 0.5rem 0;
            }
        }

        @media (max-width: 768px) {
            .intro-text h1 {
                font-size: 2.5rem;
            }

            .intro-text p {
                font-size: 1.1rem;
            }

            .hero-content {
                margin-top: 100px;
                gap: 1.5rem;
            }

            .card {
                max-width: 280px;
            }
        }

        @media (max-width: 576px) {
            .card {
                width: 90%;
                max-width: 320px;
                margin: 0 auto;
            }

            .footer-links a {
                margin: 0 10px;
                font-size: 0.9rem;
            }

            .social-icons a {
                width: 35px;
                height: 35px;
                margin: 0 8px;
            }
        }
    </style>
</head>

<body>

    <div class="bg-image">
        <div class="overlay"></div>

        <nav class="navbar navbar-expand-lg fixed-top px-3">
            <div class="container">
                <a class="navbar-brand" href="#">BeatLine</a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/info">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="hero-content">
            <div class="intro-text">
                <h1>Service BeatLine</h1>
                <p>From epic events to seamless support—we’ve got everything you need to vibe at your best.</p>
            </div>

            <div class="card bg-light text-dark">
                <img src="https://media.istockphoto.com/id/821953178/photo/preparation-for-a-concert.jpg?s=612x612&w=0&k=20&c=U_wy5XQkatvxGm2KkeWfDOEHLG_OVrLpR6zXATy5y-w=" class="card-img-top" alt="Team">
                <div class="card-body">
                    <h5 class="card-title">Service Maintenance</h5>
                    <p class="card-text">We ensure every event is executed flawlessly — from planning to production — so our clients can enjoy a stress-free, memorable experience.</p>
                </div>
            </div>

            <div class="card bg-light text-dark">
                <img src="https://img.global.news.samsung.com/ph/wp-content/uploads/2024/02/ENHA-PR-Photo-3-1024x473.jpg" class="card-img-top" alt="Services">
                <div class="card-body">
                <h5 class="card-title">Our Venues Are Always Event-Ready</h5>
                <p class="card-text">We ensure every venue is thoroughly prepared and cleaned before your event — so you and your guests can enjoy a smooth, elegant, and worry-free experience.</p>
                </div>
            </div>

            <div class="card bg-light text-dark">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe_2QzfvMd9iEBJJVRe0aawbdMoz68vON3cw&s" class="card-img-top" alt="Trust">
                <div class="card-body">
                <h5 class="card-title">Affordable Packages & Client Rewards</h5>
                <p class="card-text">We offer budget-friendly event packages with exclusive perks for our loyal clients — making every celebration memorable without breaking the bank.</p>
                </div>
            </div>
        </div>

        <footer class="mt-5">
            <div class="container text-center">
                <h5 style="font-family: 'Bungee Tint', sans-serif;">BeatLine</h5>
                <p>Your trusted partner for seamless, professional, and memorable event planning and management.</p>

                <div class="footer-links mb-4">
                    <a href="/about">About Us</a>
                    <a href="/use">Terms of Use</a>
                    <a href="/policy">Privacy Policy</a>
                </div>

                <div class="social-icons">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-discord"></i></a>
                    <a href="#"><i class="bi bi-tiktok"></i></a>
                </div>

                <p class="mb-0" style="font-size: 14px;">&copy; 2025 BeatLine. All rights reserved.</p>
            </div>
        </footer>
    </div>

</body>

</html>