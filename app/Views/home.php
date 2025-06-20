<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BEATLINE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
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
      font-family: 'Poppins', sans-serif;
      height: 100%;
      overflow: auto;
      scrollbar-width: none;
      /* Firefox */
      -ms-overflow-style: none;
      /* IE and Edge */
    }

    body::-webkit-scrollbar {
      display: none;
      /* Chrome, Safari, Opera */
    }

    .bg-image {
      background-image: url('https://images.unsplash.com/photo-1459749411175-04bf5292ceea?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29uY2VydHxlbnwwfHwwfHx8MA%3D%3D');
      background-size: cover;
      background-position: center;
      height: 100vh;
      position: relative;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      color: white;
      text-align: center;
      top: 50%;
      transform: translateY(-50%);
      padding: 0 1rem;
    }

    .hero-content h1 {
      font-family: "Bungee Tint", sans-serif;
      font-size: 3rem;
    }

    .hero-content p {
      font-size: 1.2rem;
      max-width: 600px;
      margin: 1rem auto;
    }

    .hero-content a {
      background-color: rgb(255, 21, 0);
      color: white;
      border: none;
      padding: 0.75rem 2rem;
      font-weight: 600;
      border-radius: 50px;
      margin-top: 1rem;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(255, 107, 107, 0.3);
    }

    .hero-content a:hover {
      background-color: rgb(116, 5, 1);
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(255, 107, 107, 0.4);
    }


    .navbar-brand {
      font-family: "Bungee Tint", sans-serif;
      font-size: 1.8rem;
      color: purple !important;
    }

    .nav-link {
      font-weight: 600;
      color: white !important;
    }

    .navbar {
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 3;
    }

    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2rem;
      }

      .hero-content p {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>

  <div class="bg-image">
    <div class="overlay"></div>

    <nav class="navbar navbar-expand-lg fixed-top px-3">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">BeatLine</a>
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
              <a class="nav-link" href="user/info">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="hero-content">
      <h1>Welcome to BeatLine</h1>
      <p>Your ultimate destination for concert tickets. Discover, book, and vibe to the beat—anytime, anywhere.</p>
      <a href="/rent" class="btn mt-3">Explore Concerts</a>
    </div>
  </div>
</body>

</html>