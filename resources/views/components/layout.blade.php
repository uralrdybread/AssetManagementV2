<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <link
        href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Company Asset Management</title>
</head>

<body>
    {{ $slot }}
    <x-flash />
    <script>
        function confirmDelete(employeeId) {
            if (confirm('Are you sure you want to delete this employee?')) {
                // If user confirms deletion, submit the corresponding form
                document.getElementById('deleteForm_' + employeeId).submit();
            } else {
                // If user cancels deletion, do nothing
                return false;
            }
        }
    </script>
</body>



</html>
