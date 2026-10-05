<!DOCTYPE html>
<html>
<head>
    <title>All Enquiries</title>
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
            padding: 40px 20px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            padding: 30px;
        }

        h1 {
            font-size: 26px;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 25px;
            padding: 8px 18px;
            background-color: #34495e;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            transition: background-color 0.2s ease-in-out;
        }

        .back-link:hover {
            background-color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 8px;
        }

        thead tr {
            background-color: #2c3e50;
        }

        th {
            color: #ffffff;
            text-align: left;
            padding: 14px 16px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        td {
            padding: 14px 16px;
            font-size: 14px;
            border-bottom: 1px solid #eaeaea;
            vertical-align: top;
        }

        tbody tr:hover {
            background-color: #f9fafc;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .action-links a {
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            margin-right: 8px;
        }

        .edit-link {
            color: #2980b9;
        }

        .edit-link:hover {
            text-decoration: underline;
        }

        .delete-link {
            color: #e74c3c;
        }

        .delete-link:hover {
            text-decoration: underline;
        }

        .separator {
            color: #ccc;
            margin-right: 8px;
        }

        button.delete-link {
        background: none;
        border: none;
        padding: 0;
        cursor: pointer;
        font-weight: 600;
        font-size: 13px;
        color: #e74c3c;
        }

        button.delete-link:hover {
        text-decoration: underline;
        }

        .navbar {
    background-color: #2c3e50;
    color: white;
    padding: 18px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: -40px -20px 40px;
}

.navbar h1 {
    font-size: 20px;
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

    <div class="navbar">
    <h1>Enquiry Management System</h1>

    <a href="{{ route('admin.logout') }}" class="logout-btn">
        Logout
    </a>
    </div>

    <div class="container">

        <h1>All Enquiries</h1>

        <a href="{{ route('admin.dashboard') }}" class="back-link">Back to Dashboard</a>

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($enquiries as $enquiry)

                <tr>
                    <td>{{ $enquiry->id }}</td>
                    <td>{{ $enquiry->name }}</td>
                    <td>{{ $enquiry->email }}</td>
                    <td>{{ $enquiry->phone }}</td>
                    <td>{{ $enquiry->subject }}</td>
                    <td>{{ $enquiry->message }}</td>

                    <td class="action-links">
                        <a href="{{ route('admin.enquiries.edit', $enquiry->id) }}">Edit</a>
                        <span class="separator">|</span>
                        <form action="{{ route('admin.enquiries.destroy', $enquiry->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="delete-link">
                        Delete
                        </button>
                            </form>
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>

    </div>

</body>
</html>