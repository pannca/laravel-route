<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Improved Navbar</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #FFF8E8;
            padding: 10px 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        img {
            width: 75px;
            height: 75px;
            cursor: pointer;
        }

        ul {
            display: flex;
            gap: 2em;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        ul li a {
            text-decoration: none;
            color: #343131;
            font-weight: 600;
            padding: 10px 15px;
            transition: color 0.3s, background-color 0.3s;
        }

        ul li a:hover {
            background-color: #343131;
            color: #FFF8E8;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                padding: 20px;
            }

            ul {
                flex-direction: column;
                gap: 1.5em;
            }
        }
    </style>
</head>
<body>
    <nav>
        <img src="asset/logo.png" alt="Logo">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>
