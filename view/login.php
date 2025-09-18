<?php
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/event_management_portal/view/css/login.css">
        <link rel="stylesheet" href="/event_management_portal/view/css/external.css">
        <script src="/event_management_portal/view/js/login.js" defer></script>
       
        
    </head>

    <body>

       <div class="container">
        <!-- Login -->
        <div class="form-box active" id="login-box">
        <h2>Login</h2>
       
        <input type="text" class="input" id="userName" placeholder="User Name" required>
        <input type="password" class="input" id="password"  placeholder="Password" required><br>
        <input type="checkbox" class="check-box" id="showpassword">Show Password<br>
        <button type="submit" class="btn">Login</button>
        <input type="checkbox" class="check-box" id="remeber">Remember me<br>
        <p id="re"><a href="/event_management_portal/view/forgetPass.php">Forgot Password?</a></p>
        <p id="re">Don't have an account? <a href="/event_management_portal/view/registration.php">Register</a></p>
       

        </div>
    
       </div>
      
    </body>
</html>