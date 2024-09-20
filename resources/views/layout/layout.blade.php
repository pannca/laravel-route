<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>
</head>
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 50em;
            background-color: #FFF8E8;
        }

        img {
            width: 75px;
            height: 75px;
            padding: 10px
        }
        ul {
            display: flex;
            gap: 3em;
            list-style-type: none;
            padding: 20px;
        }

        ul li a{
            text-decoration: none;
            color: #343131;
            font-weight:600;
            
        }
    </style>
<body>
    <nav>
        <img src="asset/logo.png" alt="">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>