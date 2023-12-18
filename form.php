
<?php
include "db_conn.php";
?>
<style>
    body{
  background-color: #ffb3b3;
  opacity 0.6
}
  .contact-form {
    max-width: 400px;
    margin: 0 auto;
  }

  .contact-form label {
    display: block;
    margin-bottom: 10px;
  }

  .contact-form input,
  .contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }

  .contact-form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
  }

  .contact-form input[type="submit"]:hover {
    background-color: #45a049;
  }

  .success-message {
    margin-top: 10px;
    padding: 10px;
    background-color: #e6f4ea;
    border: 1px solid #4CAF50;
    border-radius: 4px;
  }
</style>
<br><br><br><br>
<div class="contact-form">
  <form action="/submit_message" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <input type="submit" value="Send Message">
  </form>

  <div id="successMessage" class="success-message" style="display: none;">
    Your message has been sent!
  </div>
</div>

<script>
  const form = document.querySelector('form');
  const successMessage = document.getElementById('successMessage');

  form.addEventListener('submit', (event) => {
    event.preventDefault(); // Prevent form submission

    // Simulate sending the message (replace this with your own code)
    setTimeout(() => {
      form.reset(); // Reset form fields
      successMessage.style.display = 'block'; // Show success message
    }, 1000); // 1 second delay for simulation purposes
  });
</script>
