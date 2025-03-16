<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online English Learning Course</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../css/menu.css" />
  </head>
  <body>
    <nav class="main-nav">
      <div class="nav-container">
        <img src="../image/logo.png" alt="Logo" class="nav-logo" />
        <div class="nav-links">
          <a href="home.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'nav-link active' : ''; ?>">Home</a>
          <a href="material1.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'material1.php' ? 'nav-link active' : ''; ?>">Material</a>
          <a href="quiz.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'quiz.php' ? 'nav-link.active' : ''; ?>">Quiz</a>
          <a href="conversation.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'conversation.php' ? 'nav-link active' : ''; ?>">Conversation</a>
          <a href="logout.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'logout.php' ? 'nav-link active' : ''; ?>">Logout<i class='bx bx-log-in'></i></a>
        </div>
      </div>
    </nav>
  </body>
