<x-layout>
    <x-navbar>
        <div class="container mx-auto mt-8">
            <form method="POST" action="{{ route('employees.store') }}">
                @csrf
                <div class="container mt-8 mx-10">
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Employee Information</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Enter employee details below:</p>
                            <div class="grid grid-cols-2 gap-x-4">
                                <div>
                                    <x-formField name="first_name" label="First Name" type="text"
                                        autocomplete="given-name" width="w-50" />
                                </div>

                                <div>
                                    <x-formField name="last_name" label="Last Name" type="text"
                                        autocomplete="family-name" width="w-50" />
                                </div>

                                <div>
                                    <x-formField name="email" label="Email" type="email" autocomplete="email"
                                        width="w-80" />
                                </div>

                                <div>
                                    <x-formField name="alt_email" label="Alternate Email" type="email"
                                        autocomplete="email" width="w-80" />
                                </div>

                                <div>
                                    <x-formField name="phone_number" label="Phone Number" type="tel"
                                        autocomplete="tel" width="w-60" />
                                </div>

                                <div>
                                    <x-formField name="address" label="Address" type="text"
                                        autocomplete="address-line1" width="w-96" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <x-button-component text="Add Employee" type="submit" />
                </div>
            </form>
        </div>
    </x-navbar>
</x-layout>
