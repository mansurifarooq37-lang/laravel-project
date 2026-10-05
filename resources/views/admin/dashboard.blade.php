<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
        }

        .navbar {
            background-color: #2c3e50;
            color: #ffffff;
            padding: 18px 40px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            font-size: 20px;
            font-weight: 600;
        }

        .logout-form {
            display: inline;
        }

        .logout-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 9px 18px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }

        .content {
            max-width: 900px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .welcome-box {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            padding: 30px;
            margin-bottom: 30px;
        }

        .welcome-box h2 {
            font-size: 22px;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .welcome-box p {
            font-size: 15px;
            color: #666;
        }

        .cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            flex: 1;
            min-width: 220px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            padding: 30px;
            text-align: center;
        }

        .card h3 {
            font-size: 17px;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .card a {
            display: inline-block;
            padding: 10px 24px;
            background-color: #34495e;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            transition: background-color 0.2s ease-in-out;
        }

        .card a:hover {
            background-color: #2c3e50;
        }

        @media (max-width: 600px) {
            .navbar {
                padding: 15px 20px;
            }

            .navbar h1 {
                font-size: 16px;
            }

            .logout-btn {
                padding: 8px 12px;
                font-size: 13px;
            }
        }

        .navbar {
    background-color: #2c3e50;
    color: #ffffff;
    padding: 18px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

    .logout-btn {
    background-color: #e74c3c;
    color: white;
    text-decoration: none;
    padding: 9px 18px;
    border-radius: 6px;
    font-size: 14px;
}

    .logout-btn:hover {
    background-color: #c0392b;
}
    </style>
</head>

<body>

    <!-- Navbar -->

    <div class="navbar">
    <h1>Enquiry Management System</h1>

    <a href="{{ route('admin.logout') }}" class="logout-btn">
        Logout
    </a>
    </div>


    <div class="content">

        <div class="welcome-box">
            <h2>Admin Dashboard</h2>
            <p>Welcome to Admin Dashboard</p>
        </div>


        <div class="cards">

            <div class="card">
                <h3>All Enquiries</h3>

                <a href="{{ route('admin.enquiries') }}">
                    Show All Enquiries
                </a>
            </div>

            <div class="card">
            <h3>Manage Projects</h3>

            <a href="{{ route('admin.projects') }}">
            Manage Projects
            </a>
            </div>

            <div class="card">
                <h3>Export Data</h3>

                <a href="{{ route('admin.enquiries.export') }}">
                    Download Enquiries
                </a>
            </div>

        </div>

    </div>

</body>
</html>