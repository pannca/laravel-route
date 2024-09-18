@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <style>
        .fcontainer{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        h1 {
            background-color: #384B70;
            color: white;
            text-align: center;
            width: 30%;
            padding: 50px;
            margin-top: 13%;
            border-radius: 10px;
        }
    </style>
<body>
    <div class="fcontainer">
    <h1>Home</h1>
</div>
</body>
</html>
@endsection