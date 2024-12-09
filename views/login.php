<?php
require 'views/components/header.php';
require 'views/components/navbar.php';
?>
<div class="form-container">
    <h2 class="text-center mb-4">Login</h2>
    <form>
        <div class="mb-3">
            <label for="loginEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <label for="loginPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
    <p class="text-center mt-3">
        Don't have an account? <a href="register.html">Register</a>
    </p>
</div>
<?php
require 'views/components/footer.php';