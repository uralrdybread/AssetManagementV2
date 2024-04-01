@if(session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         x-transition:enter="transition ease-out duration-0"
         x-transition:leave="transition ease-in duration-1000"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed bottom-3 right-3 bg-blue-500 text-white py-2 px-4 rounded-xl text-sm">
        <p>{{ session('success') }}</p>
    </div>
@endif