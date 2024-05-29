<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaBest Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="loginstyle.css">
    <style>
        .error-message {
            color: red;
            margin-top: 5px;
        }

        .logo-container {
            display: flex;
            justify-content: center; /* Center horizontally */
            margin-top: 20px;
            margin-bottom: 15px; /* Optional: Add some space below the logo */
        }

        .logo-container img {
            width: 900px; /* Adjust the width as needed */
        }
    </style>
</head>
<body>
    <!-- Company Logo -->
    <div class="logo-container">
        <img src="./icons/title.png" alt="Company Logo">
    </div>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="username" id="username" placeholder="Username" required>
           <label for="username">Username</label>
        </div>

        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>

      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php" onsubmit="return validateForm()">
          <div class="input-group">
              <i class="fas fa-user"></i>
              <input type="text" name="username" id="usernameSignIn" placeholder="Username..." required>
              <label for="usernameSignIn">Username</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="passwordSignIn" placeholder="Password..." required>
              <label for="passwordSignIn">Password</label>
          </div>
          <!-- Error message display -->
          <?php
          // Check if an error parameter is present in the URL
          if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error === 'invalid_username') {
                echo '<div id="error-message" class="error-message">Username is incorrect</div>';
            } elseif ($error === 'invalid_password') {
                echo '<div id="error-message" class="error-message">Password is incorrect</div>';
            } elseif ($error === 'invalid_both') {
                echo '<div id="error-message" class="error-message">Both username and password are incorrect</div>';
            } elseif ($error === 'invalid_credentials') {
                echo '<div id="error-message" class="error-message">Username or password incorrect</div>';
            }
        }
        ?>

         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>

        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      <script src="loginscript.js"></script>
</body>
</html>
