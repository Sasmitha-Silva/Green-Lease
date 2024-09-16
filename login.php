<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Green Lease - Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="login-styles.css" />
</head>

<body>
  <section class="login-section">
    <div class="login-container">
      <h2>Login</h2>
      <form class="login-form">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit" class="login-button">Log In</button>
      </form>
      <p class="forgot-password"><a href="#forgot-password">Forgot Password?</a></p>
      <p class="signup-link">Don't have an account? <a href="signup">Sign Up</a></p>
    </div>
  </section>
</body>

</html>