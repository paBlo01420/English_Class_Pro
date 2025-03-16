<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cafe Conversation</title>
    <link rel="stylesheet" href="../css/cafe-conversation.css?v=1.0" />
    <link rel="stylesheet" href="../css/shared-styles.css?v=1.0" />
  </head>
  <body>
    <div class="container">
      <h1 class="page-title">Green Leaf Café Conversation</h1>

      <div class="chat-container">
        <div class="chat-header">
          <div class="participant cashier">Cashier</div>
          <div class="participant customer">Customer</div>
        </div>

        <div class="conversation">
          <div class="message cashier">
            Good morning! Welcome to Green Leaf Café. How may I assist you
            today?
          </div>
          <div class="message customer">
            Good morning. I'd like to order a cappuccino, please.
          </div>
          <div class="message cashier">
            Of course. Would you prefer it hot or iced?
          </div>
          <div class="message customer">I'll have it hot, thank you.</div>
          <div class="message cashier">
            Certainly. What size would you like—small, medium, or large?
          </div>
          <div class="message customer">A medium one, please.</div>
          <div class="message cashier">
            Would you like to add any extras, such as whipped cream or a flavor
            shot?
          </div>
          <div class="message customer">
            No, thank you. Just the cappuccino.
          </div>
          <div class="message cashier">
            Understood. Anything else I can get for you?
          </div>
          <div class="message customer">
            Yes, I'd also like a blueberry muffin.
          </div>
          <div class="message cashier">
            Excellent choice. Would you like the muffin warmed up?
          </div>
          <div class="message customer">No, that's fine as it is.</div>
          <div class="message cashier">
            Alright. So, your order is one medium hot cappuccino and one
            blueberry muffin. Is that correct?
          </div>
          <div class="message customer">Yes, that's correct.</div>
          <div class="message cashier">
            The total comes to $8.25. Will you be paying with cash or card?
          </div>
          <div class="message customer">I'll pay with my card.</div>
        </div>
        <button
          class="quiz-button"
          onclick="window.location.href='cafe-quiz.php'"
        >
          Start Quiz
        </button>
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
  </body>
</html>
