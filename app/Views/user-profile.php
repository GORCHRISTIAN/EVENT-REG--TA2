<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Account Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Tint&family=Rubik+Mono+One&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding-top: 70px; /* Adjust for the fixed navbar */
        }

        .navbar {
            background-color: rgb(108, 122, 136);
            padding: 15px;
        }

        .navbar .nav-link {
            color: white !important;
        }

        .navbar .navbar-brand {
            font-family: "Bungee Tint", sans-serif;
            font-size: 1.8rem;
            color: white !important;
        }

        .main-content {
            padding: 40px;
        }

        .table {
            margin-top: 30px;
        }

        .btn-logout {
            background-color: rgb(201, 17, 0);
            color: white;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-logout:hover {
            background-color: rgb(116, 5, 1);
        }

        /* Navbar for mobile screens */
        .mobile-navbar {
            display: none;
        }

        @media (max-width: 768px) {
            .mobile-navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: rgb(64, 55, 51);
                color: white;
                padding: 10px 20px;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                z-index: 1060;
            }

            .mobile-navbar .brand {
                font-weight: bold;
                font-size: 18px;
            }

            .mobile-navbar button {
                background: none;
                border: none;
                color: white;
                font-size: 24px;
            }

            .main-content {
                margin-top: 60px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand brand" href="#">BeatLine</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
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
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content container">
        <h1>Account Information</h1>
        <p><strong>Full Name:</strong> <?= $fullname ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Address:</strong> <?= $address ?></p>
        <p><strong>Phone Number:</strong> <?= $phone ?></p>

        <h2 class="mt-5">Your Pending Event</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Event</th>
                    <th>Event Location</th>
                    <th>Event Date</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($event_name)): ?>
                    <?php foreach ($event_name as $event): ?>
                        <tr>
                            <td><?= htmlspecialchars($event['event_name'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($event['event_location'], ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($event['event_date'], ENT_QUOTES, 'UTF-8') ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3">No events found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <a href="/logout" class="btn-logout mt-4 d-inline-block">Logout</a>
    </div>

</body>

</html>
