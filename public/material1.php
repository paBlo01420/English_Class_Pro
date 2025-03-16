<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Material</title>
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

      body {
        background-color: var(--gray);
        color: #333;
        line-height: 1.6;
      }

      /* Main Navigation */
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

      /* Hero Section */
      .hero {
        background: var(--background-gradient);
        padding: 100px 20px 150px;
        position: relative;
        overflow: hidden;
        min-height: 400px;
        display: flex;
        align-items: center;
      }

      .hero-content {
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 2;
      }

      .hero-title {
        font-size: 3rem;
        color: var(--white);
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        animation: fadeInUp 1s ease;
      }

      .hero-text {
        font-size: 1.2rem;
        color: var(--white);
        max-width: 800px;
        margin: 0 auto 30px;
        opacity: 0.9;
        animation: fadeInUp 1.2s ease;
      }

      .hero-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 30px;
        animation: fadeInUp 1.4s ease;
      }

      .hero-button {
        padding: 12px 24px;
        border-radius: 5px;
        background: var(--white);
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
        /* transition: var(--transition); */
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
      }

      .hero-button.secondary {
        background: transparent;
        border: 2px solid var(--white);
        color: var(--white);
      }

      .hero-button.secondary:hover {
        background-color: var(--white);
        color: var(--primary-color);
        border: 2px solid var(--white);
        box-shadow: 0 5px 15px rgba(108, 92, 231, 0.4);
      }

      .hero-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(108, 92, 231, 0.4);
      }

      .hero-button:hover {
        background-color: rgba(30, 60, 114, 0.85);
        color: var(--white);
        box-shadow: 0 5px 15px rgba(108, 92, 231, 0.4);
        transform: translateY(-3px);
      }

      .hero-wave {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
      }

      .hero-wave svg {
        position: relative;
        display: block;
        width: calc(140% + 1.3px);
        height: 150px;
        animation: waveAnimation 8s linear infinite;
      }

      @keyframes fadeInUp {
        0% {
          opacity: 0;
          transform: translateY(20px);
        }
        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @keyframes waveAnimation {
        0% {
          transform: translateX(0);
        }
        50% {
          transform: translateX(-25%);
        }
        100% {
          transform: translateX(0);
        }
      }

      /* Navigation Tabs */
      .nav-tabs {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin: 40px 0;
      }

      .tab-button {
        padding: 12px 24px;
        border: none;
        border-radius: 5px;
        background: var(--white);
        color: var(--primary-color);
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        box-shadow: var(--shadow);
      }

      .tab-button.active,
      .tab-button:hover {
        background: var(--primary-color);
        color: var(--white);
        transform: translateY(-2px);
      }

      /* Content Cards */
      .content-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
      }

      .material-card {
        background: var(--white);
        border-radius: 15px;
        box-shadow: var(--shadow);
        margin-bottom: 30px;
        overflow: hidden;
        transition: var(--transition);
      }

      .material-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(108, 92, 231, 0.2);
      }

      .card-header {
        background: var(--background-gradient);
        padding: 20px;
      }

      .card-header h2 {
        color: var(--white);
        font-size: 1.5rem;
        margin: 0;
      }

      .card-body {
        padding: 20px;
      }

      .card-body p {
        font-size: 1rem;
        color: #444;
        margin-bottom: 15px;
      }

      .card-body img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-top: 15px;
        transition: var(--transition);
      }

      .card-body img:hover {
        transform: scale(1.02);
      }

      /* Footer */
      .footer {
        text-align: center;
        padding: 20px;
        background: var(--background-gradient);
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
      }

      .footer p {
        color: var(--white);
        font-size: 0.9em;
      }

      .footer span {
        color: var(--white);
        font-weight: bold;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .hero {
          padding: 60px 15px;
        }

        .hero h1 {
          font-size: 2rem;
        }

        .nav-tabs {
          flex-wrap: wrap;
        }

        .tab-button {
          flex: 1 1 100%;
          margin-bottom: 10px;
        }
      }
    </style>
  </head>
  <body>
    <nav class="main-nav">
      <div class="nav-container">
        <img src="../image/logo.png" alt="Logo" class="nav-logo" />
        <div class="nav-links">
          <a href="home.php" class="nav-link">Home</a>
          <a href="material1.php" class="nav-link active">Material</a>
          <a href="quiz.php" class="nav-link">Quiz</a>
          <a href="conversation.php" class="nav-link">Conversation</a>
          <a href="logout.php" class="nav-link">Logout <i class='bx bx-log-in'></i></a>
        </div>
      </div>
    </nav>

    <div class="hero">
      <div class="hero-content">
        <h1 class="hero-title">Active Learning Materials</h1>
        <p class="hero-text">
          Explore comprehensive resources to enhance your understanding of
          active learning methodologies and techniques.
        </p>
        <div class="hero-buttons">
          <a href="#material-sections" class="hero-button">Explore Materials</a>
          <a href="quiz.php" class="hero-button secondary">Take a Quiz</a>
        </div>
      </div>
      <div class="hero-wave">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
          <path
            d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: var(--gray)"
          ></path>
        </svg>
      </div>
    </div>

    <div class="nav-tabs">
      <button class="tab-button active" onclick="showMaterial(0)">
        Definition
      </button>
      <button class="tab-button" onclick="showMaterial(1)">Purpose</button>
      <button class="tab-button" onclick="showMaterial(2)">Advantages</button>
      <button class="tab-button" onclick="showMaterial(3)">
        Disadvantages
      </button>
      <button class="tab-button" onclick="showMaterial(4)">
        Active & Passive
      </button>
    </div>

    <div class="content-container">
      <div id="material-sections">
        <div class="material-card">
          <div class="card-header">
            <h2>Definition Active Learning</h2>
          </div>
          <div class="card-body">
            <p>
              <strong>What is Active Learning?</strong> Active learning refers
              to a teaching approach that engages students actively in the
              learning process through activities such as discussion,
              problem-solving, case studies, role-playing, and group projects.
              This method emphasizes participation, critical thinking, and
              reflection rather than passive absorption of information.
            </p>
            <img src="../image/AL.jpg" alt="Active Learning" />
          </div>
        </div>

        <div class="material-card">
          <div class="card-header">
            <h2>Purpose Active Learning</h2>
          </div>
          <div class="card-body">
            <p>
              <strong>What is the purpose of Active Learning?</strong>
              Sebenarnya, ada banyak sekali tujuan dari teks iklan. Umumnya,
              marketers use advertisements to help companies to reach their
              objectives and increase revenue.
            </p>
            <ol type="1">
              <li>
                Enhance Engagement: Encourage students to take responsibility
                for their learning by actively participating in class
                activities.
              </li>
              <li>
                Develop Critical Thinking: Foster analytical skills by solving
                problems, asking questions, and exploring diverse perspectives.
              </li>
              <li>
                Promote Retention: Improve understanding and memory retention by
                involving students in hands-on experiences.
              </li>
              <li>
                Encourage Collaboration: Build teamwork and communication skills
                through group discussions and collaborative tasks.
              </li>
            </ol>
            <img src="../image/tujuan.jpg" alt="Purpose of Active Learning" />
          </div>
        </div>

        <div class="material-card">
          <div class="card-header">
            <h2>Advantages Active Learning</h2>
          </div>
          <div class="card-body">
            <p>
              Improved Learning Outcomes: Students retain knowledge better due
              to active participation.
            </p>
            <ol type="1">
              <li>
                Critical Thinking Development: Encourages deeper understanding
                and application of concepts.
              </li>
              <li>
                Engaged Learning Environment: Creates an interactive and
                stimulating classroom atmosphere.
              </li>
              <li>
                Skill Building: Develops communication, teamwork, and
                problem-solving skills.
              </li>
            </ol>
            <div>
              <h5>Example of Active Learning:</h5>
              <img
                src="../image/active-learning.jpg"
                alt="Active Learning Example"
              />
            </div>
          </div>
        </div>

        <div class="material-card">
          <div class="card-header">
            <h2>Disadvantages Active Learning</h2>
          </div>
          <div class="card-body">
            <ol type="1">
              <li>
                Time-Consuming: Planning and conducting activities may take more
                time compared to traditional lectures.
              </li>
              <li>
                Requires High Effort: Both teachers and students need to be
                actively involved, which can be challenging.
              </li>
              <li>
                Classroom Management: Keeping all students engaged and on track
                can be difficult, especially in large groups.
              </li>
            </ol>
            <img
              src="../image/Advantages Active Learning.jpg"
              alt="Disadvantages of Active Learning"
            />
          </div>
        </div>

        <div class="material-card">
          <div class="card-header">
            <h2>Active & Passive Voice</h2>
          </div>
          <div class="card-body">
            <p>
              Active Voice is a sentence structure where the subject of the
              sentence performs the action on the object. In active voice, the
              subject plays an important role in carrying out the action
              expressed by the verb. For example, in the sentence "I read the
              book," the subject "I" performs the action of reading, directed at
              the object "the book." Active voice is typically used to emphasize
              who is performing the action and what is being done.
            </p>
            <p>
              Passive Voice is a sentence structure where the object that
              receives the action becomes the subject of the sentence. In
              passive voice, the focus is on the object receiving the action
              rather than who is performing the action. For example, the
              sentence "The book is read by me" is the passive form of the
              active sentence "I read the book." In passive voice, the subject
              of the sentence is often not mentioned or is emphasized only if
              necessary. Passive voice is often used to highlight the event or
              object involved in the action.
            </p>
            <img src="../image/tanse.png" alt="Active and Passive Voice" />
          </div>
        </div>
      </div>
    </div>

    <script>
      function showMaterial(index) {
        const cards = document.querySelectorAll(".material-card");
        const buttons = document.querySelectorAll(".tab-button");

        // Hide all cards
        cards.forEach((card) => (card.style.display = "none"));

        // Remove active class from all buttons
        buttons.forEach((button) => button.classList.remove("active"));

        // Show selected card and activate corresponding button
        cards[index].style.display = "block";
        buttons[index].classList.add("active");
      }

      // Show first card by default
      showMaterial(0);
    </script>

    <footer class="footer">
      <p>&copy; English Pro Learning. All rights reserved.</p>
    </footer>
  </body>
</html>
