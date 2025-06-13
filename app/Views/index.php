<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: white;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .login-container button {
      width: 100%;
      padding: 0.75rem;
      background-color: #4CAF50;
      border: none;
      color: white;
      font-size: 1rem;
      border-radius: 4px;
      cursor: pointer;
    }

    .login-container button:hover {
      background-color: #45a049;
    }

    .login-container .register-link {
      text-align: center;
      margin-top: 1rem;
      font-size: 0.9rem;
    }

    .login-container .register-link a {
      color: #007BFF;
      text-decoration: none;
    }

    .login-container .register-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Login</h2>
    <form action="/login" method="post">
        <?= csrf_field() ?>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username" autocomplete="username" required />

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" autocomplete="current-password" required />

        <button type="submit">Login</button>
    </form>
    <div class="register-link">
      Don't have an account? <a href="/register">Register</a>
    </div>
  </div>

</body>
</html>
