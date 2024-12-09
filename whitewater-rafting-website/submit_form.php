<!-- Contact Us Page -->
<section id="contact">
    <h2>Contact Us</h2>
    <p>Have a question or need more information? Reach out to us!</p>

    <form action="submit_form.php" method="POST">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Your Message</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</section>