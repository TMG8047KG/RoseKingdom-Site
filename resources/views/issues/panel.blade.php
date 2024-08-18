<x-body>
    <div class="relative min-h-screen overflow-hidden bg-gradient-to-b from-indigo-950 to-violet-900">
        <div class="pt-2 mt-8 md:px-6 xl:px-0 px-4">
            <div class="max-w-5xl mx-auto">
                <div class="mt-4 main-board-layout">
                    <div class="relative min-h-[70vh] md:mt-0">
                        <div class="bg-purple-700 bg-opacity-20 drop-shadow-md text-gray-200 font-semibold rounded-lg px-2 py-2 space-y-2">
                            <div class="text-2xl">
                                <p>
                                    {{ $issue->title }}
                                </p>
                            </div>
                            <div>
                                <p>
                                    {{ $issue->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-body>
