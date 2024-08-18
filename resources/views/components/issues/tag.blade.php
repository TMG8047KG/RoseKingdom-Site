@props([
    'tag',
    'type' => $tag,
    'types' => [
        '1' => 'bg-purple-50 hover:bg-purple-100 dark:hover:shadow-purple-700/20 dark:bg-purple-500/10 dark:text-purple-500 text-purple-600 dark:border-purple-500/10 border-purple-100',
        '2' => 'bg-orange-50 hover:bg-orange-100 dark:hover:shadow-orange-700/20 dark:bg-orange-500/10 dark:text-orange-500 text-orange-600 dark:border-orange-500/10 border-orange-100',
        '3' => 'bg-blue-50 hover:bg-blue-100 dark:hover:shadow-blue-700/20 dark:bg-blue-500/10 dark:text-blue-500 text-blue-600 dark:border-blue-500/10 border-blue-100'
        ],
    'tags' => [
        '1' => 'Planned',
        '2' => 'In Progress',
        '3' => 'Investigating'
        ]
])

<div class="inline-block">
    <p class="{{ $types[$tag] }} pointer-events-none px-2 py-0.5 flex items-center text-xs font-medium rounded-md border">
        {{ $tags[$tag] }}
    </p>
</div>
