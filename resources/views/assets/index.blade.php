<x-layout title="Welcome to CompanyX Asset Management">
    <x-navbar>
        <!-- Main content -->
        <div class="container mx-auto mt-8">

            <!-- Search Bar and Create Asset Button -->
            <div class="flex justify-between items-center">
                <!-- Search Bar -->

            <div class="relative mt-4 ml-4 mb-4">
                <form action="{{ route('assets.index') }}" method="GET" class="relative mt-4 ml-4 mb-4">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
            <input type="text" name="search" value="{{ request('search') }}" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 flex items-center" placeholder="Search by Serial">
            <button type="submit" class="pt-1 absolute inset-y-0 right-0 px-3 py-2 bg-blue-500 text-white rounded-r-lg">Search</button>
                </form>
            </div>

                <!-- Create Asset Button -->
                <div class="mt-4 mr-4">
                    <x-button-component text="Create Asset" route="{{ route('assets.create') }}" />
                </div>
            </div>
            
            <!-- Asset Table -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4 mb-4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Employee
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Company
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Model
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Serial
                            </th>
                            <th scope="col" class="px-6 py-3">
                                History Log
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Assignment Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Asset data will be dynamically populated here -->
                        @foreach($assets as $asset)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $asset->id }}</td>
                            <td class="px-6 py-4">{{ $asset->employee->first_name ?? 'NA' }} {{ $asset->employee->last_name ?? 'NA' }}</td>
                            <td class="px-6 py-4">{{ $asset->company }}</td>
                            <td class="px-6 py-4">{{ $asset->model }}</td>
                            <td class="px-6 py-4">{{ $asset->serial }}</td>
                            <td class="px-6 py-4">{{ $asset->history_log ?? 'N/A' }}</td>
                            <td class="px-6 py-4">{{ $asset->assignment_date ?? 'N/A' }}</td>
                            <td class="px-6 py-4">{{ optional($asset->status)->status_name }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('assets.edit', $asset->id) }}" class="font-medium text-green-600 hover:underline ml-2">Edit</a>
                                
                                {{-- Delete button start --}}
                                <form method="POST" action="{{ route('assets.destroy', $asset->id) }}" id="deleteForm_{{ $asset->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete('{{ $asset->id }}')" class="font-medium text-red-600 hover:underline ml-2">Delete</button>
                                </form>
                                {{-- Delete button end --}}
                        </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination Links -->
            {{ $assets->links() }}
            
        </div>
    </x-navbar>
</x-layout>