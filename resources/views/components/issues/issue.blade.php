@props([
    'title',
    'tag'
])

<div class="relative flex w-full pr-0 duration-75 ease-in sm:items-stretch hover:bg-gradient-to-bl hover:from-violet-800 dark:hover:bg-border/30">
    <a {{ $attributes->merge(['class' => 'hidden w-full h-full min-w-0 py-4 pl-4 pr-3 my-auto overflow-auto rounded-md cursor-pointer sm:block sm:pl-5 sm:py-5']) }}">
        <x-issues.tag tag="{{ $tag }}"></x-issues.tag>
        <p class="text-lg font-semibold text-gray-500 line-clamp-2 content dark:text-white">
            {!! $title !!}
        </p>
        <p class="mt-1 font-semibold text-sm text-gray-300 line-clamp-2 dark:text-foreground">
            {{ $slot }}
        </p>
    </a>
</div>
