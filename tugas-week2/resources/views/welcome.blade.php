<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @yield('cssfile')
    <style>
        .center-screen {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        .button-container {
            display: flex;
            justify-content: space-between;
            width: 300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<h1 class="d-flex justify-content-center align-items-center">Klasemen dan List Tim Premier League</h1>
    <div class="center-screen">
        <div class="button-container">
            <a type="button" class="btn btn-light btn-lg" href="/Klasemen">Klasemen</a>
            <a type="button" class="btn btn-light btn-lg" href="/Teams">Tim</a>
        </div>
    </div>
</body>
</html>
