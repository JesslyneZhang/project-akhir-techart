<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BuddiesHotel - Login</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- <link rel="stylesheet" href="public/assets/css/login.css" /> -->
    <link rel="stylesheet" href="public/assets/css/style.css" />
  </head>
  <body>

    <div class="login-page" style="min-height:100vh;display:flex;align-items:center;justify-content:center;">
      <div class="login-card" id="loginCard">
        <h2 id="loginTitle">Login</h2>
        <p class="subtitle" id="loginSubtitle">Silakan login</p>

        <?php if (!empty($error)): ?>
          <div class="alert-error" style="margin-bottom:10px;color:#b91c1c;">
            <?= htmlspecialchars($error) ?>
          </div>
        <?php endif; ?>

        <form id="loginForm" method="POST" action="index.php?page=login_process">
          <div class="form-group">
            <label>Email</label>
            <div class="input-group">
              <input type="email" id="email" name="email" required />
              <i class="fa-solid fa-envelope input-icon"></i>
            </div>
          </div>

          <div class="form-group">
            <label>Password</label>
            <div class="input-group">
              <input type="password" id="password" name="password" required />
              <i class="fa-solid fa-eye toggle-icon" onclick="togglePassword()" id="eyeIcon"></i>
            </div>
          </div>

          <div class="form-options">
            <label><input type="checkbox" /> Remember me</label>
            <a href="#">Forgot password?</a>
          </div>

          <button type="submit" class="btn-primary">Login</button>
          <a href="index.php?page=home" class="btn-secondary" style="display:inline-block;text-align:center;line-height:38px;">Back</a>
        </form>
      </div>
    </div>

    <script src="public/assets/js/script.js"></script>
    <script>
      // fungsi sederhana untuk show/hide password
      function togglePassword() {
        var pwd = document.getElementById('password');
        var eye = document.getElementById('eyeIcon');
        if (pwd.type === 'password') {
          pwd.type = 'text';
          eye.classList.remove('fa-eye');
          eye.classList.add('fa-eye-slash');
        } else {
          pwd.type = 'password';
          eye.classList.remove('fa-eye-slash');
          eye.classList.add('fa-eye');
        }
      }
    </script>
  </body>
</html>
