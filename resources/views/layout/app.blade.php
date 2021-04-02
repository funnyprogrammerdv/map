<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="java.js"></script>
    <script src="https://api-maps.yandex.ru/2.1?apikey=ed051624-e266-4f3d-8d87-39f29dcf8ff4&lang=ru_RU" type="text/javascript"></script>
    
    <title>@yield('title')</title>
    @mapstyles
</head>
<body class="bg-dark text-white">
 @yield('content')

 @mapscripts
</body>
</html>