<?php
// Mulai sesi
session_start();

// Konfigurasi database
$host = 'localhost';
$dbname = 'english_pro';
$username = 'root';
$password = '';

// Tambahkan secret key reCAPTCHA
$recaptcha_secret = "6Lcu_bUqAAAAAF5g2oQfio1oP-ByhCSYR8TOHy6P";

try {
    // Buat koneksi ke database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Proses form login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_input = trim($_POST['name']);
    $password = trim($_POST['password']);
    $recaptcha_response = $_POST['g-recaptcha-response']; // Ambil response reCAPTCHA

    // Periksa apakah semua field diisi
    if (!empty($user_input) && !empty($password) && !empty($recaptcha_response)) {
        // Validasi reCAPTCHA
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_response_data = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha_response_json = json_decode($recaptcha_response_data, true);

        if ($recaptcha_response_json['success'] === true) {
            try {
                // Cek apakah username atau email ada di database
                $query = "SELECT * FROM users WHERE username = :user_input OR email = :user_input LIMIT 1";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(':user_input', $user_input);
                $stmt->execute();

                // Ambil data pengguna
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user && password_verify($password, $user['password'])) {
                    // Jika login berhasil, simpan data ke sesi
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['full_name'] = $user['full_name'];

                    // Redirect ke halaman menu
                    header('Location: home.php');
                    exit;
                } else {
                    $error = "Username/email atau password salah.";
                }
            } catch (PDOException $e) {
                $error = "Terjadi kesalahan: " . $e->getMessage();
            }
        } else {
            $error = "Verifikasi reCAPTCHA gagal. Silakan coba lagi.";
        }
    } else {
        $error = "Harap isi semua field dan lakukan verifikasi reCAPTCHA.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>English Learning Media</title>
    <link rel="stylesheet" href="../css/login.css?v=1.0" />
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
    <!-- Tambahkan library reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <div class="login-container">
      <div class="login-wrapper">
        <div class="login-header">
          <img class="logo" src="../image/logo.png" alt="Logo" />
          <h1>English Pro Learning</h1>
          <p>Please login to continue</p>
        </div>

        <div class="login-form">
          <?php if (!empty($error)): ?>
            <div class="error" style="color: red;"> <?php echo $error; ?> </div>
          <?php endif; ?>
          <form action="" method="POST">
            <div class="form-group">
              <div class="input-icon">
                <i class="fas fa-user"></i>
              </div>
              <input
                type="text"
                id="name"
                name="name"
                placeholder="Enter your username"
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

            <!-- Tambahkan elemen reCAPTCHA -->
            <div class="g-recaptcha" data-sitekey="6Lcu_bUqAAAAALrJh89IhlaDteS--zmzhk_W869A"></div>
            <br>
            <button type="submit" class="submit-button">
              <span class="button-text">Login</span>
              <i class="fas fa-arrow-right"></i>
            </button>
          </form>
        </div>

        <div class="login-footer">
          <p>Don't have an account? <a href="registrasi.php">Sign up</a></p>
          <p><a href="#">Forgot password?</a></p>
        </div>
      </div>
    </div>
  </body>
</html>
