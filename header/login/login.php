<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <form method="post" action="login.php">
        <div class="center">
            
            <div class="header">
                <div class="Login">
                    <label class="log">Customer Login</label>
                </div>
            </div>
<div class="body">
        <div class="txt_field">
            <label class="uname">Email</label><br>
            <input type="email" name="email"  placeholder="Email ID" required>
        </div><br>

        <div class="txt_field">
            <label class="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
            <i class="fa fa-eye password-icon" id="show-password"></i>
        </div>
        <?php include('errors.php'); ?>
        <div>
        <button type="submit" name="login_user">Login</button>
        </div>
        <div class="pass"><a href="">Forgot password?</a></div>
        <div class="signup_link">Need an account?
            <a href="register.php">Register Here</a></div>
        </div>
</div>

    </div>
    </form>
    <script>
        const showPassword = document.querySelector("#show-password");
        const passwordField = document.querySelector("#password");

        showPassword.addEventListener("click", function(){
            this.classList.toggle("fa-eye-slash");
            const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
            passwordField.setAttribute("type", type);
})
    </script>
</body>
</html>