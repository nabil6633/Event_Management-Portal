 function loadContent(page) {
      let content = document.getElementById("main-content");

      if (page === "dashboard") {
        content.innerHTML = "<h2>Dashboard</h2><p>Here is your dashboard overview.</p>";
      } 
      else if (page === "events") {
        content.innerHTML = "<h2>Events Handle</h2><p>Manage and update your events here.</p>";
      } 
      else if (page === "service") {
        content.innerHTML = "<h2>Service Providers</h2><p>Manage all service providers from here.</p>";
      } 
      else if (page === "payment") {
        content.innerHTML = "<h2>Payment History</h2><p>View all payment transactions here.</p>";
      } 
      else if (page === "logout") {
        content.innerHTML = "<h2>Logout</h2><p>You have been logged out.</p>";
      }
    }