<x-layout title="Welcome to CompanyX Asset Management">
    <body>
        <!-- Include the Navbar component -->
        <x-navbar>
            <div class="container mx-auto mt-8">
                @guest
                <!-- If user is not logged in -->
                <div class="mt-8 flex flex-wrap items-center justify-center">
                    <div class="max-w-lg lg:max-w-full mr-8">
                        <p class="text-lg text-center text-gray-700">
                            Welcome to CompanyX Asset Management. Please 
                            <a href="{{ route('register') }}" class="underline text-indigo-600 hover:text-indigo-900">register</a> or 
                            <a href="{{ route('login') }}" class="underline text-indigo-600 hover:text-indigo-900">login</a> to continue.
                            If you are an employee requiring help with your device please click on maintenance after registering.
                        </p>
                    </div>
                    <div class="mt-8 max-w-lg lg:max-w-full">
                        <img src="{{ asset('images/assetlifecycle.png') }}" alt="Asset Lifecycle Image" class="max-w-full border-4 border-indigo-600 rounded-lg shadow-lg">
                    </div>
                </div>
                @else
                <!-- If user is logged in -->
                <div class="mt-8 text-center">
                    <p class="text-lg text-gray-700">Welcome back, {{ auth()->user()->name }}!</p>
                </div>
                <div class="mt-8 max-w-lg lg:max-w-full">
                    <img src="{{ asset('images/assetlifecycle.png') }}" alt="Asset Lifecycle Image" class="max-w-full border-4 border-indigo-600 rounded-lg shadow-lg">
                </div>
                @endguest
            </div>
        </x-navbar>
    </body>
</x-layout>