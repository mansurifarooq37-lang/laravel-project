<!DOCTYPE html>
<html>
<head>
    <title>Contact Me</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #f5f5f5;
            font-family: Arial, Helvetica, sans-serif;
            color: #333;
        }

        /* Navigation Bar */

        nav {
            background-color: #1f2937;
            padding: 18px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 16px;
            font-weight: 500;
        }

        nav a:hover {
            color: #93c5fd;
        }

        /* Contact Section */

        .contact-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
        }

        .form-box {
            background-color: #ffffff;
            width: 100%;
            max-width: 480px;
            padding: 35px 30px;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 25px;
            color: #2563eb;
            font-size: 28px;
        }

        .success-msg {
            background-color: #e6f7ec;
            color: #1e7e34;
            border: 1px solid #b7ebc6;
            padding: 10px 15px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
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

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            font-size: 14px;
            font-family: inherit;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #2563eb;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #2563eb;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #1d4ed8;
        }

        /* Footer */

        footer {
            background-color: #1f2937;
            color: white;
            text-align: center;
            padding: 22px;
            font-size: 14px;
        }

        /* Responsive */

        @media (max-width: 600px) {

            nav a {
                margin: 0 10px;
                font-size: 14px;
            }

            .contact-section {
                padding: 40px 15px;
            }

            .form-box {
                padding: 30px 20px;
            }

            h1 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About Me</a>
        <a href="{{ route('projects') }}">Projects</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>


    <!-- Contact Section -->

    <div class="contact-section">

        <div class="form-box">

            <h1>Contact Me</h1>

            @if(session('success'))
                <p class="success-msg">{{ session('success') }}</p>
            @endif

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="error-msg">{{ $error }}</p>
                @endforeach
            @endif

            <form action="{{ route('enquiry.store') }}" method="POST">

                @csrf

                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}">

                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}">

                <label>Phone:</label>
                <input type="tel" name="phone" inputmode="numeric"
                       maxlength="10" value="{{ old('phone') }}">

                <label>Subject:</label>
                <input type="text" name="subject" value="{{ old('subject') }}">

                <label>Message:</label>
                <textarea name="message">{{ old('message') }}</textarea>

                <button type="submit">Send Enquiry</button>

            </form>

        </div>

    </div>


    <!-- Footer -->

    <footer>
        <p>© 2026 My Portfolio. All Rights Reserved.</p>
    </footer>

</body>
</html>