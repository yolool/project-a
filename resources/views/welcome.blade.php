<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ... (your existing head content) ... -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Additional Styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif; /* Changed font to Arial */
            margin: 0;
            padding: 0;
            background-color: #000; /* Set background color to black */
            color: #fff; /* Set text color to white */
        }

        .custom-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .rotating-box {
            display: inline-block;
            padding: 10px;
            margin: 10px; /* Added space between rotating boxes */
            border: 2px solid #fff; /* Set border color to white */
            border-radius: 5px;
            transform-origin: center;
            transition: transform 0.5s ease-in-out;
            transform: rotate(0deg); /* Make boxes horizontal */
        }

        .rotating-box:hover {
            transform: rotate(360deg);
        }

        .custom-title {
            font-size: 2rem;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-in-out; /* Added fadeInUp animation */
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .custom-links a {
            text-decoration: none;
            font-size: 1.2rem;
            color: #fff; /* Set link color to white */
        }

        .custom-links a:hover {
            color: #896825; /* Bootstrap primary color */
        }
    </style>
</head>

<body class="antialiased">
    <div class="custom-container">
        <div class="custom-title">
            Welcome to Our Website
        </div>

        <div class="rotating-box">
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            @endif
        </div>

        <div class="rotating-box">
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-e0qT5fKO1C+qOrXKipFyGHVZpO9ggw4esX+91vZiFnpqI5PTc6RJR0L8rAOrQYB4" crossorigin="anonymous"></script>
</body>
</html>
