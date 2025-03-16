<?php
// Mulai sesi
session_start();

// Konfigurasi database
$host = 'localhost';
$dbname = 'english_pro';
$username = 'root';
$password = '';

try {
    // Buat koneksi ke database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Proses form registrasi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = trim($_POST['nama']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    if (!empty($full_name) && !empty($username) && !empty($email) && !empty($password) && !empty($confirm_password)) {
        if ($password !== $confirm_password) {
            $error = "Password dan konfirmasi password tidak sama.";
        } else {
            try {
                // Hash password
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Insert data ke database
                $query = "INSERT INTO users (full_name, username, email, password) VALUES (:full_name, :username, :email, :password)";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':full_name', $full_name);
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $hashed_password);
                $stmt->execute();

                // Redirect ke halaman login
                header('Location: login.php');
                exit;
            } catch (PDOException $e) {
                $error = "Terjadi kesalahan: " . $e->getMessage();
            }
        }
    } else {
        $error = "Harap isi semua field.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>English Learning Media</title>
    <link rel="stylesheet" href="../css/login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        if (window.innerWidth <= 600) {
          document
            .getElementById("stylesheet")
            .setAttribute("href", "login-mobile.css");
        }
      });
    </script>
  </head>
  <body>
    <div class="login-container">
      <div class="login-wrapper">
        <div class="login-header">
          <img class="logo" src="../image/logo.png" alt="Logo" />
          <h1>English Pro Learning</h1>
          <p>Please register to continue</p>
        </div>

        <div class="login-form">
          <?php if (!empty($error)): ?>
            <div class="error" style="color: red;"> <?php echo $error; ?> </div>
          <?php endif; ?>
          <form action="" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
              <div class="input-icon">
                <i class="fas fa-user"></i>
              </div>
              <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Enter your full name"
                required
              />
            </div>

            <div class="form-group">
              <div class="input-icon">
                <i class="fas fa-user"></i>
              </div>
              <input
                type="text"
                id="username"
                name="username"
                placeholder="Enter your username"
                required
              />
            </div>

            <div class="form-group">
              <div class="input-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter your email"
                required
              />
            </div>

            <div class="form-group">
              <div class="input-icon">
                <i class="fas fa-lock"></i>
              </div>
              <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                required
              />
            </div>

            <div class="form-group">
              <div class="input-icon">
                <i class="fas fa-lock"></i>
              </div>
              <input
                type="password"
                id="confirm_password"
                name="confirm_password"
                placeholder="Confirm your password"
                required
              />
              <div id="password-error" class="error-message"></div>
            </div>

            <button type="submit" class="submit-button">
              <span class="button-text">Register</span>
              <i class="fas fa-arrow-right"></i>
            </button>
          </form>
        </div>

        <div class="login-footer">
          <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
      </div>
    </div>

    <script>
      function validateForm() {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm_password').value;
        const errorMessage = document.getElementById('password-error');

        if (password !== confirmPassword) {
          errorMessage.textContent = 'Password and Confirm Password do not match';
          return false;
        }
        errorMessage.textContent = '';
        return true;
      }
    </script>
  </body>
</html>
