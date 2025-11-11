<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Dashboard</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f3f4f6;
      margin: 0;
      padding: 0;
    }

    /* Header */
    header {
      background-color: #4f46e5;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      position: sticky;
      top: 0;
    }

    header h1 {
      font-size: 22px;
      margin: 0;
    }

    /* User info and dropdown */
    .user-menu {
      position: relative;
      display: inline-block;
    }

    .user-btn {
      background: transparent;
      border: none;
      color: white;
      font-size: 16px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .user-btn:hover {
      text-decoration: underline;
    }

    .dropdown {
      display: none;
      position: absolute;
      right: 0;
      background-color: white;
      min-width: 150px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
      border-radius: 6px;
      z-index: 1;
      overflow: hidden;
    }

    .dropdown a {
      color: #333;
      padding: 10px 15px;
      display: block;
      text-decoration: none;
    }

    .dropdown a:hover {
      background-color: #f1f1f1;
    }

    /* Content section */
    .content {
      padding: 30px;
    }

    .report-card {
      background: white;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      max-width: 800px;
      margin: 20px auto;
    }

    .report-card h2 {
      color: #4f46e5;
      margin-bottom: 10px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #4f46e5;
      color: white;
    }

  </style>
</head>
<body>

  <header>
    <h1>Welcome to Dashboard</h1>
    <div class="user-menu">
      <button class="user-btn" id="userBtn">👤{{ Auth::user()->name }} <span id="username"></span> ▾</button>
      <div class="dropdown" id="dropdownMenu">
        <a href="{{ route('user.logout') }}" id="logoutBtn">Logout</a>
      </div>
    </div>
  </header>

  <div class="content">
    <div class="report-card">
      <h2>User Report</h2>
      <p>Here’s your latest activity summary:</p>

      <table>
        <thead>
          <tr>
            <th>Date</th>
            <th>Activity</th>
            <th>Status</th>
            <th>Remarks</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    // Get username from login page (if stored)
    const username = localStorage.getItem('username') || 'User';
    document.getElementById('username').textContent = username;

    // Dropdown toggle
    const userBtn = document.getElementById('userBtn');
    const dropdownMenu = document.getElementById('dropdownMenu');

    userBtn.addEventListener('click', () => {
      dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });

    // Logout
    document.getElementById('logoutBtn').addEventListener('click', () => {
      localStorage.removeItem('username');
      window.location.href = 'index.html'; // redirect to login page
    });

    // Close dropdown when clicking outside
    window.onclick = function(event) {
      if (!event.target.matches('#userBtn') && !event.target.closest('.user-menu')) {
        dropdownMenu.style.display = 'none';
      }
    };
  </script>

</body>
</html>
