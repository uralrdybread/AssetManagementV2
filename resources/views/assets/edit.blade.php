<x-layout title="Edit Asset">
    <x-navbar>
        <div class="container mx-auto mt-8">
            <h1 class="text-2xl font-bold mb-4">Edit Asset</h1>

            <div class="border border-gray-200 p-6 rounded-lg shadow-md">
                <form method="POST" action="{{ route('assets.update', $asset->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 gap-x-4 mx-10">
                        <x-formField name="employee_id" label="Employee ID" :value="$asset->employee_id" width="w-32" />
                        <x-formField name="company" label="Company" :value="$asset->company" width="w-80" />
                        <x-formField name="model" label="Model" :value="$asset->model" width="w-80" />
                        <x-formField name="serial" label="Serial Number" :value="$asset->serial" width="w-80" />
                        <x-formHistory name="history_log" label="History Log" :value="$asset->history_log" rows="8" />
                        <x-formField name="assignment_date" label="Assignment Date" :value="$asset->assignment_date" type="date"
                            width="w-65" />
                        <div>
                            <label for="status"
                                class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                            <select name="status" id="status"
                                class="block w-60 rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" disabled selected>Select Status</option>
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}"
                                        {{ $asset->status_id == $status->id ? 'selected' : '' }}>
                                        {{ $status->status_name }}
                                    </option>
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
