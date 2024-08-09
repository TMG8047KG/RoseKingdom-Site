@props([
    'route'
])

@php
    $classes = Request::routeIs($route) ? 'bg-gray-900 text-white' : 'hover:bg-gray-700 hover:text-white hover:shadow-sm text-gray-400'
@endphp
<a href="{{ route($route) }}" class="main-transition flex items-center bg-gray-800  px-4 py-3 rounded-lg m-1 mx-2 {{ $classes }} ">
    {{ $slot }}
</a>
