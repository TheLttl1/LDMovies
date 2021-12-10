<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LoginRegister.css">
    <title>Register</title>
</head>
<body>
    <div class="fundo">
        <form method="post">
            <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="" name="psw" required>

            <button type="submit" class="mainBtn">Sign in</button>
            <span >Already have an account?<a href="login.php">Login</a></span>
            </div>
        </form>
    </div>
</body>
</html>
