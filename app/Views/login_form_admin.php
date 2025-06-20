<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <style>
    html, body {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
    }

    .full-screen-img {
      position: fixed;
      height: 100%;
      width: 100%;
      object-fit: cover;
      top: 0;
      left: 0;
      z-index: -2;
      filter: blur(3px); /* subtle blur */
      transform: scale(1.03); /* just enough to prevent edge clipping */
    }

    .cover-overlay {
      position: fixed;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.35); /* slightly reduced dark overlay */
      top: 0;
      left: 0;
      z-index: -1;
    }

    .login-container {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 1;
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      padding: 2.5rem 2rem;
      min-width: 400px;
      box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
      color: #fff;
      transition: all 0.3s ease;
    }

    .glass-card h3 {
      font-weight: 600;
      margin-bottom: 30px;
    }

    .form-control {
      background-color: rgba(255, 255, 255, 0.2);
      border: none;
      border-radius: 12px;
      color: #fff;
    }

    .form-control::placeholder {
      color: #eee;
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.25);
      color: #fff;
      box-shadow: 0 0 0 0.2rem rgba(255, 160, 122, 0.5);
    }

    label {
      color: #fff;
    }

    .btn-custom {
      background-color: #ff7e5f;
      border: none;
      color: white;
      transition: all 0.3s ease;
      border-radius: 10px;
    }

    .btn-custom:hover {
      background-color: #feb47b;
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(255, 126, 95, 0.4);
    }

    .alert-danger {
      background-color: rgba(255, 0, 0, 0.7);
      border: none;
      color: white;
    }

    .footer-text span {
      color: #ffaeae;
      cursor: pointer;
      text-decoration: underline;
    }

    .footer-text span:hover {
      color: #ffdcdc;
    }
  </style>
</head>

<body>
  <!-- Blurred background image -->
  <img src="https://cdn.pixabay.com/photo/2016/11/23/15/48/audience-1853662_1280.jpg" alt="Background" class="full-screen-img" />
  
  <!-- Dark overlay -->
  <div class="cover-overlay"></div>

  <!-- Login form -->
  <div class="login-container">
    <form action="/loginadmin/auth" method="post" class="glass-card text-center">
      <h3>Admin Dashboard</h3>
      <?= csrf_field() ?>

      <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
      <?php endif; ?>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required />
        <label for="username">Username</label>
      </div>

      <div class="form-floating mb-4">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required />
        <label for="password">Password</label>
      </div>

      <div class="d-grid mb-4">
        <button type="submit" class="btn btn-custom py-2">Login</button>
      </div>

      <p class="footer-text" style="font-size: 12px;">
        <span onclick="window.open('/use', '_blank')">Terms of Use</span> |
        <span onclick="window.open('/policy', '_blank')">Privacy Policy</span>
      </p>
    </form>
  </div>
</body>
</html>
