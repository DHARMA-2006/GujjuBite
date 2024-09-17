<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <form method="post" action="register.php">
        <div class="center">
            
            <div class="header">
                <div class="Login">
                    <label class="log">Registration</label>
                </div>
            </div>
<div class="body">
        <div class="txt_field">
            <label class="uname">Username</label><br>
            <input type="text" name="username"  placeholder="Enter Username" required>
        </div><br>
        <div class="txt_field">
            <label class="uname">Full name</label><br>
            <input type="text" name="name"  placeholder="Enter Your Name" required>
        </div><br>
        <div class="txt_field">
            <label class="uname">Email</label><br>
            <input type="email" name="email"  placeholder="Email ID">
        </div><br>
        <div class="txt_field">
            <label class="uname">Phone number</label><br>
            <input type="number" name="phonenumber"  placeholder="Enter Your Phone Number">
        </div><br>
        <div class="txt_field">
            <label class="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Enter Password">
            <i class="fa fa-eye password-icon" id="show-password"></i>
        </div>
        <?php include('errors.php'); ?>
        <div>
        <button type="submit" name="reg_user">Register</button>
        </div>

        <div class="signup_link">Already have an account?
            <a href="login.php">Login now</a></div>
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