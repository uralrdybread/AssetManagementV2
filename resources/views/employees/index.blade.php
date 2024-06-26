<x-layout>
    <x-navbar>
        <div class="container mx-auto mt-8">
            <div class="flex justify-between items-center mb-4">
                <!-- Search Bar -->
                <div class="relative mt-4 ml-4 mb-4">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    </div>
                    <form action="{{ route('employees.index') }}" method="GET" class="relative mt-4 ml-4 mb-4">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" name="search" value="{{ request('search') }}"
                            class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 flex items-center"
                            placeholder="Search First or Last Name">
                        <button type="submit"
                            class="pt-1 absolute inset-y-0 right-0 px-3 py-2 bg-blue-500 text-white rounded-r-lg">Search</button>
                    </form>
                </div>

                <!-- Add Employee Button -->
                <div>
                    <x-button-component text="Add Employee" route="{{ route('employees.create') }}" />
                </div>
            </div>

            <!-- Employee Table -->
            <div class="relative shadow-md sm:rounded-lg mb-4 mx-10">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Phone Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Address
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <a href="{{ route('employees.show', $employee) }}"
                                        class="hover:underline">{{ $employee->first_name ?? 'NA' }}
                                        {{ $employee->last_name ?? 'NA' }}</a>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $employee->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $employee->phone_number }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $employee->address }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('employees.edit', $employee) }}"
                                        class="font-medium text-green-600 hover:underline mx-3">Edit</a>
                                    <form id="deleteForm_{{ $employee->id }}"
                                        action="{{ route('employees.destroy', $employee) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" onclick="confirmDelete('{{ $employee->id }}')"
                                            class="font-medium text-red-600 hover:underline ml-2">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination Links -->
            {{ $employees->links() }}
        </div>
    </x-navbar>
</x-layout>
