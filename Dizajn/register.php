<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitPlan</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #48d1cc;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #40b0a4;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
        }

        .footer a {
            color: #48d1cc;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="register">
        <h2>Register</h2>

        <form id="registerForm" action="register.php" method="POST" onsubmit="handleRegister(event)">
            <?php include('errors.php'); ?>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username"  value="<?php echo $username; ?>">

            <label for="username">E-mail</label>
            <input type="text" id="username" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">

              <label for="password">Password</label>
            <input type="password" id="password" name="password_1" placeholder="Create your password" >

            <label for="password">Confirm Password</label>
            <input type="password" id="password" name="password_2" placeholder="Confiem your password" >


            <input type="submit" value="Register">
        </form>
        <div class="footer">
            <p>Already have an account?  <a href="login.php">Log in</a></p>
        </div>
    </div>

</body>
</html>