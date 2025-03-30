<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center text-gray-700">Login</h2>
            <form class="space-y-4" method="POST" action="{{ route('admin.authenticate') }}" >
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-600">Email *</label>
                    <input type="email" id="email" class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-blue-500 focus:border-blue-500" value="admin@gmail.com" name="email" required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-600">Password *</label>
                    <input type="password" id="password" class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-blue-500 focus:border-blue-500" value="Test@1234" name="password" required>
                </div>
                <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Login</button>
            </form>
        </div>
    </body>
</html>
