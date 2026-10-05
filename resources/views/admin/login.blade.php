<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-box {
            background-color: white;
            width: 100%;
            max-width: 400px;
            padding: 40px 35px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            font-size: 26px;
            color: #1f2937;
            margin-bottom: 25px;
        }

        .error-msg {
            background-color: #fdecea;
            color: #c0392b;
            border: 1px solid #f5c2c0;
            padding: 10px 15px;
            border-radius: 6px;
            margin-bottom: 8px;
            font-size: 14px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: bold;
            color: #444444;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            font-size: 14px;
            font-family: inherit;
        }

        input:focus {
            outline: none;
            border-color: #2563eb;
        }

        button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #1d4ed8;
        }
    </style>
</head>
<body>

    <div class="login-box">

        <h1>Admin Login</h1>

        @if(session('error'))
            <p class="error-msg">{{ session('error') }}</p>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="error-msg">{{ $error }}</p>
            @endforeach
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf

            <label>Email:</label>
            <input type="email" name="email">

            <label>Password:</label>
            <input type="password" name="password">

            <button type="submit">Login</button>

        </form>

    </div>

</body>
</html>