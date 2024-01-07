<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>

body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}
            
            .bgimg-1 { 
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("./images/kk.png");
            min-height: 100%;
}
           /* font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: 100% 100%;
            
            }*/

     body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 100px;
            width: 300px;
            text-align: center;
            position: relative;
            left:-30%;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .login-container button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px;
        }

        .login-container button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div>

<img src="./image/kk.png"  width="100%" height="100%">

<div class="login-container">

    <h2>Login</h2>
    <button onclick="redirectToAdmin()">Admin</button>
    <button onclick="redirectToUser()">User</button>
    <button onclick="redirectToLibrary()">Library</button>
</div>
</div>
    

<script>
    function redirectToAdmin() {
        window.location.href = 'alogin.php'; // Replace with the actual admin page URL
    }

    function redirectToUser() {
        window.location.href = 'login.html'; // Replace with the actual user page URL
    }

    function redirectToLibrary() {
        window.location.href = 'login1.html'; // Replace with the actual library page URL
    }
</script>

</body>
</html>
