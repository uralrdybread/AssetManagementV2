<x-layout title="Reports">

    <!-- Main content -->
    <div class="container mx-auto mt-8">

        <!-- Device List -->
        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Employee Name</th>
                        <th scope="col" class="px-6 py-3">Assigned Employee Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($assets as $asset)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $asset->employee->first_name }}</td>
                        <td class="px-6 py-4">{{ $asset->employee->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</x-layout>