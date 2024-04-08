@props([
    'name',
    'label',
    'value' => '',
    'type' => 'text',
    'width' => '',
    'rows' => '',
    'inputClasses' =>
        'block rounded-md border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm',
])

@php
    $inputClasses .= $type === 'textarea' ? ' resize-none' : ''; // Add 'resize-none' class for textarea inputs
@endphp

<div>
    <label for="{{ $name }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $label }}</label>
    @if ($type === 'textarea')
        <textarea name="{{ $name }}" id="{{ $name }}" autocomplete="off"
            {{ $attributes->merge(['class' => $width . ' ' . $inputClasses]) }}>{{ $value }}</textarea>
    @else
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" autocomplete="off"
            value="{{ $value }}" class="{{ $width }} {{ $inputClasses }}">
    @endif
</div>
