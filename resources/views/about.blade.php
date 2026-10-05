<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
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
            line-height: 1.6;
        }

        /* Navigation Bar - same as Home page */

        nav {
            background-color: #1f2937;
            padding: 18px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #93c5fd;
        }

        /* About Section - matches Home page card/section styling */

        .about {
            max-width: 800px;
            margin: 70px auto;
            padding: 45px 40px;
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .about h1 {
            font-size: 34px;
            color: #2563eb;
            margin-bottom: 25px;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 15px;
        }

        .about p {
            font-size: 17px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        .skills {
            margin-top: 35px;
        }

        .skills h2 {
            color: #1f2937;
            margin-bottom: 20px;
            font-size: 22px;
        }

        .skills span {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 10px 18px;
            margin: 5px;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .skills span:hover {
            background-color: #1d4ed8;
            transform: translateY(-2px);
        }

        /* Footer - same as Home page */

        footer {
            text-align: center;
            padding: 22px;
            margin-top: 80px;
            background-color: #1f2937;
            color: white;
            font-size: 14px;
        }

        /* Responsive */

        @media (max-width: 600px) {
            .about {
                margin: 40px 15px;
                padding: 30px 20px;
            }

            .about h1 {
                font-size: 26px;
            }

            .about p {
                font-size: 15px;
            }

            nav a {
                margin: 0 10px;
                font-size: 14px;
            }

            .skills span {
                padding: 8px 14px;
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('projects') }}">Projects</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
    <!-- About Section -->
    <div class="about">
        <h1>About Me</h1>
        <p>
            Welcome to my portfolio website.
            I am a web developer interested in creating
            simple and user-friendly websites.
        </p>
        <p>
            I work with frontend technologies and Laravel
            to build dynamic and responsive web applications.
        </p>
        <div class="skills">
            <h2>My Skills</h2>
            <span>HTML</span>
            <span>CSS</span>
            <span>JavaScript</span>
            <span>PHP</span>
            <span>Laravel</span>
        </div>
    </div>
    <footer>
        <p>© 2026 My Portfolio. All Rights Reserved.</p>
    </footer>
</body>
</html>