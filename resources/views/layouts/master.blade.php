<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Absen | @yield('title')</title>

     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <script src="script.js" defer></script>
</head>
<body>

     @include('layouts.header')

     @yield('body')

     @include('layouts.footer')

     @include('sweetalert::alert')
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
     <script>
        console.log('Alpine.js loaded');
     </script>
</body>
</html>
