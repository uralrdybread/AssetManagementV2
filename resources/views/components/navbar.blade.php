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
            <span class="text-white text-lg font-semibold">Asset Management</span>
        </div>
        <!-- Sidebar links -->
        <x-navbarlinks />
        <!-- Sidebar footer -->
        <div class="flex items-center justify-center mt-auto h-16 bg-gray-900">
            <a href="#" class="text-gray-300 hover:text-white">Logout</a>
        </div>
    </div>
    <div class="flex flex-col flex-1">
        {{$slot}}
    </div>
</div>

</body>
</html>