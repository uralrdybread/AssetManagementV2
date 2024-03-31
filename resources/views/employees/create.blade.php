<x-layout>
    <x-navbar>
        <form method="POST" action="{{ route('employees.store') }}">
            @csrf
            <div class="container mx-auto mt-8">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Employee Information</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Enter employee details below:</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                                    class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="sm:col-span-3">
                                <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                                <input type="text" name="last_name" id="last_name" autocomplete="family-name"
                                    class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="sm:col-span-3">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                <input type="email" name="email" id="email" autocomplete="email"
                                    class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="sm:col-span-3">
                                <label for="alt_email" class="block text-sm font-medium leading-6 text-gray-900">Alternate Email</label>
                                <input type="email" name="alt_email" id="alt_email" autocomplete="email"
                                    class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="sm:col-span-3">
                                <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                                <input type="tel" name="phone_number" id="phone_number" autocomplete="tel"
                                    class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="sm:col-span-3">
                                <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                                <input type="text" name="address" id="address" autocomplete="address-line1"
                                    class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <x-button-component text="Add Employee" type="submit"/>
                </div>
            </div>
        </form>
    </x-navbar>
</x-layout>

