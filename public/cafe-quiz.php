<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cafe Conversation Quiz</title>
    <link rel="stylesheet" href="../css/cafe-quiz.css?v=1.0" />
    <link rel="stylesheet" href="../css/shared-styles.css?v=1.0" />
  </head>
  <body>
    <div class="container">
      <h1 class="page-title">Cafe Conversation Quiz</h1>

      <div class="quiz-container">
        <form id="quizForm">
          <div class="question-container">
            <!-- Pertanyaan akan di-generate melalui JavaScript -->
          </div>

          <div class="button-container">
            <button type="submit" class="submit-button">Submit Answers</button>
            <button
              type="button"
              class="retry-button"
              onclick="resetQuiz()"
              style="display: none"
            >
              Try Again
            </button>
          </div>
        </form>

        <div id="results" class="results hidden">
          <h2>Quiz Results</h2>
          <p>Your score: <span id="score">0</span> out of 7</p>
          <button
            onclick="location.href='cafe-conversation.php'"
            class="return-button"
          >
            Return to Conversation
          </button>
        </div>
      </div>
    </div>

    <footer class="footer">
      <p>&copy; English Pro Learning. All rights reserved.</p>
    </footer>

    <script src="../js/cafe-quiz.js"></script>
  </body>
</html>
