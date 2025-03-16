const quizData = [
  {
    question:
      "1. Which sentence is grammatically correct in the context of ordering at a café?",
    options: [
      "A. I would like ordering a coffee, please.",
      "B. I like order a coffee, please.",
      "C. I'd like to order a coffee, please.",
      "D. I'd like ordering a coffee, please.",
    ],
    correct: 2,
  },
  {
    question:
      "2. Identify the correct usage of a polite request from the following:",
    options: [
      "A. Give me a cappuccino, please.",
      "B. Can I have a cappuccino, please?",
      "C. I take a cappuccino, please.",
      "D. I want cappuccino, please.",
    ],
    correct: 1,
  },
  {
    question: "3. Choose the correct sentence to describe payment:",
    options: [
      "A. I'll pay by my card.",
      "B. I'll pay with my card.",
      "C. I'll pay through my card.",
      "D. I'll pay from my card.",
    ],
    correct: 1,
  },
  {
    question:
      "4. Which of the following best describes how the customer declined the extra options?",
    options: [
      "A. No, thank you. Just the cappuccino.",
      "B. No, thank you. I not need extras.",
      "C. No, thank you. Only the cappuccino.",
      "D. No, thank you. Not any extras.",
    ],
    correct: 0,
  },
  {
    question:
      "5. Complete the sentence: 'Would you like ______ your muffin warmed up?'",
    options: ["A. warming", "B. warmed", "C. to warming", "D. to warm"],
    correct: 3,
  },
  {
    question: "6. Which sentence properly uses a future tense for payment?",
    options: [
      "A. I am pay with my card.",
      "B. I pay with my card.",
      "C. I will pay with my card.",
      "D. I paying with my card.",
    ],
    correct: 2,
  },
  {
    question:
      "7. What is the correct way to confirm an order in formal English?",
    options: [
      "A. Your order is cappuccino and muffin, right?",
      "B. So, your order is one medium hot cappuccino and one blueberry muffin. Is that correct?",
      "C. Is correct your order medium cappuccino and muffin?",
      "D. Order is cappuccino and muffin, yes?",
    ],
    correct: 1,
  },
];

function createQuiz() {
  const container = document.querySelector(".question-container");
  container.innerHTML = ""; // Clear container sebelum membuat quiz baru

  quizData.forEach((q, index) => {
    const questionDiv = document.createElement("div");
    questionDiv.className = "question";
    questionDiv.innerHTML = `
      <p class="question-text">${q.question}</p>
      <div class="options">
        ${q.options
          .map(
            (opt, i) => `
          <label class="option">
            <input type="radio" name="q${index}" value="${i}">
            <span class="option-text">${opt}</span>
          </label>
        `
          )
          .join("")}
      </div>
    `;
    container.appendChild(questionDiv);
  });
}

function resetQuiz() {
  // Reset semua styling dan pilihan
  const questions = document.querySelectorAll(".question");
  questions.forEach((questionDiv) => {
    const options = questionDiv.querySelectorAll(".option");
    const radioInputs = questionDiv.querySelectorAll("input[type='radio']");

    options.forEach((opt) => {
      opt.classList.remove("correct", "incorrect", "selected");
    });

    radioInputs.forEach((input) => {
      input.checked = false;
    });
  });

  // Reset tampilan hasil
  document.getElementById("results").classList.add("hidden");
  document.querySelector(".submit-button").disabled = false;
  document.getElementById("score").textContent = "0";

  // Tampilkan tombol submit dan sembunyikan tombol retry
  document.querySelector(".submit-button").style.display = "block";
  document.querySelector(".retry-button").style.display = "none";
}

function checkAnswers(e) {
  e.preventDefault();

  let score = 0;
  const questions = document.querySelectorAll(".question");

  questions.forEach((questionDiv, index) => {
    const selected = questionDiv.querySelector(
      `input[name="q${index}"]:checked`
    );
    const options = questionDiv.querySelectorAll(".option");

    options.forEach((opt) => {
      opt.classList.remove("correct", "incorrect", "selected");
    });

    if (selected) {
      const selectedOption = selected.closest(".option");
      const correctOption = options[quizData[index].correct];

      if (parseInt(selected.value) === quizData[index].correct) {
        score++;
        selectedOption.classList.add("correct");
      } else {
        selectedOption.classList.add("incorrect");
        correctOption.classList.add("correct");
      }
      selectedOption.classList.add("selected");
    } else {
      options[quizData[index].correct].classList.add("correct");
    }
  });

  document.getElementById(
    "score"
  ).textContent = `${score} out of ${quizData.length}`;
  document.getElementById("results").classList.remove("hidden");

  // Sembunyikan tombol submit dan tampilkan tombol retry
  document.querySelector(".submit-button").style.display = "none";
  document.querySelector(".retry-button").style.display = "block";
}

document.addEventListener("DOMContentLoaded", () => {
  createQuiz();
  document.getElementById("quizForm").addEventListener("submit", checkAnswers);
});
