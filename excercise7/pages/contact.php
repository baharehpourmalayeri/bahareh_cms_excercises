<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News Website</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php include '../includes/header.php'; ?>
<main>
    <section class="contact-us">
        <h1>Contact Us</h1>
        <p>We’d love to hear from you! Whether you have a question, suggestion, or feedback, feel free to reach out to us using the contact form below.</p>

        <h2>Contact Form</h2>
        <form action="thankyou.php" method="post">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email" class="form-control">
            </div>

            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" required placeholder="Enter your message" class="form-control" rows="4"></textarea>
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>

        <h2>Other Ways to Reach Us</h2>
        <p>If you prefer to contact us via other methods, you can reach us through the following channels:</p>
        <ul>
            <li><strong>Phone:</strong> +46 8 888 999 11</li>
            <li><strong>Email:</strong> <a href="mailto:support@nextnews.com">support@nextnews.com</a></li>
            <li><strong>Social Media:</strong>
                <ul>
                    <li><a href="https://twitter.com/nextnews" target="_blank">Twitter</a></li>
                    <li><a href="https://facebook.com/nextnews" target="_blank">Facebook</a></li>
                    <li><a href="https://instagram.com/nextnews" target="_blank">Instagram</a></li>
                </ul>
            </li>
        </ul>

        <h2>Office Location</h2>
        <p>Our main office is located at:</p>
        <address>
            <strong>Next News Headquarters</strong><br>
            Nyhetsvägen 123<br>
            111 22 Stockholm<br>
            Sweden<br>
        </address>

    </section>
</main>
<?php include '../includes/footer.php'; ?>
</body>
</html>
