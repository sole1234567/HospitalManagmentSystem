<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Online Restaurant</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      color: #333;
    }

    header {
      background-color: #ff6347;
      padding: 1rem 0;
      text-align: center;
      color: white;
    }

    nav {
      display: flex;
      justify-content: center;
      background-color: #333;
      padding: 0.5rem 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 1rem;
      font-size: 1.2rem;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .container {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 1rem;
      background: white;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    h1 {
      text-align: center;
      color: #ff6347;
    }

    p {
      text-align: center;
    }

    .contact-details {
      display: flex;
      justify-content: space-around;
      margin-top: 2rem;
    }

    .contact-item {
      text-align: center;
      flex: 1;
    }

    .contact-form {
      margin-top: 2rem;
    }

    .contact-form form {
      display: flex;
      flex-direction: column;
      max-width: 600px;
      margin: 0 auto;
    }

    .contact-form label {
      margin-bottom: 0.5rem;
      font-weight: bold;
    }

    .contact-form input, 
    .contact-form textarea, 
    .contact-form button {
      margin-bottom: 1rem;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1rem;
    }

    .contact-form textarea {
      resize: vertical;
    }

    .contact-form button {
      background-color: #ff6347;
      color: white;
      border: none;
      cursor: pointer;
    }

    .contact-form button:hover {
      background-color: #e55342;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 1rem 0;
      margin-top: 2rem;
    }

    footer a {
      color: #ff6347;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    .marquee-container {
      width: 100%;
      overflow: hidden;
      background-color: #ff6347;
      color: white;
      padding: 1rem 0;
    }

    .marquee {
      display: inline-block;
      white-space: nowrap;
      animation: scroll 10s linear infinite;
    }

    .marquee span {
      font-size: 1.5rem;
      font-weight: bold;
      margin-right: 2rem;
    }

    @keyframes scroll {
      0% {
        transform: translateX(100%);
      }
      100% {
        transform: translateX(-100%);
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="marquee-container">
        <div class="marquee">
          <span>Currently our website is still under maintenance.</span>
          <span>Currently our website is still under maintenance.</span>
          <span>Currently our website is still under maintenance.</span>
        </div>
      </div>
  </header>

  <nav>
    <a href="#">Home</a>
    <a href="#">Menu</a>
    <a href="#">Contact Us</a>
    <a href="#">About</a>
  </nav>

  <div class="container">

    <?php
        include('course.php');
    ?>

    <h1>Contact Us</h1>
    <p>We'd love to hear from you! Reach out to us via the details below or send us a message directly.</p>

    <div class="contact-details">
      <div class="contact-item">
        <h2>Phone</h2>
        <p>+123 456 7890</p>
      </div>
      <div class="contact-item">
        <h2>Email</h2>
        <p>contact@onlinerestaurant.com</p>
      </div>
      <div class="contact-item">
        <h2>Address</h2>
        <p>123 Food Street, Flavor Town</p>
      </div>
    </div>

    <div class="contact-form">
      <h2>Send Us a Message</h2>
      <form action="#" method="post">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Submit</button>
      </form>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Online Restaurant | Designed with ❤️</p>
    <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
  </footer>
</body>
</html>
