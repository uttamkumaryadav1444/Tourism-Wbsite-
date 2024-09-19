<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #222;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav li {
            display: inline-block;
            margin: 0 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f0f0f0;
        }

        .pagination {
            text-align: center;
            margin-top: 20px;
        }

        .pagination button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .pagination button:hover {
            background-color: #555;
        }

        .pagination .active {
            background-color: #5cb85c;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 5px;
            color: #fff;
            font-size: 20px;
        }

        .manage-account {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #ffc107;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .manage-account:hover {
            background-color: #e0a800;
        }

        .user-info {
            display: inline-block;
            margin-top: 10px;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tourism</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#" class="user-info">Hi, Claire!</a></li>
            <li><button class="manage-account">Manage Account</button></li>
        </ul>
    </nav>

    <main>
        <div class="container">
            <h2>Booked Packages</h2>
            <div class="search">
                <label for="search">Search:</label>
                <input type="text" id="search" name="search">
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>DateTime</th>
                        <th>Package</th>
                        <th>Schedule</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2021-06-19 11:51</td>
                        <td>Sample 103</td>
                        <td>2021-06-18</td>
                        <td>Done</td>
                        <td><button>Action</button></td>
                    </tr>
                </tbody>
            </table>
            <div class="pagination">
                <button class="previous">Previous</button>
                <button class="active">1</button>
                <button class="next">Next</button>
            </div>
        </div>
    </main>

    <footer>
        <p>Copyright © TMS-PHP 2021</p>
        <div class="social-icons">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
        <p>Privacy Policy</p>
        <p>Developed By: oretnom23</p>
    </footer>
</body>
</html>

body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

header {
  background-color: #222;
  color: #fff;
  padding: 10px 0;
  text-align: center;
}

header h1 {
  margin: 0;
}

nav {
  background-color: #333;
  color: #fff;
  padding: 10px 0;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

nav li {
  display: inline-block;
  margin: 0 10px;
}

nav a {
  color: #fff;
  text-decoration: none;
}

main {
  padding: 20px;
}

.container {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
  color: #333;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f0f0f0;
}

.pagination {
  text-align: center;
  margin-top: 20px;
}

.pagination button {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 8px 15px;
  border-radius: 5px;
  cursor: pointer;
}

.pagination button:hover {
  background-color: #555;
}

.pagination .active {
  background-color: #5cb85c;
}

footer {
  background-color: #333;
  color: #fff;
  padding: 10px 0;
  text-align: center;
}

.social-icons {
  margin-top: 10px;
}

.social-icons a {
  display: inline-block;
  margin: 0 5px;
  color: #fff;
  font-size: 20px;
}

.manage-account {
  display: inline-block;
  margin-top: 10px;
  padding: 8px 15px;
  background-color: #ffc107;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.manage-account:hover {
  background-color: #e0a800;
}

.user-info {
  display: inline-block;
  margin-top: 10px;
  color: #fff;
}

.search {
  margin-bottom: 20px;
}

.search label {
  display: block;
  margin-bottom: 5px;
}

.search input {
  width: 100%;
  padding: 8px;
  border: 1px solid #ddd;
  border-radius: 5px;
}