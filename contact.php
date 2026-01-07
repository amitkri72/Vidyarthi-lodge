<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

<header class="site-header">
    <div class="header-container">

        <div class="logo">
            <div class="logo-circle">VL</div>
            <div class="logo-text">
                <h1>Vidyarthi Lodge</h1>
                <p>Safe & Comfortable Student Stay</p>
            </div>
        </div>

        <nav class="nav-links">
            <a href="index.php">Home</a>
            <a href="facilities.php">Facilities</a>
            <a href="reach.php">How to Reach</a>
            <a href="contact.php">Contact</a>
        </nav>

    </div>
</header>

<section>
    <h2>Get in Touch</h2>
    <p style="text-align:center; font-size:16px; line-height:1.8;">
        For room availability, pricing details, or any other enquiry, 
        feel free to contact us. 
        We will be happy to assist students and parents.
    </p>
</section>

<section>
    <div class="contact-box">
        <p><strong>Owner:</strong> Mahendra Kumar Sinha</p>
        <p><strong>Phone:</strong> 9334083125</p>
        <p><strong>Address:</strong> Jai Mahavir Colony, Bazaar Samiti, Patna</p>

        <form action="process/contact_process.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</section>

<footer>© Vidyarthi Lodge</footer>

</body>
</html>
