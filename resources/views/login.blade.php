<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- Tambahkan CDN Tailwind CSS -->
    @vite('resources/css/app.css')

</head>
<body class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('foto.jpg')">
    
    <form class="bg-white/80 backdrop-blur-sm p-8 rounded-lg shadow-lg w-80">
        <div class="mb-6">
            <label for="username" class="block text-gray-800 mb-2">
                USERNAME :
            </label>
            <input 
                type="text" 
                id="username" 
                name="username"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div class="mb-6">
            <label for="password" class="block text-gray-800 mb-2">
                PASSWORD :
            </label>
            <input 
                type="password" 
                id="password" 
                name="password"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <button 
            type="submit"
            class="w-full bg-blue-500 text-white py-3 rounded-md hover:bg-blue-600 transition-colors duration-300"
        >
            LOGIN
        </button>
    </form>
        <a class="py-12"href="{{ route('about') }}">Click here</a>
</body>
</html>