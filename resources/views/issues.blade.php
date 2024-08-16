<x-layout>
    <div class="pt-2 mt-8 md:px-6 xl:px-0 px-4">
        <div class="max-w-5xl mx-auto">
            <div class="mt-4 main-board-layout">
                <div class="relative min-h-[70vh] md:mt-0" x-data="{ open: true }">
                    @if( session('status') )
                        <div x-show="open" id="alert-3" class="absolute inset-x-0 top-0 flex items-center p-4 mb-4 text-gray-800 rounded-lg bg-green-400 dark:bg-green-400 dark:text-gray-800" role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                {{ session('status') }}
                            </div>
                            <button @click="open = ! open" type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-400 text-gray-500 rounded-lg focus:ring-2 focus:ring-green-500 p-1.5 hover:bg-green-400 inline-flex items-center justify-center h-8 w-8 dark:bg-green-400 dark:text-gray-800 dark:hover:bg-green-500" data-dismiss-target="#alert-3" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                    @endif
                    <div class="text-3xl text-gray-200 text-center font-semibold">
                        ISSUES
                    </div>
                    <div class="p-4 -m-4 overflow-x-auto scrollbar-none">
                        <div class="flex justify-between gap-3 mt-4">
                            <div class="flex gap-3">
                                <x-issues.issue-sort route="issues">Trending</x-issues.issue-sort>
                                <x-issues.issue-sort route="issues">Top</x-issues.issue-sort>
                                <x-issues.issue-sort route="issues">New</x-issues.issue-sort>
                            </div>
                            <div class="flex">
                                <x-issues.issue-sort route="report">
                                    <span>
                                        <svg viewBox="0 0 20 20" class="flex-shrink-0 w-3.5 h-3.5 mr-1.5">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                                <path d="M11,9 L11,5 L9,5 L9,9 L5,9 L5,11 L9,11 L9,15 L11,15 L11,11 L15,11 L15,9 L11,9 Z M10,20 C15.5228475,20 20,15.5228475 20,10 C20,4.4771525 15.5228475,0 10,0 C4.4771525,0 0,4.4771525 0,10 C0,15.5228475 4.4771525,20 10,20 Z" id="Combined-Shape"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    Report a Bug
                                </x-issues.issue-sort>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 -mx-4 overflow-hidden rounded-none border-x-0 border-violet-800 sm:border-x sm:rounded-lg sm:mx-0 up-element dark:bg-violet-950 border-y">
                        <div class="text-white w-full divide-y dark:divide-border divide-violet-700">
                            <x-issues.issue title="Гошо як ли е?">Гошо е много як! И никой не може да ми каже другаг.</x-issues.issue>
                            <x-issues.issue title="Русалките акат ли?">Дилемата на века е дали русалките могат да акат и ако могат от къде и как?</x-issues.issue>
                            <x-issues.issue title="Admin abuse">The admins banned me for walking on water. I they said I was cheating, but I was not!</x-issues.issue>
                            @foreach( $issues as $key => $data )
                                <x-issues.issue title="{{ $data->title }}">{{ $data-> description }}</x-issues.issue>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
