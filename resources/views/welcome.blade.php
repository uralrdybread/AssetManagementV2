<x-layout title="Welcome to CompanyX Asset Management">
    <body>
        <!-- Include the Navbar component -->
        <x-navbar>

        @guest
            <!-- If user is not logged in -->
            <div class="mt-8">
                <p class="text-lg">Welcome to CompanyX Asset Management. Please {{ __('register') }} or {{ __('login') }} to continue.</p>
                <div class="flex items-center justify-between mt-4">
                    <a href="{{ route('register') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Register') }}
                    </a>
                    <span class="text-sm">or</span>
                    <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Login') }}
                    </a>
                </div>
            </div>
        @else
            <!-- If user is logged in -->
            <div class="mt-8">
                <p class="text-lg">Welcome back, {{ auth()->user()->name }}!</p>
            </div>
        @endguest

        </x-navbar>
    </body>
</x-layout>