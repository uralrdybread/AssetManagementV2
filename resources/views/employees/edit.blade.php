<x-layout title="Edit Employee">
    <x-navbar>
        <div class="container mx-auto mt-8">
            <h1 class="text-2xl font-bold mb-4">Edit Employee</h1>

            <div class="border border-gray-200 p-6 rounded-lg shadow-md">
                <form method="POST" action="{{ route('employees.update', $employee) }}">
                    @csrf
                    @method('PUT')
                    
                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" name="name" id="name" value="{{ $employee->first_name }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" name="name" id="name" value="{{ $employee->last_name }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ $employee->email }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-4">
                        <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" value="{{ $employee->phone_number }}" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <!-- Address -->
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea name="address" id="address" rows="3" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $employee->address }}</textarea>
                    </div>

                    <!-- Add Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </x-navbar>
</x-layout>