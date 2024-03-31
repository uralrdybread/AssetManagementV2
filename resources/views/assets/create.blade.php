<x-layout>
    <x-navbar>
        <form method="POST" action="{{ route('assets.store') }}">
            @csrf
            <div class="container mx-auto mt-8">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Asset Information</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Enter asset details below:</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="company" class="block text-sm font-medium leading-6 text-gray-900">Company</label>
                                <input type="text" name="company" id="company" autocomplete="off"
                                    class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="sm:col-span-3">
                                <label for="model" class="block text-sm font-medium leading-6 text-gray-900">Model</label>
                                <input type="text" name="model" id="model" autocomplete="off"
                                    class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="sm:col-span-3">
                                <label for="serial" class="block text-sm font-medium leading-6 text-gray-900">Serial Number</label>
                                <input type="text" name="serial" id="serial" autocomplete="off"
                                    class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <div class="sm:col-span-3">
                                <label for="history_log" class="block text-sm font-medium leading-6 text-gray-900">History Log</label>
                                <textarea name="history_log" id="history_log" rows="3"
                                    class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="assignment_date" class="block text-sm font-medium leading-6 text-gray-900">Assignment Date</label>
                                <input type="date" name="assignment_date" id="assignment_date"
                                    class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>

                            <!-- Add input field for Employee ID -->
                            <div class="sm:col-span-3">
                                <label for="employee_id" class="block text-sm font-medium leading-6 text-gray-900">Employee ID</label>
                                <input type="text" name="employee_id" id="employee_id" autocomplete="off"
                                    class="block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ request()->query('employee_id') }}">
                            </div>
                            <!-- End of Employee ID field -->

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