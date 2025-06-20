<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
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
      filter: blur(3px);
      transform: scale(1.03);
    }

    .cover-img {
      position: fixed;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.35);
      top: 0;
      left: 0;
      z-index: -1;
    }

    .register-form {
      z-index: 1;
      position: relative;
    }

    form {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      padding: 2.5rem 2rem;
      min-width: 400px;
      color: #fff;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
      transition: all 0.3s ease;
    }

    form:hover {
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    }

    h3 {
      text-align: center;
      margin-bottom: 2rem;
      color: #fff;
      font-weight: 600;
    }

    .form-floating input {
      background-color: rgba(255, 255, 255, 0.2);
      border: none;
      border-radius: 12px;
      color: #fff;
      transition: all 0.3s ease;
    }

    .form-floating label {
      color: #fff;
    }

    .form-floating input:focus {
      background-color: rgba(255, 255, 255, 0.25);
      color: #fff;
      box-shadow: 0 0 0 0.2rem rgba(255, 160, 122, 0.5);
    }

    .btn {
      transition: all 0.3s ease;
      border-radius: 10px;
    }

    .btn:hover {
      transform: translateY(-3px) scale(1.02);
      box-shadow: 0 10px 20px rgba(255, 99, 71, 0.4);
    }

    .alert-danger {
      background-color: rgba(255, 0, 0, 0.7);
      border: none;
      color: white;
    }

    a:hover {
      color: Tomato !important;
      text-decoration: none !important;
    }

    p span:hover {
      color: Tomato !important;
      text-decoration: underline !important;
      cursor: pointer;
    }

    .register-form:hover ~ .full-screen-img {
      transform: scale(1.05);
    }
  </style>
</head>

<body>
  <img src="https://cdn.pixabay.com/photo/2016/11/23/15/48/audience-1853662_1280.jpg" alt="concert" class="full-screen-img">
  <div class="cover-img"></div>

  <div class="d-flex justify-content-center align-items-center vh-100 register-form">
    <form action="/register/save" method="post">
      <h3>Create Account</h3>
      <?= csrf_field() ?>

      <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
      <?php endif; ?>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" required autocomplete="off">
        <label for="fullname">Full Name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required autocomplete="off">
        <label for="email">Email</label>
      </div>

      <div class="form-floating mb-3">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required autocomplete="off">
        <label for="password">Password</label>
      </div>

      <div class="form-floating mb-4">
        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required autocomplete="off">
        <label for="confirm_password">Confirm Password</label>
      </div>

      <div class="d-grid mb-4">
        <button type="submit" class="btn" style="background-color: Tomato; color: white;">Register</button>
      </div>

      <p class="text-center mt-2" style="font-size: 12px;">
        Already have an account?
        <a href="<?= base_url('login') ?>" style="text-decoration: underline; color: inherit;">Login here</a>
      </p>

      <p class="text-center mt-2 mb-0" style="font-size: 12px; cursor: pointer;">
        <span onclick="window.open('/use', '_blank');">Terms of Use</span> |
        <span onclick="window.open('/policy', '_blank');">Privacy Policy</span>
      </p>
    </form>
  </div>
</body>
</html>
