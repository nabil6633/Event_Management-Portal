<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/event_management_portal/view/css/login.css">
        <link rel="stylesheet" href="/event_management_portal/view/css/external.css">

       
        
    </head>
    <body>
       <div class="container">
        <div class="form-box" id="login-box">
        <h2>Login</h2>
        <input type="text" class="email" id="input" placeholder="Email" required>
        <input type="password" class="password" id="input"  placeholder="Password" required><br>
        <button type="submit" class="btn">Login</button>
        <p>Don't have an account? <a href="#" onclick="document.getElementById('login-box').style.display='none'; document.getElementById('register-box').style.display='block';">Register</a></p>

       
       
       </div>
      
    </body>
</html>