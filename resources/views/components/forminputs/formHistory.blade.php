@props([
    'name',
    'label',
    'value' => '',
    'rows' => 5,
    'inputClasses' =>
        'block w-full rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm resize-none',
])

<div>
    <label for="{{ $name }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" autocomplete="off" rows="{{ $rows }}"
        {{ $attributes->merge(['class' => $inputClasses]) }}>{{ $value }}</textarea>
</div>
