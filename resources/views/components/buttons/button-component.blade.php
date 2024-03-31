@props(['text', 'route'])

@if (isset($route))
    <a href="{{ $route }}" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded-lg inline-flex items-center transition-transform duration-100 ease-in-out transform hover:-translate-y-0.5">
        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>
        <span class="ml-2">{{ $text }}</span>
    </a>
@else
    <button type="submit" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded-lg inline-flex items-center transition-transform duration-100 ease-in-out transform hover:-translate-y-0.5">
        <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>
        <span class="ml-2">{{ $text }}</span>
    </button>
@endif