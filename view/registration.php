<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/event_management_portal/view/css/login.css">
        <link rel="stylesheet" href="/event_management_portal/view/css/external.css"> 
        <script src="/event_management_portal/view/js/login.js" defer></script> 

    </head>
    <body>
      
        <div class="form-box" id="register-box">
                <h2>Register</h2> 
                <input type="text" class="input" id="name" placeholder="Full Name" required> 
                <input type="text" class="input" id="userName" placeholder="User Name" required>
                <input type="text" class="input" id="email" placeholder="Email" required>
                <input type="password" class="input" id="password" placeholder="New Password" required>
                <input type="checkbox" class="check-box" id="showpassword">Show Password<br>
                <input type="password" class="input" id="password" placeholder="Confirm password" required><br>
                <input type="checkbox" class="check-box" id="showpassword">Show Password<br>
                <button type="submit" class="btn">Register</button> 
                <p id="re">Already have an account? <a href="/event_management_portal/view/login.php">Login</a></p>

               
        </div>

    </body>
</html>
