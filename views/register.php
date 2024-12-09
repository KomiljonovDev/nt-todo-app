<?php
require 'views/components/header.php';
require 'views/components/navbar.php';
?>
<div class="form-container">
    <h2 class="text-center mb-4">Register</h2>
    <form>
        <div class="mb-3">
            <label for="registerName" class="form-label">Name</label>
            <input type="text" class="form-control" id="registerName" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
            <label for="registerEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="registerEmail" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <label for="registerPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="registerPassword" placeholder="Enter your password" required>
        </div>
        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-success">Register</button>
        </div>
    </form>
    <p class="text-center mt-3">
        Already have an account? <a href="/login">Login</a>
    </p>
</div>
<?php
require 'views/components/footer.php';
?>