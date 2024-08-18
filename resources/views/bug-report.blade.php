<x-body>
    <div class="h-screen bg-gradient-to-b from-violet-950 to-purple-950 scrollbar-hide">
        <div class="w-full">
            <div class="flex justify-start">
                <a href="/">
                    <div class="inline-flex items-center text-lg cursor-pointer font-bold text-gray-600 dark:text-gray-50">
                        <div class="mt-1.5 ml-1.5 text-indigo-500">
                            <img src="{{ asset('images/logo.svg')}}" class="h-16 w-16">
                        </div>
                    </div>
                </a>
            </div>
            <div class="-mt-8 flex justify-center items-center text-lg cursor-pointer font-bold text-gray-600 dark:text-gray-50">
                <p class="">
                    Bug Reporting
                </p>
            </div>
        </div>
        <form class="max-w-2xl mx-auto scrollbar-hide" method="post" action="/issues">
            @csrf
            <div class="form-group mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input autofocus type="text" id="title" name="title" placeholder="What's the bug about" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="form-group mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">What's the bug?</label>
                <textarea id="description" name="description" rows="12" class="resize-none scrollbar-hide block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="A detailed explanation of the bug"></textarea>
            </div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
            <button type="submit" class="text-white bg-violet-800 hover:bg-violet-900 focus:ring-4 focus:outline-none focus:ring-violet-600 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-violet-800 dark:hover:bg-violet-900 dark:focus:ring-violet-800">Post Report</button>
        </form>
    </div>
</x-body>


