<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>

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

        /* Navigation Bar */

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

        /* Hero Section */

        .home {
            text-align: center;
            padding: 110px 20px 90px;
            background: linear-gradient(180deg, #eef2f7 0%, #f5f5f5 100%);
        }

        .home h1 {
            font-size: 46px;
            margin-bottom: 18px;
        }

        .home h1 span {
            color: #2563eb;
        }

        .home p {
            font-size: 18px;
            color: #666;
            max-width: 550px;
            margin: 0 auto 35px;
        }

        .button {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 13px 30px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .button:hover {
            background-color: #1d4ed8;
            transform: translateY(-2px);
        }

        /* What I Do Section */

        .services {
            padding: 80px 20px;
            text-align: center;
        }

        .services h2 {
            font-size: 30px;
            margin-bottom: 45px;
            color: #1f2937;
        }

        .services-grid {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            max-width: 900px;
            margin: 0 auto;
        }

        .service-card {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 35px 25px;
            width: 260px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        }

        .service-card h3 {
            font-size: 19px;
            margin-bottom: 12px;
            color: #2563eb;
        }

        .service-card p {
            font-size: 15px;
            color: #666;
        }

        /* Footer */

        footer {
            text-align: center;
            padding: 22px;
            margin-top: 40px;
            background-color: #1f2937;
            color: white;
            font-size: 14px;
        }

        /* Responsive */

        @media (max-width: 600px) {
            .home h1 {
                font-size: 32px;
            }

            .home p {
                font-size: 16px;
            }

            nav a {
                margin: 0 10px;
                font-size: 14px;
            }

            .services h2 {
                font-size: 24px;
            }

            .service-card {
                width: 100%;
                max-width: 320px;
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


    <!-- Home Section -->

    <div class="home">

        <h1>Hi, I'm <span>Farooq</span></h1>

        <p>
            Welcome to my portfolio website.
            I am a web developer and I love creating websites.
        </p>

        <a href="{{ route('projects') }}" class="button">
            View My Projects
        </a>

    </div>


    <!-- What I Do Section -->

    <div class="services">

        <h2>What I Do</h2>

        <div class="services-grid">

            <div class="service-card">
                <h3>Web Development</h3>
                <p>Building functional and user-friendly websites from scratch.</p>
            </div>

            <div class="service-card">
                <h3>Laravel</h3>
                <p>Developing backend logic and dynamic web apps using Laravel.</p>
            </div>

            <div class="service-card">
                <h3>Frontend Development</h3>
                <p>Creating clean, responsive interfaces with HTML and CSS.</p>
            </div>

        </div>

    </div>


    <footer>
        <p>© 2026 My Portfolio. All Rights Reserved.</p>
    </footer>

</body>
</html>