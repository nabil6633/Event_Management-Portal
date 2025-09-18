<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/event_management_portal/view/css/login.css">
        <link rel="stylesheet" href="/event_management_portal/view/css/external.css">  

    </head>
    <body>
      
        <div class="form-box" id="register-box">
                <h2>Register</h2> 
                <input type="text" class="name" id="input" placeholder="Full Name" required> 
                <input type="text" class="email" id="input" placeholder="Email" required>
                <input type="password" class="password" id="input" placeholder="New Password" required>
                <input type="password" class="confirm-password" id="input" placeholder="Confirm password" required><br>
                <button type="submit" class="btn">Register</button> 
                <p>Already have an account? <a href="#" onclick="document.getElementById('register-box').style.display='none'; document.getElementById('login-box').style.display='block';">Login</a></p>
        </div>

    </body>
</html>
