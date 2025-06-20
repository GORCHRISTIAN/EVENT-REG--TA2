<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Tint&family=Rubik+Mono+One&display=swap" rel="stylesheet">

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            height: 100%;
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

        .navbar {
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 3;
        }

        .navbar-brand,
        h2 {
            font-family: "Bungee Tint", sans-serif;
            font-size: 1.8rem;
            color: purple !important;
        }

        .nav-link {
            font-weight: 600;
            color: white !important;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: rgb(201, 17, 0) !important;
            transform: translateY(-2px);
        }

        .content-section {
            position: relative;
            z-index: 2;
            padding-top: 100px;
            padding-bottom: 60px;
            color: white;
        }

        .card {
            width: 18rem;
            margin: auto;
            transition: all 0.3s ease;
            border: none;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.9);
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(201, 17, 0, 0.4);
            border: 2px solid rgba(201, 17, 0, 0.7);
        }

        .card-img-top {
            height: 180px;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card-body {
            transition: all 0.3s ease;
        }

        .card:hover .card-body {
            background-color: rgba(255, 255, 255, 0.95);
        }

        .card-title {
            color: #333;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .card:hover .card-title {
            color: rgb(201, 17, 0);
        }

        .card-text {
            color: #555;
        }

        .btn {
            background-color: rgb(201, 17, 0);
            color: white;
            font-weight: 600;
            box-shadow: none;
            transition: all 0.2s ease;
            border: none;
        }

        .btn:hover {
            background-color: rgb(116, 5, 1);
            color: white;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            transform: translateY(-2px);
        }

        .status-available {
            color: rgb(201, 17, 0);
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .card:hover .status-available {
            color: rgb(116, 5, 1);
            font-size: 1.05em;
        }

        .status-booked {
            color: #6c757d;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .card:hover .status-booked {
            color: #5a6268;
            font-size: 1.05em;
        }

        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.5rem;
            }
            
            .card:hover {
                transform: translateY(-5px);
            }
        }
    </style>
</head>

<body>

    <div class="bg-image">
        <div class="overlay"></div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top px-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Beatline</a>
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav gap-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
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

        <!-- Content -->
        <div class="container content-section">
            <h2 class="text-center mb-5">Book an Event Now</h2>
            <div class="row justify-content-center">
                <?php if (!empty($events)): ?>
                    <?php foreach ($events as $event): ?>
                        <div class="col-md-4 mb-4 d-flex justify-content-center">
                            <form action="<?= base_url('event-register') ?>" method="POST">
                                <input type="hidden" name="event_name" value="<?= esc($event['event_name']) ?>">
                                <input type="hidden" name="event_location" value="<?= esc($event['event_location']) ?>">
                                <input type="hidden" name="event_date" value="<?= esc($event['event_date']) ?>">
                                <input type="hidden" name="fullname" value="<?= session()->get('fullname') ?>">

                                <div class="card shadow-sm">
                                    <img src="<?= base_url('uploads/' . $event['image_path']) ?>" class="card-img-top" alt="<?= esc($event['event_name']) ?> Image">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= esc($event['event_name']) ?></h5>
                                        <p class="card-text"><strong>Date:</strong><br><?= esc($event['event_date']) ?></p>
                                        <p class="card-text"><strong>Location:</strong><br><?= esc($event['event_location']) ?></p>
                                        <p class="card-text"><strong>Description:</strong><br><?= esc($event['description']) ?></p>
                                        <p class="<?= strtolower($event['status']) === 'available' ? 'status-available' : 'status-booked' ?>">
                                            <?= esc($event['status']) ?>
                                        </p>
                                        <?php if (strtolower($event['status']) === 'available'): ?> 
                                            <button type="submit" class="btn w-100">Book Now</button>
                                        <?php else: ?>
                                            <button type="button" class="btn w-100 btn-secondary" disabled>Fully Booked</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12">
                        <div class="alert alert-info text-center bg-light text-dark">No events available for booking.</div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</body>

</html>