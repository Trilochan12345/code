<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f6f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .register-container {
      background: #fff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      width: 350px;
    }

    .register-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .register-container input[type="text"],
    .register-container input[type="email"],
    .register-container input[type="password"] {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .register-container button {
      width: 100%;
      padding: 0.75rem;
      background-color: #28a745;
      border: none;
      color: white;
      font-size: 1rem;
      border-radius: 4px;
      cursor: pointer;
    }

    .register-container button:hover {
      background-color: #218838;
    }

    .register-container .login-link {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.9rem;
    }

    .register-container .login-link a {
      color: #007BFF;
      text-decoration: none;
    }

    .register-container .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="register-container">
    <h2>Create Account</h2>
    <form action="/register" method="post">
      <input type="text" name="username" placeholder="Username" required />
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <input type="password" name="confirm_password" placeholder="Confirm Password" required />
      <button type="submit">Register</button>
    </form>
    <div class="login-link">
      Already have an account? <a href="/login">Login</a>
    </div>
  </div>

</body>
</html>
