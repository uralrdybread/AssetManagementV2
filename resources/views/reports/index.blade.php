<x-layout title="Reports">
<x-navbar>
    <div class="container mx-auto mt-8 text-center">
         <h1 class="text-2xl font-bold mb-4">Devices that need to be replaced</h1>
        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Employee Name</th>
                        <th scope="col" class="px-6 py-3">Assigned Employee Email</th>
                        <th scope="col" class="px-6 py-3">Issued Date</th>
                        <th scope="col" class="px-6 py-3">Device Seriel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($assets as $asset)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $asset->employee->first_name ?? 'NA' }} {{ $asset->employee->last_name ?? 'NA' }}</td>
                        <td class="px-6 py-4">{{ $asset->employee->email }}</td>
                        <td class="px-6 py-4">{{ $asset->assignment_date ?? 'N/A' }}</td>
                        <td class="px-6 py-4">{{ $asset->serial }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-navbar>
</x-layout>