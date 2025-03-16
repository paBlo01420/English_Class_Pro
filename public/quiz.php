<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Diphylleia&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/quiz.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  </head>
  <body>

    <nav class="main-nav">
      <div class="nav-container">
        <img src="../image/logo.png" alt="Logo" class="nav-logo" />
        <div class="nav-links">
          <a href="home.php" class="nav-link">Home</a>
          <a href="material1.php" class="nav-link">Material</a>
          <a href="quiz.php" class="nav-link active">Quiz</a>
          <a href="conversation.php" class="nav-link">Conversation</a>
          <a href="logout.php" class="nav-link">Logout <i class='bx bx-log-in'></i></a>
        </div>
      </div>
    </nav>

    <div class="hero">

        <div class="hero-image">
            <img src="../image/quiz2.png" alt="dashboard hero image">
        </div>

        <div class="hero-content">
            <h1 class="hero-title"> Test your knowledge and rise to the challenge!</h1>
            <p class="hero-text">
            "Start your quiz adventure with our fun and interactive challenges to test your knowledge and skills."
            </p>
            <div class="hero-buttons">
                <a href="#my-courses" class="hero-button">My Quiz</a>
                <a href="#recommended-courses" class="hero-button secondary">Explore More Quiz</a>
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

    <div class="container">
      <div id="quiz"></div>
      <div class="navigation">
        <button id="prev" onclick="navigate(-1)" disabled>Previous</button>
        <button id="next" onclick="navigate(1)">Next</button>
      </div>
    </div>

    <script>
      const data = [
        {
          type: "multiple",
          question:
            "1. Pilihlah bentuk aktif dan pasif dari kalimat berikut dalam bentuk simple past: ( She cleaned the rooms yesterday. )",
          options: [
            "A. The rooms were cleaned by her yesterday.",
            "B. The rooms are cleaned by her every day.",
            "C. She cleans the rooms every day.",
            "D. She will clean the rooms tomorrow.",
          ],
          returnToMenu: true,
        },
        {
          type: "multiple",
          question:
            "2. Lengkapilah kalimat berikut menggunakan bentuk continuous present passive: ( The rooms ___ being cleaned by her. )",
          options: ["A. is.", "B. are.", "C. am.", "D. was."],
        },
        {
          type: "multiple",
          question:
            "3. Pilihlah bentuk pasif dari kalimat berikut dalam perfect tense past: ( She had cleaned the rooms. )",
          options: [
            "A. The rooms had been cleaned by her.",
            "B. The rooms has been cleaned by her.",
            "C. The rooms had cleaned by her.",
            "D. The rooms was cleaned by her.",
          ],
        },
        {
          type: "multiple",
          question:
            "4. Pilihlah bentuk aktif dari kalimat berikut dalam bentuk modal will (future tense): ( The rooms will be cleaned by her. )",
          options: [
            "A. She cleaned the rooms yesterday.",
            "B. She will clean the rooms.",
            "C. She has cleaned the rooms.",
            "D. She would clean the rooms.",
          ],
        },
        {
          type: "multiple",
          question:
            "5. Lengkapilah kalimat berikut dalam bentuk past continuous active: ( She ___ cleaning the rooms. )",
          options: ["A. is.", "B. was.", "C. are.", "D. were."],
        },
        { type: "end", question: "Quiz Is Over!" },
      ];

      let currentPage = 0;

      const renderPage = () => {
        const container = document.getElementById("quiz");
        const prevButton = document.getElementById("prev");
        const nextButton = document.getElementById("next");

        const currentData = data[currentPage];

        prevButton.disabled = currentPage === 0;
        nextButton.disabled =
          currentPage === data.length - 1 || currentData.type === "end";

        if (currentData.type === "end") {
          prevButton.style.display = "none";
          nextButton.style.display = "none";
        } else {
          prevButton.style.display = "inline-block";
          nextButton.style.display = "inline-block";
        }

        container.innerHTML = "";

        if (currentData.returnToMenu) {
          container.innerHTML = `
          <div class="question">${currentData.question}</div>
          <div class="choices">
            ${currentData.options
              .map((option) => `<div class="choice">${option}</div>`)
              .join("")}
          </div>
        `;
        } else if (currentData.type === "multiple") {
          container.innerHTML = `
          <div class="question">${currentData.question}</div>
          <div class="choices">
            ${currentData.options
              .map((option) => `<div class="choice">${option}</div>`)
              .join("")}
          </div>
        `;
        } else if (currentData.type === "image") {
          container.innerHTML = `
          <div class="question">${currentData.question}</div>
          <img src="${currentData.image}" alt="Question Image">
          <div class="choices">
            ${currentData.options
              .map((option) => `<div class="choice">${option}</div>`)
              .join("")}
          </div>
        `;
        } else if (currentData.type === "text") {
          container.innerHTML = `
          <div class="question">${currentData.question}</div>
          <img src="${currentData.image}" alt="Information Image">
        `;
        } else if (currentData.type === "end") {
          container.innerHTML = `
          <div class="question">${currentData.question}</div>
          <button onclick="location.href='material1.php'" style="padding: 10px; background: var(--white); color: var(--primary-color); border: none; border-radius: 4px;">Selesai</button>
        `;
        }
      };

      const navigate = (direction) => {
        currentPage += direction;
        renderPage();
      };

      renderPage();
    </script>

    <footer class="footer">
      <p>&copy; English Pro Learning. All rights reserved.</p>
    </footer>
  </body>
</html>
