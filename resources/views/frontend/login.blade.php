<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <script src="script.js" defer></script>
</head>


<body class="bg-gray-100">
    <main class="container mx-auto p-4">
        <section id="login" class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Login</h2>
            <form method="POST" action="{{route('login.post')}}">
                @csrf
                <div class="mb-4">
                    <label for="nrk"  class="block text-gray-700 font-bold mb-2">NRK</label>
                    <input type="text" name="nrk" id="nrk" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                 @error('nrk')
    <div class="text-red-500 mt-2">{{ $message }}</div>
@enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('password')
                    <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
            </form>
        </section>
    </main>
</body>


</html>
