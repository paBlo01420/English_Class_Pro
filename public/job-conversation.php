<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Interview Practice</title>
    <link rel="stylesheet" href="../css/job-conversation.css?v=1.0" />
    <link rel="stylesheet" href="../css/shared-styles.css?v=1.0" />
  </head>
  <body>
    <div class="container">
      <h1 class="page-title">Job Interview Practice</h1>

      <div class="conversation-container">
        <div class="question-section">
          <h2>Common Interview Questions</h2>
          <p class="instruction">
            Fill in the blanks with the correct words from the original
            conversation.
          </p>

          <div class="conversation-box">
            <div class="qa-pair">
              <div class="question">
                <strong>Interviewer:</strong> Please introduce yourself briefly?
              </div>
              <div class="answer">
                <strong>Candidate:</strong> "My name is Laura. I have worked as
                a ______(1) designer for 3 years. I had the opportunity to work
                on a project to create ______(2) concepts for online banners,
                advertisements and ______(3) that aim to inform or convince
                consumers."
              </div>
            </div>

            <div class="qa-pair">
              <div class="question">
                <strong>Interviewer:</strong> Tell me about your work
                experience?
              </div>
              <div class="answer">
                <strong>Candidate:</strong> "During my time at ABC Company, I
                was responsible for managing ______(4) marketing campaigns for a
                large client, where I led the team to achieve a ______(5)
                increase in online engagement."
              </div>
            </div>

            <div class="qa-pair">
              <div class="question">
                <strong>Interviewer:</strong> What do you know about our
                company?
              </div>
              <div class="answer">
                <strong>Candidate:</strong> "I read on your website that your
                company is a ______(6) startup focused on digital services.
                Since its founding, your company has achieved several
                achievements and created ______(7). I also like the way you
                market your services and approach your ______(8) market."
              </div>
            </div>

            <div class="qa-pair">
              <div class="question">
                <strong>Interviewer:</strong> Tell me about your education?
              </div>
              <div class="answer">
                <strong>Candidate:</strong> "I graduated with a Bachelor of
                ______(9) Administration from ABC University. During my studies,
                I was actively involved in ______(10) activities, such as
                leading a marketing club, which allowed me to apply to this
                company."
              </div>
            </div>
          </div>

          <div class="answer-section">
            <div class="answer-box">
              <input
                type="text"
                class="answer-input"
                id="answer1"
                placeholder="Answer 1"
              />
              <input
                type="text"
                class="answer-input"
                id="answer2"
                placeholder="Answer 2"
              />
              <input
                type="text"
                class="answer-input"
                id="answer3"
                placeholder="Answer 3"
              />
              <input
                type="text"
                class="answer-input"
                id="answer4"
                placeholder="Answer 4"
              />
              <input
                type="text"
                class="answer-input"
                id="answer5"
                placeholder="Answer 5"
              />
              <input
                type="text"
                class="answer-input"
                id="answer6"
                placeholder="Answer 6"
              />
              <input
                type="text"
                class="answer-input"
                id="answer7"
                placeholder="Answer 7"
              />
              <input
                type="text"
                class="answer-input"
                id="answer8"
                placeholder="Answer 8"
              />
              <input
                type="text"
                class="answer-input"
                id="answer9"
                placeholder="Answer 9"
              />
              <input
                type="text"
                class="answer-input"
                id="answer10"
                placeholder="Answer 10"
              />
            </div>
            <button onclick="checkAnswers()" class="check-button">
              Check Answers
            </button>
            <button onclick="resetAnswers()" class="reset-button">
              Try Again
            </button>
          </div>

          <div id="results" class="results hidden">
            <h3>Your Results</h3>
            <p>Score: <span id="score">0</span> out of 10</p>
            <div id="feedback"></div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <p>&copy; English Pro Learning. All rights reserved.</p>
    </footer>
    <style>
      .footer {
        text-align: center;
        padding: 20px;
        position: relative;
        left: 0;
        bottom: 0;
        width: 100%;
        background: linear-gradient(
          135deg,
          var(--primary-color) 0%,
          var(--secondary-color) 100%
        );
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
      }
      .footer p {
        color: white;
        font-size: 0.9em;
      }
      .footer span {
        color: white;
        font-weight: bold;
      }
      .container {
        margin-bottom: 80px;
      }
    </style>

    <script>
      const correctAnswers = {
        answer1: "graphic",
        answer2: "visual",
        answer3: "brochures",
        answer4: "digital",
        answer5: "30%",
        answer6: "fast-paced",
        answer7: "history",
        answer8: "target",
        answer9: "Business",
        answer10: "extracurricular",
      };

      function checkAnswers() {
        let score = 0;
        const feedback = document.getElementById("feedback");
        feedback.innerHTML = "";

        for (let i = 1; i <= 10; i++) {
          const input = document.getElementById(`answer${i}`);
          const userAnswer = input.value.toLowerCase().trim();
          const correctAnswer = correctAnswers[`answer${i}`].toLowerCase();

          if (userAnswer === correctAnswer) {
            score++;
            input.classList.add("correct");
            input.classList.remove("incorrect");
          } else {
            input.classList.add("incorrect");
            input.classList.remove("correct");
          }

          feedback.innerHTML += `
                    <p class="${
                      userAnswer === correctAnswer
                        ? "correct-answer"
                        : "wrong-answer"
                    }">
                        Question ${i}: ${
            userAnswer === correctAnswer ? "✓" : "✗"
          } 
                        (Correct answer: ${correctAnswers[`answer${i}`]})
                    </p>
                `;
        }

        document.getElementById("score").textContent = score;
        document.getElementById("results").classList.remove("hidden");
      }

      function resetAnswers() {
        const inputs = document.querySelectorAll(".answer-input");
        inputs.forEach((input) => {
          input.value = "";
          input.classList.remove("correct", "incorrect");
        });
        document.getElementById("results").classList.add("hidden");
      }
    </script>
  </body>
</html>
