<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black">
    <header class="flex items-center justify-between flex-wrap bg-black sm:p-6 p-4 sticky top-0">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
          <img src="{{ asset('img/logo.png') }}" alt="Logo" class="sm:w-24 w-16">
        </div>
        <div>
            <img src="{{ asset('img/profile-picture.png') }}" alt="Logo" class="sm:w-10 sm:mr-4 w-6 mr-2 rounded-lg">
        </div>
    </header>
    <div>
        {{ $slot }}
    </div>
</body>
</html>