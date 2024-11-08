<form>
    <h4>Contact us</h4>
    <p><label>First Name:</label> <input name="firstName" type="text" /></p>
    <p><label>Email Address:</label> <input style="cursor: pointer;" name="email" type="email" /></p>
    <p><label>Message:</label> <textarea name="message"></textarea></p>
   
    <!-- Checkbox for accepting terms/privacy policy -->
    <p>
        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">I accept the <a href="terms.html">Terms of Service</a> and <a href="privacy.html">Privacy Policy</a>.</label>
    </p>

    <p><input type="submit" value="Send" /></p>
</form>