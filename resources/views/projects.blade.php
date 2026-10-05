<!DOCTYPE html>
<html>
<head>
    <title>My Projects</title>
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

        /* Navigation Bar - same as Home/About pages */

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

        /* Projects Section */

        .projects {
            max-width: 1000px;
            margin: 70px auto;
            padding: 0 20px;
            text-align: center;
        }

        .projects h1 {
            font-size: 34px;
            color: #2563eb;
            margin-bottom: 45px;
        }

        .projects-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 25px;
        }

        .project {
            background-color: white;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            padding: 30px 25px;
            width: 300px;
            text-align: left;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .project:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
        }

        .project h2 {
            font-size: 20px;
            color: #1f2937;
            margin-bottom: 12px;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 10px;
        }

        .project p {
            font-size: 15px;
            color: #666;
            margin-bottom: 12px;
        }

        .project p:last-child {
            margin-bottom: 0;
        }

        .project p strong {
            color: #2563eb;
        }

        /* Footer - same as other pages */

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
            .projects {
                margin: 40px auto;
            }

            .projects h1 {
                font-size: 26px;
                margin-bottom: 30px;
            }

            .project {
                width: 100%;
                max-width: 340px;
            }

            nav a {
                margin: 0 10px;
                font-size: 14px;
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
    <!-- Projects Section -->
    <div class="projects">
        <h1>My Projects</h1>
        <div class="projects-grid">
            <div class="project">
                <h2>Enquiry Management System</h2>
                <p>
                    A Laravel based project for managing customer enquiries.
                    Admin can view, edit and delete enquiries.
                </p>
                <p><strong>Technology:</strong> PHP, Laravel, MySQL</p>
            </div>
            <div class="project">
                <h2>Photography Website</h2>
                <p>
                    A simple photography website with a clean and
                    user-friendly interface.
                </p>
                <p><strong>Technology:</strong> HTML, CSS, JavaScript</p>
            </div>
            <div class="project">
                <h2>Portfolio Website</h2>
                <p>
                    A personal portfolio website to display my skills,
                    projects and contact information.
                </p>
                <p><strong>Technology:</strong> HTML, CSS, Laravel</p>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2026 My Portfolio. All Rights Reserved.</p>
    </footer>
</body>
</html>