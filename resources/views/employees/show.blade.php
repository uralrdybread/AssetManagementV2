<x-layout>
    <x-navbar>
        <body>
            <div class="container mx-auto mt-8">
                <h1 class="text-2xl font-bold mb-4">Employee Details</h1>

                <!-- Employee Information -->
                <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                    <h2 class="text-lg font-semibold mb-4">Employee Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600 mb-2"><span class="font-semibold">Name:</span> {{ $employee->first_name ?? 'NA' }} {{ $employee->last_name ?? 'NA' }}</p>
                            <p class="text-sm text-gray-600 mb-2"><span class="font-semibold">Email:</span> {{ $employee->email }}</p>
                            <p class="text-sm text-gray-600 mb-2"><span class="font-semibold">Phone Number:</span> {{ $employee->phone_number }}</p>
                            <p class="text-sm text-gray-600 mb-2"><span class="font-semibold">Address:</span> {{ $employee->address }}</p>
                            <p class="text-sm text-gray-600 mb-2"><span class="font-semibold">Employee ID:</span> {{ $employee->id }}</p>
                        </div>
                    </div>
                </div>
                  <div class="mt-4 mb-4">
                <a href="{{ route('assets.create', ['employee_id' => $employee->id]) }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg inline-flex items-center transition-transform duration-100 ease-in-out transform hover:-translate-y-0.5">
                    <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <span class="ml-2">Assign Device</span>
                </a>
            </div>

                <!-- Assigned Assets -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-lg font-semibold mb-4">Assigned Assets</h2>
                    @if ($employee->assets->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left border-collapse">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3">Company</th>
                                        <th class="px-6 py-3">Model</th>
                                        <th class="px-6 py-3">Serial</th>
                                        <th class="px-6 py-3">History Log</th>
                                        <th class="px-6 py-3">Assignment Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employee->assets as $asset)
                                        <tr class="bg-white border-b hover:bg-gray-50">
                                            <td class="px-6 py-4">{{ $asset->company }}</td>
                                            <td class="px-6 py-4">{{ $asset->model }}</td>
                                            <td class="px-6 py-4">{{ $asset->serial }}</td>
                                            <td class="px-6 py-4">{{ $asset->history_log }}</td>
                                            <td class="px-6 py-4">{{ $asset->assignment_date }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-gray-600">No assets assigned.</p>
                    @endif
                </div>
            </div>
        </body>
    </x-navbar>
</x-layout>