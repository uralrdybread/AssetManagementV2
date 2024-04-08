<x-layout>
    <x-navbar>
        <div class="container mx-auto mt-8">

            <body>
                <form method="POST" action="{{ route('maintenances.store') }}">
                    @csrf
                    <div class="space-y-12 mx-10">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Maintenance & Support Request
                            </h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Please provide the details of your
                                maintenance request.</p>
                            <div class="grid grid-cols-2 gap-x-4">
                                <div class="">
                                    <x-formField name="first_name" label="First Name" type="text"
                                        autocomplete="given-name" width="" />
                                </div>

                                <div class="">
                                    <x-formField name="last_name" label="Last Name" type="text"
                                        autocomplete="family-name" width="" />
                                </div>

                                <div class="">
                                    <x-formField name="email" label="Email Address" type="email"
                                        autocomplete="email" width="80" />
                                </div>

                                <div class="">
                                    <x-formField name="serial_number" label="Serial Number" type="text"
                                        autocomplete="off" width="" />
                                </div>

                                <div class="col-span-full">
                                    <x-formHistory name="description" label="Description" rows="3" />
                                    <p class="mt-3 text-sm leading-6 text-gray-600">Please describe the maintenance
                                        issue in detail.</p>
                                </div>
                                <div class="mt-6 flex justify-end gap-x-6">
                                    <button type="submit"
                                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>


        </form>

        @if (Auth::user()->is_admin)
            <div class="card">
                <div class="card-header text-center mb-3">
                    <span class="font-bold">Maintenance Requests</span>
                </div>
                <div class="mx-10">
                    <div class="overflow-x-auto">
                        <table class="table w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">First Name</th>
                                    <th class="px-4 py-2">Last Name</th>
                                    <th class="px-4 py-2">Email</th>
                                    <th class="px-4 py-2">Serial Number</th>
                                    <th class="px-4 py-2">Description</th>
                                    <th class="px-4 py-2">Created At</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($maintenances as $maintenance)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $maintenance->first_name }}</td>
                                        <td class="border px-4 py-2">{{ $maintenance->last_name }}</td>
                                        <td class="border px-4 py-2">{{ $maintenance->email }}</td>
                                        <td class="border px-4 py-2">{{ $maintenance->serial_number }}</td>
                                        <td class="border px-4 py-2">{{ $maintenance->description }}</td>
                                        <td class="border px-4 py-2">
                                            {{ $maintenance->created_at->format('M d, Y H:i:s') }}</td>
                                        <!-- Display created_at field -->
                                        <td class="border px-4 py-2 text-center">
                                            <form action="{{ route('maintenances.destroy', $maintenance->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Resolved</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </x-navbar>
</x-layout>
