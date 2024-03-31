<x-layout>
    <div class="flex">
        <x-navbar/>

        <div class="container mx-auto mt-8 ml-auto w-2/3">
            <div class="border border-gray-200 p-6 rounded-lg shadow-md">
                <h1 class="text-xl font-bold mb-4">Asset Details</h1>
                <div class="grid grid-cols-2 gap-x-4">
                    <div>
                        <p><span class="font-semibold">Company:</span> {{ $asset->company }}</p>
                        <p><span class="font-semibold">Model:</span> {{ $asset->model }}</p>
                        <p><span class="font-semibold">Serial:</span> {{ $asset->serial }}</p>
                    </div>
                    <div>
                        <p><span class="font-semibold">History Log:</span> {{ $asset->history_log }}</p>
                        <p><span class="font-semibold">Assignment Date:</span> {{ $asset->assignment_date }}</p>
                        @if($asset->employee_id)
                            <p><span class="font-semibold">Assign to Employee:</span> <a href="{{ route('employees.show', $asset->employee_id) }}">{{ $asset->employee_id }}</a></p>
                        @else
                            <p><span class="font-semibold">Assign to Employee:</span> Not assigned</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>