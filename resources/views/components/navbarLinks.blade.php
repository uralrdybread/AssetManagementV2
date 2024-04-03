<div class="flex flex-col p-4 space-y-2">
    @auth
        @if(Auth::user()->is_admin)
            <!-- Admin links -->
            <a href="{{ route('dashboard') }}" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-md">
                <x-dashboard-icon class="h-5 w-5 text-white" />
                <span class="ml-4">Dashboard</span>
            </a>

            <a href="{{ route('assets.index') }}" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-md">
                <x-asset-icon class="h-5 w-5 text-white" />
                <span class="ml-4">Assets</span>
            </a>

            <a href="{{ route('employees.index') }}" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-md">
                <x-employee-icon class="h-5 w-5 text-white" />
                <span class="ml-4">Employees</span>
            </a>

            <a href="{{ route('reports.index') }}" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-md">
                <x-report-icon class="h-5 w-5 text-white" />
                <span class="ml-4">Reports</span>
            </a>

            <a href="{{ route('maintenance.index') }}" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-md">
                <x-maintenance-icon class="h-5 w-5 text-white" />
                <span class="ml-4">Maintenance</span>
            </a>

            <!-- Other admin links -->
        @else
            <!-- Regular user links -->
            <a href="{{ route('dashboard') }}" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-md">
                <x-dashboard-icon class="h-5 w-5 text-white" />
                <span class="ml-4">Dashboard</span>
            </a>

            <a href="{{ route('maintenance.index') }}" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-md">
                <x-maintenance-icon class="h-5 w-5 text-white" />
                <span class="ml-4">Maintenance</span>
            </a>
        @endif
    @endauth
</div>