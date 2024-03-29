<x-layout title="Welcome to CompanyX asset Management">
<body>
    <!-- Include the Navbar component -->
    <x-navbar>
        <!-- Content to render within the navbar -->
        <div class="flex flex-col">
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold text-center">Welcome to CompanyX Asset Management</h1>
        <p class="text-lg text-center mt-4">This is the introduction</p>
        <!-- Add any other content here -->
    </div>
        </div>
    </x-navbar>
    <!-- Include any JavaScript files if needed -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
</x-layout>
