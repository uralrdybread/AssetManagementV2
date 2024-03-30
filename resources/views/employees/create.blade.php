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
                        </div>
                    </div>
                </div>

                <!-- Assigned Assets -->
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-lg font-semibold mb-4">Assigned Assets</h2>
                    @if ($employee->assets->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left border-collapse">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
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