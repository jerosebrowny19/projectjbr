<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .login-container button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form onsubmit="return validateLogin()">
        <input type="text" id="username" name="username" placeholder="Username" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

<script>
    function validateLogin() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Add your actual validation logic here
        // For simplicity, let's assume the correct credentials are 'admin' and 'password'
        if (username === 'admin' && password === 'password') {
            window.location.href = 'display1.php'; // Replace with the actual dashboard page URL
            return false; // Prevent form submission
        } else {
            alert('Incorrect username or password. Please try again.');
            return false; // Prevent form submission
        }
    }
</script>

</body>
</html>
