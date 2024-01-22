<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png" type="image/icon type">
    <title>Nedfliks</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-bebas-neue">
    <div class="flex items-center justify-center px-6 py-8 mx-auto bg-cover h-screen md:h-screen lg:py-0" style="background-image: url('img/auth-background.jpg');">
        {{ $slot }}
    </div>
    @include('sweetalert::alert')
</body>
</html>