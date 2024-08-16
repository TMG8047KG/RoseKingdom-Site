@props([
    'route'
])

<a href="{{ route($route) }}" class="inline-flex items-center justify-center font-semibold text-md border-2 border-gray-800 bg-violet-900 bg-opacity-50 shadow-md py-1 px-3 text-gray-200 rounded-lg">
    {{ $slot }}
</a>
