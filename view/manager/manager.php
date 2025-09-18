<!DOCTYPE html>
<html>
    <head>
      <title>Manager Dashboard</title>

     <meta charset="utf-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="/event_management_portal/view/css/external.css">
     <link rel="stylesheet" href="/event_management_portal/view/css/managerDashboard.css">
     <script src="/event_management_portal/view/js/manager.js" defer></script>
     

    </head>

<body>

    <div class="dashboard-container">

     <nav class="sidebar-nav">
            <div class="logo">EventM</div> 
        <ul>
         
           <li><a href="#" onclick="loadContent('dashboard')">Dashboard</a></li>
           <li><a href="#" onclick="loadContent('events')">Events Handle</a></li>
           <li><a href="#" onclick="loadContent('service')">Manage ServiceProvider</a></li>
           <li><a href="#" onclick="loadContent('payment')">Payment History</a></li>
           <li class="logout-item"><a href="#" onclick="loadContent('logout')">Logout</a></li>
        </ul>

     </nav>
    
        <div class="content" id="main-content">
         <h2>Welcome</h2>
           <p>Select an option from the sidebar.</p>
        </div>

    </div>

</body>
</html>    












