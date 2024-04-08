<x-layout>
    <x-navbar>
        <form method="POST" action="{{ route('assets.store') }}">
            @csrf
            <div class="container mx-10 mt-8">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Asset Information</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Enter asset details below:</p>
                        <div class="grid grid-cols-2 gap-x-4">
                            <x-formField name="employee_id" label="Employee ID" type="text" width="w-32"
                                :value="request()->query('employee_id')" />
                            <x-formField name="company" label="Company" type="text" width="w-80" />
                            <x-formField name="model" label="Model" type="text" width="w-80" />
                            <x-formField name="serial" label="Serial Number" type="text" width="w-80" />
                            <x-formHistory name="history_log" label="History Log" :value="''" width="w-full" />
                            <x-formField name="assignment_date" label="Assignment Date" type="date" width="w-65" />
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <x-button-component type="submit" text="Submit" />
                </div>
            </div>
        </form>
    </x-navbar>
</x-layout>
