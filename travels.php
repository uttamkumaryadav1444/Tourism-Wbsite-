<!DOCTYPE html>
<html>
<head>
<title>TMS-PHP</title>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

.container {
  display: flex;
  height: 100vh;
}

.sidebar {
  background-color: #1976d2;
  color: white;
  width: 200px;
  padding: 20px;
}

.sidebar h2 {
  margin-bottom: 20px;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar li {
  margin-bottom: 10px;
}

.sidebar a {
  color: white;
  text-decoration: none;
  display: block;
  padding: 10px;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.sidebar a:hover {
  background-color: #1565c0;
}

.main {
  flex: 1;
  padding: 20px;
}

.main h1 {
  margin-bottom: 20px;
}

.table-container {
  background-color: white;
  border-radius: 5px;
  padding: 20px;
}

.table-container table {
  width: 100%;
  border-collapse: collapse;
}

.table-container th,
.table-container td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.table-container th {
  background-color: #f2f2f2;
}

.table-container .actions {
  display: flex;
  align-items: center;
}

.table-container .actions a {
  color: #1976d2;
  text-decoration: none;
  margin-left: 10px;
}

.pagination {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.pagination button {
  padding: 8px 16px;
  background-color: #1976d2;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.pagination button:hover {
  background-color: #1565c0;
}

.pagination button.active {
  background-color: #1565c0;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #2196f3;
  color: white;
  padding: 10px;
}

.header .logo {
  font-weight: bold;
}

.header .user {
  display: flex;
  align-items: center;
}

.header .user img {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  margin-right: 10px;
}

.header .user .username {
  margin-right: 10px;
}

.header .user .dropdown {
  position: relative;
  display: inline-block;
}

.header .user .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.header .user .dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.header .user .dropdown-content a:hover {
  background-color: #f1f1f1;
}

.header .user .dropdown:hover .dropdown-content {
  display: block;
}

.header .user .dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

.create-new {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.create-new:hover {
  background-color: #45a049;
}
</style>
</head>
<body>
<div class="container">
  <div class="sidebar">
    <h2>TMS-PHP</h2>
    <ul>
      <li><a href="#">Dashboard</a></li>
      <li><a href="#">Packages</a></li>
      <li><a href="#">Bookings</a></li>
      <li><a href="#">Inquiries</a></li>
      <li><a href="#">Rate & Reviews</a></li>
      <li><a href="#">Settings</a></li>
    </ul>
  </div>
  <div class="main">
    <div class="header">
      <div class="logo">Tourism Management System</div>
      <div class="user">
        <img src="user.png" alt="User Profile">
        <div class="username">Adminstrator Admin</div>
        <div class="dropdown">
          <button class="dropbtn">▾</button>
          <div class="dropdown-content">
            <a href="#">Profile</a>
            <a href="#">Settings</a>
            <a href="#">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <h1>Packages</h1>
    <div class="table-container">
      <h2>List of Packages</h2>
      <div class="create-new">Create New</div>
      <table id="packages-table">
        <thead>
          <tr>
            <th>#</th>
            <th>Date Created</th>
            <th>Package</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>2021-06-18 10:31</td>
            <td>Sample Tour 101</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
            <td><span class="status active">Active</span></td>
            <td class="actions"><a href="#">Action</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>2021-06-18 11:17</td>
            <td>Sample 102</td>
            <td>Curabitur non elit blandit, vestibulum sem in, maximus...</td>
            <td><span class="status active">Active</span></td>
            <td class="actions"><a href="#">Action</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td>2021-06-18 13:34</td>
            <td>Sample 103</td>
            <td>Pellentesque habitant morbi tristique senectus et netus...</td>
            <td><span class="status active">Active</span></td>
            <td class="actions"><a href="#">Action</a></td>
          </tr>
        </tbody>
      </table>
      <div class="pagination">
        <button class="previous">Previous</button>
        <button class="active">1</button>
        <button class="next">Next</button>
      </div>
      <p>Showing 1 to 3 of 3 entries</p>
    </div>
  </div>
</div>
</body>
</html>