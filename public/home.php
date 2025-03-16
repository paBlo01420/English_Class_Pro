<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboards</title>
    <link rel="stylesheet" href="../css/home-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <nav class="main-nav">
        <div class="nav-container">
            <img src="../image/logo.png" alt="Logo" class="nav-logo" />
            <div class="nav-links">
                <a href="home.php" class="nav-link active">Home</a>
                <a href="material1.php" class="nav-link">Material</a>
                <a href="quiz.php" class="nav-link">Quiz</a>
                <a href="conversation.php" class="nav-link">Conversation</a>
                <a href="logout.php" class="nav-link">Logout <i class='bx bx-log-in'></i></a>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="hero-content">
            <h1 class="hero-title"> Welcome to Your English Pro Learning</h1>
            <p class="hero-text">
                "Start your English learning journey with our interactive courses and materials."
            </p>
            <div class="hero-buttons">
                <a href="#my-courses" class="hero-button">My Courses</a>
                <a href="#recommended-courses" class="hero-button secondary">Explore More Courses</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="../image/Group .png" alt="dashboard hero image">
        </div>
    </div>

    <section class="courses-section">
        <div class="container">
            <h2><i class='bx bx-book-open'></i> My Courses</h2>
            <div class="course-list" id="my-courses">
                <!-- Course cards will be dynamically added here using javascript -->
            </div>
        </div>
    </section>

    <section class="recommendation-section">
        <div class="container">
            <h2><i class='bx bx-star'></i> Recommended Courses</h2>
            <div class="course-list" id="recommended-courses">
                <!-- Course cards will be dynamically added here using javascript -->
            </div>
        </div>
    </section>

    <section class="progress-section">
        <div class="container">
            <h2><i class='bx bx-line-chart'></i> Your Learning Progress</h2>
            <div class="progress-bar">
                <div class="progress-fill" style="width: 75%;">75%</div>
            </div>
        </div>
    </section>

    <section class="achievements-section">
        <div class="container">
            <h2><i class='bx bx-trophy'></i> Achievements</h2>
            <div class="achievement-list" id="achievement-list">
                <!-- Achievement cards will be dynamically added here using javascript -->
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>© English Pro Learning. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
