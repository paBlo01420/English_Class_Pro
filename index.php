<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>English Pro Learning</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
      }

      .welcome-container {
        max-width: 600px;
        padding: 20px;
      }

      h1 {
        font-size: 3rem;
        margin-bottom: 20px;
        animation: fadeIn 2s ease-in-out;
      }

      p {
        font-size: 1.2rem;
        margin-bottom: 30px;
        animation: slideUp 1.5s ease-in-out;
      }

      .login-button {
        padding: 15px 30px;
        font-size: 1.2rem;
        color: white;
        background: #2a5298;
        border: 2px solid white;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.3s ease;
        animation: fadeIn 3s ease-in-out;
      }

      .login-button:hover {
        background: white;
        color: #2a5298;
        transform: scale(1.05);
      }

      @keyframes fadeIn {
        0% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }

      @keyframes slideUp {
        0% {
          transform: translateY(20px);
          opacity: 0;
        }
        100% {
          transform: translateY(0);
          opacity: 1;
        }
      }
    </style>
  </head>
  <body>
    <div class="welcome-container">
      <h1>Welcome to English Pro Learning</h1>
      <p>
        Your journey to mastering English starts here. We're redirecting you to
        the login page to begin your learning experience.
      </p>
      <a href="public/login.php">
        <button class="login-button">Start Learning Now</button>
      </a>
    </div>
  </body>
</html>
