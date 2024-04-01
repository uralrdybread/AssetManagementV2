<x-layout title="Reports">
    <x-navbar>
        <div class="container mx-auto mt-8 text-center">
            <h1 class="text-2xl font-bold mb-4">Devices that need to be replaced</h1>
            <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Employee Name</th>
                            <th scope="col" class="px-6 py-3">Assigned Employee Email</th>
                            <th scope="col" class="px-6 py-3">Issued Date</th>
                            <th scope="col" class="px-6 py-3">Device Serial</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($assets as $asset)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">{{ $asset->employee->first_name ?? 'NA' }} {{ $asset->employee->last_name ?? 'NA' }}</td>
                            <td class="px-6 py-4">{{ $asset->employee->email }}</td>
                            <td class="px-6 py-4">{{ $asset->assignment_date ?? 'N/A' }}</td>
                            <td class="px-6 py-4">{{ $asset->serial }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <h1 class="text-2xl font-bold mt-8 mb-4">Unassigned Devices</h1>
            @if ($unassignedAssets->count() > 0)
            <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">Device Serial</th>
                            <th scope="col" class="px-6 py-3">Company</th>
                            <th scope="col" class="px-6 py-3">Model</th>
                            <th scope="col" class="px-6 py-3">Log</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($unassignedAssets as $asset)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4"><a href="{{ route('assets.show', $asset->id) }}">{{ $asset->id }}</td>
                            <td class="px-6 py-4">{{ $asset->serial }}</td>
                            <td class="px-6 py-4">{{ $asset->company }}</td>
                            <td class="px-6 py-4">{{ $asset->model }}</td>
                            <td class="px-6 py-4">{{ $asset->history_log }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <p class="text-gray-600 mt-4">No unassigned devices found.</p>
            @endif
        </div>
    </x-navbar>
</x-layout>