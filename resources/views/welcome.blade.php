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
        <div class="flex flex-col p-4 space-y-2">
                <a href="#" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-md">
                    <x-dashboard-icon class="h-5 w-5 text-white" />
                    <span class="ml-4">Dashboard</span>
                </a>
                <a href="#" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-md">
                    <x-dashboard-icon class="h-5 w-5 text-white" />
                    <span class="ml-4">Asset</span>
                </a>
                    <a href="#" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-md">
                    <x-dashboard-icon class="h-5 w-5 text-white" />
                <span class="ml-4">Employee</span>
                </a>
                <a href="#" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-md">
                    <x-dashboard-icon class="h-5 w-5 text-white" />
                    <span class="ml-4">Maintenance</span>
                </a>
                <a href="#" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-md">
                    <x-report-icon class="h-5 w-5 text-white" />
                    <span class="ml-4">Reports</span>
                </a>
        </div>
        <!-- Sidebar footer -->
        <div class="flex items-center justify-center mt-auto h-16 bg-gray-900">
            <a href="#" class="text-gray-300 hover:text-white">Logout</a>
        </div>
    </div>
    <!-- Main content -->
    <div class="flex flex-col flex-1">
        <!-- Content here -->
    </div>
</div>

</body>
</html>