@props([
    'route'
])

@php
    $classes = Request::routeIs($route) ? 'bg-gray-900 text-white' : 'hover:bg-gray-700 hover:text-white'
@endphp
<a href="{{ route($route) }}" class="text-sm rounded-md px-3 py-2 font-medium text-gray-300 {{ $classes }} ">
    {{ $slot }}
</a>
