<x-layout title="Edit Asset">
    <x-navbar>
        <div class="container mx-auto mt-8">
            <h1 class="text-2xl font-bold mb-4">Edit Asset</h1>

            <div class="border border-gray-200 p-6 rounded-lg shadow-md">
                <form method="POST" action="{{ route('assets.update', $asset->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 gap-x-4">
                        <div>
                            <label for="employee_id" class="block text-sm font-medium leading-6 text-gray-900">Employee ID</label>
                            <input type="text" name="employee_id" id="employee_id" autocomplete="off" value="{{ $asset->employee_id }}"
                                class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Company</label>
                            <input type="text" name="company" id="company" autocomplete="off" value="{{ $asset->company }}"
                                class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="model" class="block text-sm font-medium leading-6 text-gray-900">Model</label>
                            <input type="text" name="model" id="model" autocomplete="off" value="{{ $asset->model }}"
                                class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="serial" class="block text-sm font-medium leading-6 text-gray-900">Serial Number</label>
                            <input type="text" name="serial" id="serial" autocomplete="off" value="{{ $asset->serial }}"
                                class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="history_log" class="block text-sm font-medium leading-6 text-gray-900">History Log</label>
                            <textarea name="history_log" id="history_log" rows="3"
                                class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $asset->history_log }}</textarea>
                        </div>
                        <div>
                            <label for="assignment_date" class="block text-sm font-medium leading-6 text-gray-900">Assignment Date</label>
                            <input type="date" name="assignment_date" id="assignment_date" value="{{ $asset->assignment_date }}"
                                class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                            <select name="status" id="status" class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" disabled selected>Select Status</option>
                                @foreach($statuses as $status)
                                    <option value="{{ $status->id }}" {{ $asset->status_id == $status->id ? 'selected' : '' }}>{{ $status->status_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <x-button-component type="submit" text="Update" />
                    </div>
                </form>
            </div>
        </div>
    </x-navbar>
</x-layout>