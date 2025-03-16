<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Conversation</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Diphylleia&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
      :root {
        --primary-color: #1e3c72 0%;
        --secondary-color: #2a5298 100%;
        --background-gradient: linear-gradient(
          135deg,
          var(--primary-color) 0%,
          var(--secondary-color) 100%
        );
        --white: #ffffff;
        --gray: #f5f5f5;
        --shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      }

      * {
        font-family: "Montserrat", Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      /* Navigation Styles */
      .main-nav {
        background: var(--background-gradient);
        box-shadow: var(--shadow);
        padding: 15px 20px;
      }

      .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
      }

      .nav-logo {
        height: 50px;
      }

      .nav-links {
        display: flex;
      }

      .nav-link {
        text-decoration: none;
        color: var(--white);
        margin-left: 20px;
        font-weight: 500;
        padding: 10px 20px;
        border-radius: 25px;
        transition: 0.3s;
      }

      .nav-link:hover {
        background: rgba(255, 255, 255, 0.1);
      }

      .nav-link.active {
        background: var(--white);
        color: var(--primary-color);
        box-shadow: var(--shadow);
      }

      body {
        background: var(--background-gradient);
        min-height: 100vh;
      }

      .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
        margin-bottom: 80px;
      }

      .main-title {
        text-align: center;
        color: var(--white);
        margin-bottom: 50px;
        font-size: 2.5em;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
      }

      .conversation-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
      }

      .card {
        background: var(--white);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 30px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
      }

      .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
      }

      .card h2 {
        color: var(--primary-color);
        margin-bottom: 20px;
        font-size: 1.8em;
        font-weight: 600;
        text-align: center;
      }

      .card p {
        color: var(--primary-color);
        margin-bottom: 25px;
        line-height: 1.8;
      }

      .practice-btn {
        display: inline-block;
        padding: 12px 24px;
        background: var(--primary-color);
        color: var(--white);
        text-decoration: none;
        border-radius: 5px;
        font-weight: 500;
        transition: all 0.3s ease;
        box-shadow: var(--shadow);
      }

      .practice-btn:hover {
        background: rgba(30, 60, 114, 0.85);
        color: var(--white);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(108, 92, 231, 0.4);
      }

      .footer {
        text-align: center;
        padding: 20px;
        position: fixed;
        bottom: 0;
        width: 100%;
        background: var(--glass-bg);
        backdrop-filter: blur(10px);
        border-top: 1px solid rgba(255, 255, 255, 0.2);
      }

      .footer p {
        color: var(--white);
        font-size: 0.9em;
      }

      .footer span {
        color: var(--white);
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <nav class="main-nav">
      <div class="nav-container">
        <img src="../image/logo.png" alt="Logo" class="nav-logo" />
        <div class="nav-links">
          <a href="home.php" class="nav-link">Home</a>
          <a href="material1.php" class="nav-link">Material</a>
          <a href="quiz.php" class="nav-link">Quiz</a>
          <a href="conversation.php" class="nav-link active">Conversation</a>
          <a href="logout.php" class="nav-link">Logout <i class='bx bx-log-in'></i></a>
        </div>
      </div>
    </nav>
    <div class="container">
      <h1 class="main-title">CONVERSATION PRACTICE</h1>

      <div class="conversation-cards">
        <!-- Cafe Order Card -->
        <div class="card">
          <h2>ORDER AT THE CAFE</h2>
          <p>
            Learn how to order food and drinks naturally at a cafe through
            engaging conversation practice.
          </p>
          <a href="cafe-conversation.php" class="practice-btn"
            >Start Training</a
          >
        </div>

        <!-- Job Interview Card -->
        <div class="card">
          <h2>JOB INTERVIEW WITH HRD</h2>
          <p>
            Prepare thoroughly for a job interview with interactive conversation
            practice sessions.
          </p>
          <a href="job-conversation.php" class="practice-btn"
            >Start Training</a
          >
        </div>

        <!-- Business Meeting Card -->
        <div class="card">
          <h2>MEETINGS WITH CLIENTS</h2>
          <p>
            Practice professional speaking skills confidently and effectively in
            important business meetings.
          </p>
          <a href="meeting-conversation.php" class="practice-btn"
            >Start Training</a
          >
        </div>
      </div>
    </div>

    <footer class="footer">
      <p>&copy; English Pro Learning. All rights reserved.</p>
    </footer>
  </body>
</html>
