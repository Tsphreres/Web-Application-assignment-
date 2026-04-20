<h1>Contact Us - Twandikire</h1>
<div class="form-container">
    <form action="process_contact.php" method="POST">
        <div class="form-group">
            <label>Full Name (Izina ryose) *</label>
            <input type="text" name="fullname" required placeholder="e.g., Habimana Eric">
        </div>
        <div class="form-group">
            <label>Email *</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Phone (Telefone) *</label>
            <input type="tel" name="phone" required>
        </div>
        <div class="form-group">
            <label>Location (Aho uherereye)</label>
            <input type="text" name="location" placeholder="Kigali, Rubavu, Musanze...">
        </div>
        <div class="form-group">
            <label>Message (Ubutumwa) *</label>
            <textarea name="message" required placeholder="Your message here..."></textarea>
        </div>
        <button type="submit" class="btn">Send Message - Ohereza</button>
    </form>
</div>
<div class="rwandan-note" style="margin-top: 1rem;">
    Call us: +250 788 123 456 | Location: KN 5 Rd, Kigali, Rwanda
</div>
