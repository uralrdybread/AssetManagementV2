<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>

<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="flex flex-col w-64 bg-gray-800">
        <!-- Sidebar header -->
        <div class="flex items-center justify-center h-16 bg-gray-900">
            <a href="/" class="text-white text-lg font-semibold">Asset Management</a>
        </div>
        <!-- Sidebar links -->
        <x-navbarlinks />
        <!-- Sidebar footer -->
        <div class="flex items-center justify-center mt-auto h-16 bg-gray-900">
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Logout') }}
                </button>
            </form>
        </div>
    </div>
    <div class="flex flex-col flex-1">
        {{$slot}}
    </div>
</div>
</body>
</html>