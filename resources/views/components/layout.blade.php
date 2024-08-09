<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RoseKingdom</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body class="scrollbar-hide">
    <div class="relative min-h-screen overflow-hidden bg-gray-800">
        <div class="relative dark" x-data="{ open: false }" @click.away="open = false">
            <div class="fixed top-0 z-50 w-full transform-gpu px-4 backdrop-blur-sm transition-colors  duration-200 ease-in sm:px-6 lg:px-8 border-b border-white/5  bg-white  dark:bg-transparent dark:shadow-none">
                <div class="mx-auto flex max-w-7xl items-center justify-between border-gray-100 md:justify-start md:space-x-12">
                    <div class="-mr-4 flex justify-start">
                        <a href="/">
                            <div class="inline-flex items-center text-lg cursor-pointer font-bold text-gray-600 dark:text-gray-50  ">
                                <div class="mt-1.5 text-indigo-500">
                                    <img src="images/logo.svg" class="h-10 w-10">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="-my-2 -mr-2 md:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 dark:bg-gray-700" type="button" aria-expanded="false">
                            <span class="sr-only">Open menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                    <nav class="hidden items-center space-x-2 text-gray-300 dark:text-gray-100 md:flex xl:space-x-4">
                        <x-nav-link route="home">Home</x-nav-link>
                        <x-nav-link route="blog">Blog</x-nav-link>
                        <x-nav-link route="guides">Guides</x-nav-link>
                    </nav>
                </div>
            </div>
            <div x-show="open" class="absolute inset-x-0 top-0 z-[200] origin-top-right transform p-2 transition md:hidden opacity-100 scale-100" tabindex="-1">
                <div class="secondary-card-left relative divide-y divide-gray-700 rounded-lg bg-gray-800 bg-gradient-to-br from-gray-500/[15%] to-gray-500/[18%] shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="flex items-center justify-between px-4 py-3 pb-2">
                        <a>
                            <div class="inline-flex cursor-pointer items-center text-base font-bold text-gray-50">
                                <div class="mr-2 text-indigo-500 ">
                                    <img src="images/logo.svg" class="h-10 w-10">
                                </div>
                            </div>
                        </a>
                        <div class="-mr-2">
                            <button @click="open = ! open" class="inline-flex items-center justify-center rounded-md p-1.5 text-gray-200 hover:bg-gray-700 hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" type="button" data-headlessui-state="open">
                                <span class="sr-only">Close menu</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="border-t border-gray-800 py-1">
                        <nav class="grid divide-y divide-gray-800">
                            <x-mobile-nav-link route="home">Home</x-mobile-nav-link>
                            <x-mobile-nav-link route="blog">Blog</x-mobile-nav-link>
                            <x-mobile-nav-link route="guides">Guides</x-mobile-nav-link>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative mx-auto pt-32 sm:pt-44">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
